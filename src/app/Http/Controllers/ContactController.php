<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('contact.index', compact('categories'));
    }

    // 確認画面
    public function confirm(ContactRequest $request)
    {
        $contact = $request->validated();

        $contact['tel'] = $contact['tel1'] . $contact['tel2'] . $contact['tel3'];

        $categories = [
            1 => '商品のお届けについて',
            2 => '商品の交換について',
            3 => '商品トラブル',
            4 => 'ショップへのお問い合わせ',
            5 => 'その他',
        ];

        $contact['category'] = $categories[$contact['category_id']] ?? '';


        return view('contact.confirm', compact('contact'));
    }

    // 送信完了
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();

        // 電話番号を結合
        $validated['tel'] =
            $validated['tel1'] .
            $validated['tel2'] .
            $validated['tel3'];

        // DBに存在しない項目を削除
        unset($validated['tel1'], $validated['tel2'], $validated['tel3']);

        Contact::create($validated);

        return view('contact.thanks');
    }
}
