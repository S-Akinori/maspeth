<?php get_header(); ?>
<div class="container mx-auto">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-top-fv c-section">
      <div class="p-top-fv__text">
        <?php the_content(); ?>
      </div>
      <?php if (has_post_thumbnail()) : ?>
        <div class="p-top-fv__image">
          <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
        </div>
      <?php endif; ?>
    </div>
  <?php endwhile; endif ?>
</div>
<?php get_footer(); ?>