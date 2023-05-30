# wp-starter-theme

![wp-starter-theme](https://github.com/hisamikurita/wp-starter-theme/assets/47776346/7b128ba8-408e-4516-8196-713cefaf8b3a)

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

open <http://localhost:8000/wp-admin>

```bash
user : admin
password : password
```

frontend build start

```bash
npm run dev
```

open <http://localhost:8000/>

## Document

- [wp-env](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)
- [vite](https://ja.vitejs.dev/)
- [tailwindcss](https://tailwindcss.com/)
