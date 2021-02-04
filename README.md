# Laravel クエリビルダ & MySQLテストリポジトリ
## 概要
こちらは以下の記事用のリポジトリです。
[text](url)

## 初回のみ実行
```
curl -s https://laravel.build/mysql-query | bash
./vendor/bin/sail up (必要に応じてエイリアスを設定してください)
./vendor/bin/sail composer install 
php artisan migrate --seed
```
