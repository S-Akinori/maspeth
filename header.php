<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NEXUS</title>
  <meta property="og:title" content="株式会社NEXUS" />
  <meta property="og:description" content="株式会社NEXUSのホームページです" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image.png" />
  <meta property="og:site_name" content="株式会社NEXUS" />
  <meta property="og:locale" content="ja_JP"  />
  <!-- <link rel="icon" href="/favicon.ico" /> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css?v=1" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css?v=1">
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="flex justify-between items-center">
      <div class="c-logo"><a href="<?= home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="株式会社NEXUS"></a></div>
      <div class="flex items-center">
        <div class="hidden lg:block">
          <nav>
            <ul class="flex">
              <li class="px-2 text-sm"><a class="js-anchorLink" href="#topMessage">わたしたちについて</a></li>
              <li class="px-2 text-sm"><a class="js-anchorLink" href="#topService">サービス</a></li>
              <li class="px-2 text-sm"><a class="js-anchorLink" href="#topGoods">日用雑貨</a></li>
              <li class="px-2 text-sm"><a class="js-anchorLink" href="#topBeauty">エステ事業</a></li>
              <li class="px-2 text-sm"><a class="js-anchorLink" href="#topNews">ニュース</a></li>
              <li class="px-2 text-sm"><a class="js-anchorLink" href="#topCompany">会社情報</a></li>
            </ul>
          </nav>
        </div>
        <a href="" class="c-button c-button--main-cont text-sm">お問い合わせ</a>
        <div class="lg:hidden pl-2">
          <button class="js-menu-button flex items-center justify-center">
            <span class="material-icons">
              menu
            </span>
          </button>
        </div>
      </div>
    </div>
  </header>
  <div id="jsNav" class="l-nav-container">
    <div class="relative">
      <button class="js-menu-button absolute right-0 top-0 flex items-center justify-center">
        <span class="material-icons text-main-cont">close</span>
      </button>
      <nav class="mb-4">
        <ul>
          <li class="px-2 text-sm text-center"><a class="js-anchorLink js-menu-button" href="#topMessage">わたしたちについて</a></li>
          <li class="px-2 text-sm text-center"><a class="js-anchorLink js-menu-button" href="#topService">サービス</a></li>
          <li class="px-2 text-sm text-center"><a class="js-anchorLink js-menu-button" href="#topGoods">日用雑貨</a></li>
          <li class="px-2 text-sm text-center"><a class="js-anchorLink js-menu-button" href="#topBeauty">エステ事業</a></li>
          <li class="px-2 text-sm text-center"><a class="js-anchorLink js-menu-button" href="#topNews">ニュース</a></li>
          <li class="px-2 text-sm text-center"><a class="js-anchorLink js-menu-button" href="#topCompany">会社情報</a></li>
        </ul>
      </nav>
      <div class="text-center">
        <a href="" class="c-button c-button--main-cont">お問い合わせ</a>
      </div>
    </div>
  </div>
  <main>