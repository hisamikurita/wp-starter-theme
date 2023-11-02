# wp-starter-theme

## 🛜 WP Environment

本テンプレートはWordPressのアップデートが常に行われていくこと、運用がLIG以外になる可能性を考慮して互換性に特化したものになっています。<br>
そのため`functions`のカスタムは最小限に留めて、必要な機能はプラグインに任せます。

WordPressは常に最新のバージョンを取得します。プロジェクト開始時に `.wp-env.json` を編集してバージョンを固定してください。

- WP ver latest
- PHP ver 8.1

## 💰 Paid Plugins

有料プラグインについては下記のリンクからダウンロードをして `/plugins`配下に設置してください。Gitで管理されます。

- [advanced-custom-fields-pro](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/admin-columns-pro/)
- [all-in-one-wp-migration-unlimited-extension](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/all-in-one-wp-migration-unlimited-extension/)

## 🐶 Usage Environment

- [Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- Node.js >= 16

## 😌 Local Environment Setup

1. package install

```bash
npm ci or npm install
```

2. wp start up & db import

```bash
npm run wp:setup
```

3. frontend build start

```bash
npm run dev
```

open <http://localhost:3030/>

- wp login

open <http://localhost:3030/wp-admin>

```bash
user : admin
password : password
```

## 🏠 Browser Sync

ネットワーク経由でのアクセスをする場合は`.wp-env.json`の`VITE_SERVER`の値を自身のローカルIPに変更してください。<br>
こちらは暫定対応です。`.wp-env.json`はGit管理されているので、こちらの値を上書きしてコミットしないように注意してください。

```bash
"VITE_SERVER": "http://0.0.0.0:3000"
```

## 💻 Production Upload

```bash
npm run build
```

アップロードの際は`/dist`以下をアップロードしてください。

## 😺 Grid System

通常の案件では60分割のグリッドシステムによってデザインされています。<br>
スタイリングがしやすいように補助的な役割を担う機能が既に用意されています。

- D キー押下でグリッドラインの表示/非表示が切り替わります。
- グリッドラインが表示されるのは開発モードの時のみです。

## 😻 Styling

クラスの命名については BEM を採用しています。

- `rem` グリッド線に基づいて計算する時に使用します。
- `px` 上下の余白、主に`margin-top`や`margin-bottom`の計算の時に使用します。
- `vw` その他、テキスト、主に`font-size`の計算の時に使用します。計算しやすいように`mixin`が用意されているので、そちらを使用してください。

## 🌙 How to reference images from Css

$base-dir は設定をするとCSSでローカルと本番で異なる参照をすることができます。

```bash
background-image: url($base-dir + "assets/images/icon-blank.svg");
```

## 🍰 Assets

ローカル環境ではVITEの開発サーバー、本番環境ではテーマのルートを参照する必要があるため<br>
`vite-config.php`の関数を使用してAssetsにアクセスしてください。

```bash
<link rel="stylesheet" href="<?= vite_src_css("app.scss") ?>">
```

```bash
<script type="module" crossorigin src="<?= vite_src_js("app.js") ?>"></script>
```

```bash
<img src="<?= vite_src_static('icon-blank.svg') ?>" decoding="async" width="30" height="30" alt="">
```

## 😎 Image

ローカルの画像は最適化処理のための簡易的なパーツを用意しています。`src/parts/picture-local.php`を使用するようにしてください。

```bash
<?php get_template_part("./parts/picture-local", null, [
  "images" => [
      "src" => "sample-01.jpg",
      "width" => "1280",
      "height" => "600",
      "alt" => "",
  ],
]); ?>
```

## 😎 Svg Sprite

```bash
<?= get_svg_sprite('icon-blank') ?>
```

## ✋ Lint

```bash
npm run lint:check
```

```bash
npm run lint:fix
```

Lint はプリコミット時に必ず実行されます。以下の vscode プラグインをインストールすると vscode 保存時にも Lint が実行されます。

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## 🚗 Bitbucket Pipelines

リポジトリの「設定」から SSH キーを登録して `bitbucket-pipelines.yml` の下記の値を登録してください。

- $SSH_USER
- $SSH_SERVER
- $SSH_REMOTE_PATH
- $SSH_LOCAL_PATH
- $SSH_PORT

## 👉 Git Flow

CI / CD が実装されている場合 main ブランチにマージすると自動デプロイの処理が実行されます。

- main: TBD
- feature: 機能の追加用。main から分岐して、main に適宜マージしてください。

## 👀 Document

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
