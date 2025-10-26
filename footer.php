<?php 
$footer_copyright_text = get_theme_mod('footer_copyright_text',__('© Copyright 2023, Insurez. All Rights Reserved', 'insurez'));
?>

<div class="footer__area" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer/img.jpg');">
   <div class="footer__top <?php echo (is_page('contact')) ? 'pt-220' : 'pt-120'; ?> pb-90">
      <div class="container">
         <div class="row">
            <div class="col-xxl-3 col-lg-6 col-md-6  col-sm-6">
               <?php if(is_active_sidebar('footer-widget-1')) : ?>
                  <?php dynamic_sidebar('footer-widget-1'); ?>
               <?php endif; ?>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-6">
               <?php if(is_active_sidebar('footer-widget-2')) : ?>
                  <?php dynamic_sidebar('footer-widget-2'); ?>
               <?php endif; ?>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-6">
               <?php if(is_active_sidebar('footer-widget-3')) : ?>
                  <?php dynamic_sidebar('footer-widget-3'); ?>
               <?php endif; ?>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-6">
               <?php if(is_active_sidebar('footer-widget-4')) : ?>
                  <?php dynamic_sidebar('footer-widget-4'); ?>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
   <div class="footer__bottom grey-bg-2 pt-25 pb-25">
      <div class="container">
         <div class="footer__bottom-inner">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="footer__copyright text-center">
                     <p><?php echo esc_html($footer_copyright_text); ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- footer  area end -->

   <?php wp_footer(); ?>
</body>

</html>