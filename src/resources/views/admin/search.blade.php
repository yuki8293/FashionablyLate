<form class="search-form" method="get" action="{{ route('admin.search') }}">

    <div class="search-row">
        <div class="name-input">
            <input type="text" name="name" placeholder="名前やメールアドレスを入力してください" value="{{ request('name') }}">
        </div>

        <div>
            <select name="gender">
                <option value="">性別</option>
                <option value="1" {{ request('gender') == '1' ? 'selected' : '' }}>男性</option>
                <option value="2" {{ request('gender') == '2' ? 'selected' : '' }}>女性</option>
                <option value="3" {{ request('gender') == '3' ? 'selected' : '' }}>その他</option>
            </select>
        </div>

        <div>
            <select name="category">
                <option value="">お問い合わせの種類</option>
                <option value="1" {{ request('category') == '1' ? 'selected' : '' }}>商品のお届けについて</option>
                <option value="2" {{ request('category') == '2' ? 'selected' : '' }}>商品交換について</option>
                <option value="3" {{ request('category') == '3' ? 'selected' : '' }}>商品トラブル</option>
                <option value="4" {{ request('category') == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                <option value="5" {{ request('category') == '5' ? 'selected' : '' }}>その他</option>
            </select>
        </div>

        <div>
            <input type="date" name="date" value="{{ request('date') }}">
        </div>

        <div>
            <button type="submit" class="search">検索</button>
        </div>

        <div>
            <button type="reset" class="reset">リセット</button>
        </div>
    </div>

    <div class="bottom-row">
        <div class="export-wrapper">
            <a href="{{ route('admin.export', request()->query()) }}" class="export-button">
                エクスポート
            </a>
        </div>
    </div>
</form>