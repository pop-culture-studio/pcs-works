# PCS Works

https://pcs-works.vercel.app/

## サーバー
- Vercel https://vercel.com/
  - GitHubで更新すれば自動で反映される。
- データベースは不使用

## ドメイン
- （停止中。vercelのまま使用）

## ローカル開発
`git clone`後
```
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
```
.envはSailか`php artisan serve`かの開発環境に合わせて変更。
