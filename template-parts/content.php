<?php if(is_single()) : ?>
<article class="postbox__item format-image mb-50 transition-3">
  <div class="postbox__thumb m-img p-relative">
        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
        <span> <?php echo esc_html(get_the_date('d M')); ?></span>
  </div>
  <div class="postbox__content">
    <div class="postbox__meta">
        <span><a href="blog-details.html"><i class="far fa-user"></i>
            By <?php 
            $author_id = get_post_field( 'post_author', get_the_ID() );

            $author_name = get_the_author_meta('display_name', $author_id);
            echo esc_html($author_name); 
            ?>
          </a></span>
        <span><a href="blog-details.html"><i class="fal fa-comments"></i> <?php echo esc_html(get_comments_number()); ?> Comments</a></span>
    </div>
    <h3 class="postbox__title">
        <?php the_title(); ?>
    </h3>
    <div class="postbox__text">
        <p><?php the_content(); ?></p>
    </div>
    <div class="postbox__tagcloud mt-50">
        <div class="postbox__tag tagcloud">
          <h5>Our Tags</h5>
          <?php insurez_post_tags(); ?>
        </div>
        <div class="postbox__social">
          <div class="icon">
              <?php insurez_author_social_links(); ?>
          </div>
        </div>
    </div>
    <div class="postbox__blog-banner mt-60 mb-60">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="postbox__banner-img p-relative">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blog/blog-banner.png" alt="">
                  <h3 class="blog-banner-title">A place where start a
                    new lifestyle</h3>
                </a>
              </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="postbox__banner-img-yellow p-relative">
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">   <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/blog/blog-banner.png" alt="">
                    <h3 class="blog-banner-title-black">Get tips to get a quick life insurance</h3>
                </a>
              </div>
          </div>
        </div>
    </div>

    <?php 
    if(comments_open() || get_comments_number()) : 
        comments_template();
    endif;
    ?>
    
  </div>
</article>

<?php else : ?>

<article class="postbox__item format-image mb-30 transition-3">
    <div class="postbox__thumb m-img p-relative">
        <a href="<?php echo esc_url(get_the_permalink()); ?>">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            <span><?php echo esc_html(get_the_date('d M')); ?></span>
        </a>
    </div>
    <div class="postbox__content">
        <div class="postbox__meta">
            <span>
                <a href="<?php echo esc_url(get_the_permalink()); ?>">
                    <i class="far fa-user"></i>By <?php echo esc_html(get_the_author()); ?>
                </a>
            </span>
            <span>
                <a href="<?php echo esc_url(get_the_permalink()); ?>">
                    <i class="fal fa-comments"></i> <?php comments_number(); ?>
                </a>
            </span>
        </div>
        <h3 class="postbox__title">
            <?php the_title(); ?>
        </h3>
        <div class="postbox__text">
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
    <div class="blog-btn mt-30">
        <a class="tp-btn" href="<?php echo esc_url(get_the_permalink()); ?>">READ MORE</a>
    </div>
</article>

<?php endif; ?>