@extends('layouts.admin')

@section('content')

<h1 class="admin-title">Admin</h1>

{{-- 検索フォーム --}}
<div class="search-section">
    @include('admin.search')

    {{-- ページネーション --}}
    <div class="pagination">
        <button class="prev">&lt;</button> <!-- 前へ -->
        <button class="page">1</button>
        <button class="page">2</button>
        <button class="page">3</button>
        <button class="page">4</button>
        <button class="page">5</button>
        <button class="next">&gt;</button> <!-- 次へ -->
    </div>
</div>

<!-- 件数確認用 -->
<p>件数: {{ $contacts->count() }}</p>

{{-- 一覧テーブル --}}
<table class="contact-table">
    <thead>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
            <td>{{ $contact->gender }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                @if($contact->category_id == 1) 商品のお届けについて
                @elseif($contact->category_id == 2) 商品交換について
                @elseif($contact->category_id == 3) 商品トラブル
                @elseif($contact->category_id == 4) ショップへのお問い合わせ
                @elseif($contact->category_id == 5) その他
                @endif
            </td>
            <td><button>詳細</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection