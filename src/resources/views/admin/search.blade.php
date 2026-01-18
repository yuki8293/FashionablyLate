<form class="search-form" method="get" action="/admin">

    <div class="search-row">
        <div class="name-input">
            <input type="text" name="name" placeholder="名前やメールアドレスを入力してください">
        </div>

        <div>
            <select name="gender">
                <option value="">性別</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">その他</option>
            </select>
        </div>

        <div>
            <select name="category">
                <option value="">お問い合わせの種類</option>
                <option value="delivery">商品のお届けについて</option>
                <option value="exchange">商品交換について</option>
                <option value="trouble">商品トラブル</option>
                <option value="shop">ショップへのお問い合わせ</option>
                <option value="other">その他</option>
            </select>
        </div>

        <div>
            <input type="date" name="date">
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
            <button type="button" class="export">エクスポート</button>
        </div>
    </div>
</form>