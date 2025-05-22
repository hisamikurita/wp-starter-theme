# wp-starter-theme

## 🌎 WordPress Environment

本テンプレートはWordPressを効率的に開発するためのテンプレートです。WordPressのアップデートが常に行われていくこと、運用が第三者になる可能性を考慮して互換性に特化したものになっています。そのため`functions`のカスタムは最小限に留めて、必要な機能はプラグインに任せる方針になっています。

また、WordPressは常に最新のバージョンを取得する設定になっています。プロジェクト開始時に `.wp-env.json` を編集してWordPressとプラグインのバージョンを固定することを推奨しています。

- WP ver latest
- PHP ver 8.1

## 🔧 WordPress Plugins

本番またはテストサーバーでは下記のプラグインをインストールすることを推奨しています。

- [webp-converter-for-media](https://ja.wordpress.org/plugins/webp-converter-for-media/)
- [all-in-one-wp-security-and-firewall](https://ja.wordpress.org/plugins/all-in-one-wp-security-and-firewall/)
- [autoptimize](https://ja.wordpress.org/plugins/autoptimize/)

下記の有料のプラグインを使用したい場合は運用者に連絡をしてください。リンクがダウンロードできるようになるので `/plugins`配下に設置してください。

- [advanced-custom-fields-pro](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/admin-columns-pro/)
- [all-in-one-wp-migration-unlimited-extension](https://bitbucket.org/lig-admin/lig-wordpress-plugins/src/master/all-in-one-wp-migration-unlimited-extension/)

## 🐶 Usage Environment

- [Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- Node.js >= 18

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

## 💻 Production Upload

```bash
npm run build
```

アップロードの際は`/dist`以下をアップロードしてください。

## 🏠 Browser Sync

このプロジェクトでは、Viteサーバーのネットワークアクセスのために .wp-env.json ファイルで VITE_SERVER を指定しています。デフォルトでは 0.0.0.0 が指定されており、ローカルネットワーク上の他のデバイスからアクセスすることが可能です。

```json
"VITE_SERVER": "http://0.0.0.0:3000"
```

ネットワーク経由でのアクセスが必要な場合、`npm run dev`を実行した際にNetwork部分に表示されるIPアドレスをVITE_SERVERの値に一時的に変更する必要があります。
例えば、IP アドレスが 100.00.0.000 の場合は以下のように設定します。

```json
"VITE_SERVER": "http://100.00.0.000:3000"
```

> [!WARNING]
> .wp-env.json は Git 管理されているため、ネットワークアクセスのための変更はコミットしないようにしてください。暫定的な変更として行い、変更が不要になったら元に戻すか、変更を破棄してください。

VITE_SERVERの値を反映するために以下のコマンドを実行します。

```bash
npm run wp:restart
```

BrowserSyncを利用して複数デバイス間での同期を実現しています。起動後は3030番でアクセスできます。

open <http://100.00.0.000:3030/>

## ✋ Lint

```bash
npm run lint:check
```

```bash
npm run lint:fix
```

Lint は husky でプリコミット時に必ず実行されます。以下の vscode プラグインをインストールすると vscode 保存時にも実行することができるので便利です。

- [prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
- [markuplint](https://marketplace.visualstudio.com/items?itemName=yusukehirao.vscode-markuplint)
- [stylelint](https://marketplace.visualstudio.com/items?itemName=stylelint.vscode-stylelint)
- [eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)

## 🥺 Project Specific Rules

プロジェクト固有のルールについては別途<a href="./docs/RULES.md">こちら</a>に記載しています。一度目を通していただけると開発がしやすいです。

## 👀 Document

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
- [deepwiki](https://deepwiki.com/hisamikurita/wp-starter-theme)

## 🚨 Trouble Shoot

- 「All-in-One WP Migration」でローカル環境のデータベースをエクスポートしてテストサイトにインポートした際に、テーマファイル名が「src」になる

> [!WARNING]
> WordPressのテーマは通常、Git管理されてCI/CDを通じてデプロイされるため、「All-in-One WP Migration」のエクスポートに含めないことを推奨しています。データベースのバックアップや移行が主な目的であれば、「All-in-One WP Migration」でデータベースのみをエクスポートし、各種環境にインポートすることが推奨されます。

- `uploads/` が肥大化してリポジトリのサイズが大きくなる

> [!WARNING]
> uplopadsが肥大化した場合はリポジトリ管理をやめて、別途外部ストレージを使用して管理することを検討してください。

- main ブランチにマージしたら本番サーバーにアップされた...

> [!WARNING]
> CICDが実装されている場合 main ブランチにマージすると自動デプロイの処理が実行される可能性があるので誤って本番サーバーにアップしないように注意してください。
