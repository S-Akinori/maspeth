<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(is_front_page()) : ?>
  <title>「出会えて良かった」と思われるものを-株式会社NEXUS</title>
  <meta name="title" content="「出会えて良かった」と思われるものを - 株式会社NEXUS" />
  <meta name="description" content="NEXUSでは日用雑貨販売、エステ事業を展開しております。物販やエステを通じて「こんな商品、サービス、人に出会って良かった」と思えるような活動をしています。" />
  <meta property="og:title" content="「出会えて良かった」と思われるものを-株式会社NEXUS" />
  <meta property="og:description" content="NEXUSでは日用雑貨販売、エステ事業を展開しております。物販やエステを通じて「こんな商品、サービス、人に出会って良かった」と思えるような活動をしています。" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/logo.jpg" />
  <?php else : ?>
    <title><?php the_title(); ?></title>
    <meta name="title" content="<?php the_title(); ?>" />
    <meta name="description" content="<?= get_the_excerpt() ;?>" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="<?= get_the_excerpt() ;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
  <?php endif; ?>
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
              <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topMessage' : home_url("#topMessage"); ?>">わたしたちについて</a></li>
              <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topService' : home_url("#topService"); ?>">サービス</a></li>
              <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topGoods' : home_url("#topGoods"); ?>">日用雑貨</a></li>
              <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topBeauty' : home_url("#topBeauty"); ?>">エステ事業</a></li>
              <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topNews' : home_url("#topNews"); ?>">ニュース</a></li>
              <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topCompany' : home_url("#topCompany"); ?>">会社情報</a></li>
            </ul>
          </nav>
        </div>
        <a href="<?= is_front_page() ? '#topContact' : home_url("#topContact"); ?>" class="c-button c-button--main-cont text-sm <?= is_front_page() ? 'js-anchorLink' : ''; ?>">お問い合わせ</a>
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
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topMessage' : home_url("#topMessage"); ?>">わたしたちについて</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topService' : home_url("#topService"); ?>">サービス</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topGoods' : home_url("#topGoods"); ?>">日用雑貨</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topBeauty' : home_url("#topBeauty"); ?>">エステ事業</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topNews' : home_url("#topNews"); ?>">ニュース</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topCompany' : home_url("#topCompany"); ?>">会社情報</a></li>
        </ul>
      </nav>
      <div class="text-center">
        <a href="<?= is_front_page() ? '#topContact' : home_url("#topContact"); ?>" class="c-button c-button--main-cont <?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button">お問い合わせ</a>
      </div>
    </div>
  </div>
  <main>