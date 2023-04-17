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