<?php get_header(); ?>

<section class="postbox__area pt-120 pb-90">
  <div class="container">
      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-lg-8">
            <div class="postbox__wrapper">
              <?php 
                get_template_part('template-parts/content');
              ?>
            </div>
        </div>
        <?php if ( is_active_sidebar('posts-sidebar') ) : ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4">
            <div class="sidebar__wrapper">
              <?php dynamic_sidebar('posts-sidebar'); ?>
            </div>
        </div>
        <?php endif; ?>
      </div>
  </div>
</section>

<?php get_footer(); ?>