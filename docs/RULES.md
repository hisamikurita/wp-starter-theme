# プロジェクト固有のルール

## 😺 Grid System

案件によっては60分割のグリッドシステムによってデザインされています。<br>
スタイリングがしやすいように補助的な役割を担う機能が既に用意されています。

- D キー押下でグリッドラインの表示/非表示が切り替わります。
- グリッドラインが表示されるのは開発モードの時のみです。

## 😻 Styling

クラスの命名については基本的に BEM を採用しています。

- ネスト機能の多用は可読性と検索性が落ちるので控えるようにしてください。

```scss
// NG
.hoge {
	&__title {
		color: black;
	}
}

// OK
.hoge__title {
	color: black;
}
```

固定値か相対値でコーディングするかはプロジェクトやデザインによって変わってくるので、最初に協議するようにしてください。

- 相対値を使用する場合は`vw`関数を使用するようにしてください。

```scss
.hoge {
	font-size: vw(16);
}
```

- グリッドの値を参照したい場合は`rem`関数を使用するようにしてください。

```scss
.hoge {
	width: rem(1); // 1グリッド
}
```

## 🌙 How to reference images from Css

$base-dir は設定をするとCSSでローカルと本番で異なる参照をすることができます。

```scss
background-image: url($base-dir + "assets/images/icon-blank.svg");
```

## 😎 Svg Sprite

SVGを使用するときは以下の関数を使用してください。

```php
<?= get_svg_sprite('logo', 'LIG') ?>
```

## 👟 Image

画像最適化用に`picture.php`を用意しています。こちらを使用すると`.avif`または`.webp`で画像が配信されます。

```php
<?php get_template_part("./parts/picture", null, [
  "images" => [
    "src" => "sample-01.jpg",
    "width" => "1280",
    "height" => "600",
    "alt" => "",
  ],
]); ?>
```

## 🍰 Assets

ローカル環境ではVITEの開発サーバー、本番環境ではテーマのルートを参照する必要があるため基本的に`vite-config.php`の関数を使用してAssetsにアクセスしてください。

```php
<img src="<?= vite_src_images('sample-01.jpg') ?>" decoding="async" width="1280" height="800" alt="">
```

```php
<img src="<?= vite_src_images('icon-blank.svg') ?>" decoding="async" width="30" height="30" alt="">
```
