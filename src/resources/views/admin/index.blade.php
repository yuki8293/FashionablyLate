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
        {{-- ダミーデータ（あとでDBに置き換える） --}}
        <tr>
            <td>山田 太郎</td>
            <td>男性</td>
            <td>yamada@example.com</td>
            <td>商品のお届けについて</td>
            <td><button>詳細</button></td>
        </tr>
        <tr>
            <td>鈴木 花子</td>
            <td>女性</td>
            <td>suzuki@example.com</td>
            <td>商品交換について</td>
            <td><button>詳細</button></td>
        </tr>
    </tbody>
</table>

@endsection