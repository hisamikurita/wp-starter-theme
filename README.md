# wp-env

## Usage Environment

- [Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)
- Node.js 16
- [Composer](https://getcomposer.org/)
- [WP-CLI](https://wp-cli.org/)

## Local Environment Setup

package install

```bash
npm run ci or npm run install
```

wp start up & db import

```bash
npm run wp-setup
```

wp login

```bash
open <http://localhost:8000/wp-admin>
user : admin
password : password
```

frontend build start

```bash
npm run dev
```

open <http://localhost:8000/>
