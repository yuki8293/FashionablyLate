@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
        <h2>送信完了</h2>
        <p>お問い合わせありがとうございます。</p>
    </div>
    <a href="/" class="thanks__button">トップに戻る</a>
</div>
@endsection