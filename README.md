# Laravel クエリビルダ & MySQLテストリポジトリ
## 概要
こちらは以下の記事用のリポジトリです。<br>
[Laravel + MySQLでグループごとにランク付け/指定順位のデータだけ取得する方法(Window関数の代替)](https://zenn.dev/articles/e5f0e2147d49e0/edit)

## 初回のみ実行
```
curl -s https://laravel.build/mysql-query | bash
./vendor/bin/sail up (必要に応じてエイリアスを設定してください)
./vendor/bin/sail composer install 
php artisan migrate
sail php artisan db:seed --class=FlightSeeder
sail php artisan db:seed --class=DestinationSeeder
sail npm install && npm run dev 
```
