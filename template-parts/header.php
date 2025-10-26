<?php
$motto = get_theme_mod('top_header_motto', __('Best insurance services in your area', 'insurez'));
$address = get_theme_mod('top_header_address', __('66 Broklyne Golden Street, USA', 'insurez'));
$address_link = get_theme_mod('top_header_address_link', '#');
$email = get_theme_mod('top_header_email', __('needhelp@company.com', 'insurez'));

$cta_button_text = get_theme_mod('header_cta_button_text', __('Get a Quote', 'insurez'));
$cta_button_url = get_theme_mod('header_cta_button_url', '#');
$call_us_button_text = get_theme_mod('header_phone_text', __('+986567686789', 'insurez'));

?>

<!-- header area start -->
<header class="main-header d-none d-lg-block">
  <div class="tp-header">
      <div id="header-sticky" class="tp-header__wrapper-inner">
        <div class="tp-header__logo grey-bg-2">
            <?php insurez_header_logo(); ?>
        </div>
        <div class="tp-header__main-header">
            <div class="tp-header__top grey-bg-1">
              <div class="tp-header__top-left text-left">
                  <p class="tp-header-top-left-text"><?php echo esc_html($motto); ?></p>
              </div>
              <div class="tp-header__top-right text-end">
                  <div class="tp-location mr-30">
                    <a href="<?php echo esc_url($address_link); ?>" target="_blank"> <i class="fa-sharp fa-solid fa-location-dot"></i> <?php echo esc_html($address); ?></a>
                  </div>
                  <div class="envelope">
                    <a href="mailto:<?php echo esc_html($email); ?>"><i class="fa-solid fa-envelope"></i>
                        <?php echo esc_html($email); ?></a>
                  </div>
              </div>
            </div>
            <div class="tp-main-menu">
              <div class="tp-header__bottom d-flex align-items-center justify-content-between">
                  <div class="main-menu">
                    <div class="tp-header__wrapper-inner">
                        <div class="tp-header__menu text-center ">
                          <nav id="mobile-menu">
                              <?php insurez_nav_walker(); ?>
                          </nav>
                        </div>
                    </div>
                  </div>
                  <div class="tp-header__right-box d-flex justify-content-end align-items-center">
                    <div class="tp-header__right d-flex align-items-center">
                        <div class="tp-header-search search-open-btn">
                          <a href="javascript:void(0);"> <i class="fa-regular fa-magnifying-glass"></i></a>
                        </div>
                        <div class="tp-header__contact-number">
                          <div class="sm-clist__icon">
                              <i class="flaticon-telephone"></i>
                          </div>
                          <div class="sm-clist__text text-start ml-15 mr-25">
                              <span>Call Us Anytime</span>
                              <a href="tel:<?php echo esc_html($call_us_button_text); ?>"><?php echo esc_html($call_us_button_text); ?></a>
                          </div>
                        </div>
                        <div class="tp-header-btn">
                          <a class="tp-btn" href="<?php echo esc_url($cta_button_url); ?>"><?php echo esc_html($cta_button_text); ?></a>
                        </div>
                    </div>
                    <div class="sidebar__menu">
                        <a class="tp-menu-bar text-black" href="#"><i class="fa-solid fa-bars"></i></a>
                    </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
  </div>
</header>