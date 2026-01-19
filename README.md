
# お問い合わせフォーム

Laravel で作成したお問い合わせフォームアプリケーションです。
ユーザーは問い合わせを送信でき、管理者は管理画面で一覧・検索・エクスポートが可能です。

## 環境構築

#### リポジトリをクローン

```
git clone git@github.com:yuki8293/FashionablyLate.git
```

#### Laravelのビルド

```
docker-compose up -d --build
```

#### Laravel パッケージのダウンロード

```
docker-compose exec php bash
composer install
```

#### .env ファイルの作成

```
cp .env.example .env
```

#### .env ファイルの修正

DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

#### キー生成

```
php artisan key:generate
```

#### マイグレーション・シーディングを実行

```
php artisan migrate --seed
```

## 使用技術（実行環境）

フレームワーク：laravel

言語：PHP

Web サーバー：Nginx

データベース：MySQL

## ER図

![ER図](fashionablylate.drawio.png)

## URL

アプリケーション：http://localhost

管理画面：http://localhost/admin

phpMyAdmin：http://localhost:8080



