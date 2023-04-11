<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
  <title>タイトル</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-default" style="margin-bottom:0;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
          <span class="sr-only">メニュー</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">HOME</a></li>
          <li><a href="#">PROFILE</a></li>
          <li><a href="#">BLOG</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
    </nav>
    <div id="top-vg">
      <img src="images/top.jpeg" alt="トップページ画像">
    </div>
  </header>
  <section id="content">
    <div id="content-wrap" class="container">
      <div id="main" class="col-md-9">
        <h1 class="text-center">個人事業主向けWebスクール ウェブストエイト</h1>
        <p>
          ウェブストエイトは自分でホームページ制作・Web集客したい方向けの
          少人数制個別指導のスクール・塾です。
          <br><br>
          継続6ヶ月コースとお試し1ヶ月コースから選択して受講できます。
        </p>
        <div class="row">
          <div class="col-md-6">
            <p><img src="images/pc-wood.jpg" alt="6ヶ月コース画像"></p>
            <h2 class="text-center">しっかり6ヶ月コース</h2>
            <p>ホームページ作成からWeb集客まで一通り習得して売上拡大したい方向けのコース</p>
          </div>
          <div class="col-md-6">
            <p><img src="images/pc-leaf.jpg" alt="1ヶ月コース画像"></p>
            <h2 class="text-center">お試し1ヶ月コース</h2>
            <p>特定範囲のみ習いたい・まずは試しに受講してみたい方向けのコース</p>
          </div>
        </div>
        <p class="text-center">
          <br>
          お申し込みは<a href="https://webst8.com">こちらから</a>
          <br><br>
        </p>
      </div>
      <div id="sidebar" class="col-md-3">
        <h1 class="text-center">セミナー情報</h1>
        <section id="wordpress-seminar">
          <h2>WordPress入門セミナー</h2>
          <p>
            <img src="images/seminar-wordpress.png" alt="ワードプレスセミナー画像">
          </p>
        </section>
        <section id="seo-seminar">
          <h2>SEO入門セミナー</h2>
          <p>
            <img src="images/seminar-seo.png" alt="SEOセミナー画像">
          </p>
        </section>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <p class="text-center">Copyright © Webst8 All Rights Reserved.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>