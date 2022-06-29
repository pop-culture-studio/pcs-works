# PCS Works

https://pcs-works.vercel.app/

## 仕事メニュー
`config/menu.php`を編集。

## 制作実績
`resources/views/works/`内と`resources/views/works.blade.php`を編集。自由に変更できるように個別のhtml。

## サーバー
- Vercel https://vercel.com/
  - GitHubで更新すれば自動で反映される。
- データベースは不使用

## ドメイン
- （停止中。vercelのまま使用）
- ebit https://www.ebit.co.jp/
- AWS Route53
- Vercelのカスタムドメインを設定 https://vercel.com/docs/custom-domains

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
