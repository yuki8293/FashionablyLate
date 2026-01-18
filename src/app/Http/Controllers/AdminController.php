<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        // 検索条件
        if ($request->filled('name')) {
            $query->where('name', 'like', "%{$request->name}%");
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        $contacts = $query->paginate(7);

        return view('admin.index', compact('contacts'));
    }

    // エクスポート用（応用）
    public function export(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('name')) $query->where('name', 'like', "%{$request->name}%");
        if ($request->filled('gender')) $query->where('gender', $request->gender);
        if ($request->filled('type')) $query->where('type', $request->type);
        if ($request->filled('date')) $query->whereDate('created_at', $request->date);

        $contacts = $query->get();

        // CSV生成
        $filename = 'contacts.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function () use ($contacts) {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['名前', '性別', 'メールアドレス', 'お問い合わせの種類']);
            foreach ($contacts as $contact) {
                fputcsv($file, [$contact->name, $contact->gender, $contact->email, $contact->type]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
