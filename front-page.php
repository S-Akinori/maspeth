<?php
get_header();
$args = array(
  'numberposts ' => 4,
);
$posts = get_posts($args);

$products = get_posts(array(
  'post_type' => 'products',
  'posts_per_page' => -1,
));
?>
<div class="p-top-fv c-fv relative">
  <div class="p-top-fv__image active c-fv__image">
    <img src="<?= get_option('top_fv_image'); ?>" alt="<?= get_option('top_fv_text'); ?>" />
  </div>
  <div class="c-fv__text-container">
    <div>
      <div class="mx-auto"><img class="mx-auto" src="<?= get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></div>
      <div class="c-fv__text-container__title"><?= get_option('top_fv_text'); ?></div>
    </div>
  </div>
  <div class="p-top-fv__owner">
    <div class="p-top-fv__owner__image">
      <img src="<?= get_option('company0_CEO_image'); ?>" width="200" height="200" alt="<?= get_option('company0_CEO'); ?>" />
    </div>
    <div class="p-top-fv__owner__name text-center text-white">
      代表取締役社長 / <?= get_option('company0_CEO'); ?>
    </div>
  </div>
</div>
<div id="topMessage" class="c-page-section c-container">
  <section>
    <div class="c-title-text">
      <div class="text-center c-fade-in">
        <span class="text-sm text-main"><?= get_option('top_message_en'); ?></span>
        <h2 class="c-title-text__title u-text-center"><?= get_option('top_message_title'); ?></h2>
      </div>
      <div class="c-title-text__text u-text-center c-fade-in">
        <?= get_option('top_message_text'); ?>
      </div>
    </div>
  </section>
</div>
<div id="topService" class="p-top-service c-page-section">
  <section>
    <div class="c-title-text">
      <div class="text-center c-fade-in">
        <span class="text-sm text-main"><?= get_option('top_service_en'); ?></span>
        <h2 class="c-title-text__title u-text-center"><?= get_option('top_service_title'); ?></h2>
      </div>
    </div>
    <div class="p-top-service__contents flex flex-wrap">
      <?php
      $services = get_option('top_services');
      for ($i = 0; $i < count($services); $i++) : ?>
        <div class="p-4 md:w-1/3">
          <div class="p-top-service__contents__item relative aspect-square <?= $i === 2 ? 'p-top-service__contents__item--main3' : '' ?>">
            <div class="p-top-service__contents__item__image absolute top-0 left-0 w-full h-full"><img class="w-full h-full object-cover" src="<?= $services[$i]['image']; ?>" alt=""></div>
            <div class="p-top-service__contents__item__image__text relative p-4">
              <h3 class="text-main <?= $i === 2 ? 'text-main3' : '' ?>"><?= $services[$i]['title']; ?></h3>
              <p><?= $services[$i]['text']; ?></p>
              <div class="mt-4"><a href="<?= $services[$i]['link']; ?>" target="_blank" class="c-button <?= $i === 2 ? 'c-button--main3' : '' ?>"><?= $services[$i]['link_text']; ?></a></div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </section>
</div>
<div id="topGoods" class="p-top-service c-page-section">
  <section>
    <div class="c-title-text mb-8">
      <div class="text-center c-fade-in">
        <span class="text-sm text-main"><?= get_option('top_goods_en'); ?></span>
        <h2 class="c-title-text__title u-text-center"><?= get_option('top_goods_title'); ?></h2>
      </div>
      <div class="c-title-text__text u-text-center c-fade-in">
        <?= get_option('top_goods_text'); ?>
      </div>
    </div>
    <div class="flex flex-wrap">
      <?php foreach ($products as $post) : setup_postdata($post); ?>
        <div class="p-4 md:w-1/3 c-fade-in">
          <div class="c-box h-full">
            <a href="<?php the_field('link'); ?>" target="_blank" class="block">
              <div><img class="mx-auto" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
              <div class="relative">
                <h3 class="mb-0 text-main"><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach;
      wp_reset_postdata(); ?>
    </div>
    <div class="mt-4 text-center"><a href="<?= get_option('top_goods_link'); ?>" target="_blank" class="c-button"><?= get_option('top_goods_linktext'); ?></a></div>
  </section>
</div>
<div id="topBeauty" class="c-page-section">
  <section>
    <div class="c-title-text mb-8 c-fade-in">
      <div class="text-center">
        <span class="text-sm text-main"><?= get_option('top_beauty_en'); ?></span>
        <h2 class="c-title-text__title u-text-center"><?= get_option('top_beauty_title'); ?></h2>
      </div>
      <div class="c-title-text__text u-text-center">
        <?= get_option('top_beauty_text'); ?>
      </div>
    </div>
    <div class="text-center"><a href="<?= get_option('top_beauty_link'); ?>" target="_blank" class="c-button"><?= get_option('top_beauty_linktext'); ?></a></div>
  </section>
</div>
<div id="topNews" class="c-page-section c-container relative">
  <section>
    <div class="c-title-text c-fade-in">
      <div class="text-center">
        <span class="text-sm text-main"><?= get_option('top_news_en'); ?></span>
        <h2 class="c-title-text__title u-text-center"><?= get_option('top_news_title'); ?></h2>
      </div>
    </div>
    <div>
      <ul>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
          <li class="border-b border-main py-4">
            <a href="<?php the_permalink() ?>" class="block h-full">
              <span><?php the_date() ?></span>
              <span class="text"><?php the_title(); ?></span>
            </a>
          </li>
        <?php endforeach;
        wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>
</div>
<div id="topCompany" class="c-page-section c-container relative">
  <section>
    <div class="c-title-text c-fade-in">
      <div class="text-center">
        <span class="text-sm text-main"><?= get_option('top_company_en'); ?></span>
        <h2 class="c-title-text__title u-text-center"><?= get_option('top_company_title'); ?></h2>
      </div>
    </div>
    <?php for($i=0; $i < 2; $i++) :?>
    <div class="md:flex mb-12">
      <div class="md:w-1/2 mb-4 md:mb-0 md:px-4"><?= get_option("company{$i}_map"); ?></div>
      <div class="md:w-1/2 md:px-4">
        <h3 class="text-main"><?= get_option("company{$i}_name"); ?></h3>
        <div class="md:flex mb-4 pb-4 border-b border-main">
          <div class="w-40 pr-4"><?= get_option("company{$i}_CEO_title"); ?></div>
          <div class=""><?= get_option("company{$i}_CEO"); ?></div>
        </div>
        <div class="md:flex mb-4 pb-4 border-b border-main">
          <div class="w-40 pr-4"><?= get_option("company{$i}_tel_title"); ?></div>
          <div class=""><?= get_option("company{$i}_tel"); ?></div>
        </div>
        <?php if(get_option("company{$i}_email")) : ?>
        <div class="md:flex mb-4 pb-4 border-b border-main">
          <div class="w-40 pr-4"><?= get_option("company{$i}_email_title"); ?></div>
          <div class=""><?= get_option("company{$i}_email"); ?></div>
        </div>
        <?php endif; ?>
        <?php if(get_option("company{$i}_hp")) : ?>
        <div class="md:flex mb-4 pb-4 border-b border-main">
          <div class="w-40 pr-4"><?= get_option("company{$i}_hp_title"); ?></div>
          <div class=""><a href="<?= get_option("company{$i}_hp"); ?>" target="_blank"><?= get_option("company{$i}_hp"); ?></a></div>
        </div>
        <?php endif; ?>
        <div class="md:flex mb-4 pb-4 border-b border-main">
          <div class="w-40 pr-4"><?=get_option("company{$i}_address_title") ?></div>
          <div class="whitespace-pre-wrap"><?=get_option("company{$i}_address") ?></div>
        </div>
        <div class="md:flex mb-4 pb-4 border-b border-main">
          <div class="w-40 pr-4"><?=get_option("company{$i}_hours_title") ?></div>
          <div class="whitespace-pre-wrap"><?=get_option("company{$i}_hours") ?></div>
        </div>
        <div class="md:flex mb-4 pb-4 border-b border-main">
          <div class="w-40 pr-4"><?=get_option("company{$i}_dayoff_title") ?></div>
          <div class=""><?=get_option("company{$i}_dayoff") ?></div>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </section>
</div>
<div id="topContact" class="c-page-section c-container relative">
  <section>
    <div class="c-title-text c-fade-in">
      <div class="text-center">
        <span class="text-sm text-main"><?= get_option('top_contact_en'); ?></span>
        <h2 class="c-title-text__title u-text-center"><?= get_option('top_contact_title'); ?></h2>
      </div>
    </div>
    <?= do_shortcode('[ninja_form id=1]'); ?>
  </section>
</div>
<?php get_footer(); ?>