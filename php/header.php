<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title>フードデリバリーFC事業支援 ABC</title>
    <meta name="description" content="トップページの説明" />
    <meta name="keywords" content="キーワード" />
    <!-- ogp -->
    <meta property="og:title" content="サイト名" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="サイトのドメイン" />
    <meta property="og:image" content="OGP IMAGE" />
    <meta property="og:site_name" content="サイトのドメイン" />
    <meta property="og:description" content="トップページの説明" />
    <!-- ファビコン -->
    <link rel="”icon”" href="" />
    <link rel="apple-touch-icon" href="" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
  </head>
  <body>
    <header class="p-header l-header">
      <div class="p-header__inner">
        <h1 class="p-header__logo">
          <a href="#">
            <img src="./images/common/logo.svg" alt="LOGO" />
          </a>
        </h1>
        <nav class="p-header__nav">
          <ul class="p-header__nav-list">
            <li class="p-header__nav-item">
              <a href="#">top</a>
            </li>
            <li class="p-header__nav-item">
              <a href="#">about</a>
            </li>
            <li class="p-header__nav-item">
              <a href="#">works</a>
            </li>
            <li class="p-header__nav-item p-header__nav-item--contact">
              <a href="#" target="_blank" rel="noopener">contact</a>
            </li>
          </ul>
        </nav>
        <button class="p-header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="p-header__drawer js-drawer">
          <nav class="p-header__drawer-nav">
            <ul class="p-header__drawer-list">
              <li class="p-header__drawer-item">
                <a href="#">top</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="#">about</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="#">works</a>
              </li>
              <li class="p-header__drawer-item p-header__drawer-item--contact">
                <a href="#" target="_blank" rel="noopener">contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
