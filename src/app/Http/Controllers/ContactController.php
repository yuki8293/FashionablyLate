<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    // 確認画面
    public function confirm(Request $request)
    {
        // 入力値をまとめて取得
        $contact = $request->all();

        return view('contact.confirm', compact('contact'));
    }

    // 送信完了
    public function store(Request $request)
    {
        // 今は保存しない（あとでDB）
        return view('contact.thanks');
    }
}

