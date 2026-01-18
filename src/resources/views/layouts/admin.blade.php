<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

    {{-- ヘッダー --}}
    <header class="header">
        <div class="header__inner">
            <a href="/admin" class="header__logo">
                FashionablyLate
            </a>
        </div>
    </header>

    {{-- メイン --}}
    <main class="main">
        @yield('content')
    </main>

</body>

</html>