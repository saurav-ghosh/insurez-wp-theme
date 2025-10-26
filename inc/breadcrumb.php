<?php

function insurez_breadcrumb(){
  if ( is_front_page() && is_home() ) {
    $title = __('Blog','insurez');
  }
  elseif ( is_front_page() ) {
        $title =  __('Blog','insurez');
  }
  elseif ( is_home() ) {
      if ( get_option( 'page_for_posts' ) ) {
        $title = get_the_title( get_option( 'page_for_posts') );
      }
  }
  elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
  } 
  elseif ( is_single() && 'service' == get_post_type() ) {
      $title = get_the_title();
  } 
  elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'insurez' ) );
  } 
  elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'insurez' ) . get_search_query();
  } 
  elseif ( is_404() ) {
        $title = esc_html__( '404 Page not Found', 'insurez' );
  } 
  elseif ( is_archive() ) {
        $title = get_the_archive_title();
  } 
  else {
        $title = get_the_title();
  } 

$bg = get_template_directory_uri() . '/assets/img/breadcrumb/breadcrumb-bg-1.jpg';

if (function_exists('get_field')) {
  $page_id = null;

  // Check if it's the blog page
  if (is_home() && get_option('page_for_posts')) {
    $page_id = get_option('page_for_posts');
  } elseif (is_singular()) {
    $page_id = get_the_ID();
  }

  if ($page_id) {
    $breadcrumb_img_custom = get_field('breadcrumb_image', $page_id);

    if ($breadcrumb_img_custom) {
      $bg = $breadcrumb_img_custom['url'];
    }
  }
}

$show_hide = get_field('breadcrumb_showhide');

if ($show_hide === false) {
 return;
}

?>
  <div class="wrapper-box p-relative ">
      <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
         style="background-image: url(<?php echo esc_url($bg); ?>);">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1 text-center">
                     <div class="breadcrumb__list mb-10">
                        <?php if(function_exists('bcn_display_list')) {
                            bcn_display_list();
                        } ?>
                     </div>
                     <h3 class="breadcrumb__title mb-20"><?php echo insurez_kses($title); ?></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php
}

