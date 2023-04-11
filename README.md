# wp-env

## Usage Environment

- [Docker クライアント](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- Node.js 16
- [Composer](https://getcomposer.org/)
- [WP-CLI](https://wp-cli.org/)

WordPress を起動する:

```bash
npm run wp-env start
```

WordPress を再起動する:

```bash
npm run wp-env start --update
```

WordPress を停止する:

```bash
npm run wp-env stop
```

WordPress を削除する:

```bash
npm run wp-env destroy
```

DB をエクスポートする:

```bash
npm run wp-env run cli wp db export sql/wpenv.sql
```

DB をインポートする:

```bash
npm run wp-env run cli wp db import sql/wpenv.sql
```
