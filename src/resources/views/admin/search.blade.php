<form class="search-form" method="get" action="{{ route('admin.index') }}">
    <div class="search-row">
        <input type="text" name="name"
            placeholder="名前やメールアドレスを入力してください"
            value="{{ request('name') }}">

        <select name="gender">
            <option value="">性別</option>
            <option value="1" {{ request('gender') == '1' ? 'selected' : '' }}>男性</option>
            <option value="2" {{ request('gender') == '2' ? 'selected' : '' }}>女性</option>
            <option value="3" {{ request('gender') == '3' ? 'selected' : '' }}>その他</option>
        </select>

        <select name="category">
            <option value="">お問い合わせの種類</option>
            <option value="1" {{ request('category') == '1' ? 'selected' : '' }}>商品のお届けについて</option>
            <option value="2" {{ request('category') == '2' ? 'selected' : '' }}>商品交換について</option>
            <option value="3" {{ request('category') == '3' ? 'selected' : '' }}>商品トラブル</option>
            <option value="4" {{ request('category') == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
            <option value="5" {{ request('category') == '5' ? 'selected' : '' }}>その他</option>
        </select>

        <input type="date" name="date" value="{{ request('date') }}">

        <button type="submit">検索</button>
        <a href="{{ route('admin.index') }}" class="reset-button">リセット</a>
    </div>
</form>
