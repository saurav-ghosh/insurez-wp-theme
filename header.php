<!doctype html>
<html class="no-js" lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php wp_head(); ?>
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->
   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->
   <!-- search popup start -->
   <div class="search__popup z-index-8">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="search-popup-overlay"></div>
   <!-- search popup end -->
   <?php get_template_part('template-parts/header'); ?>

   <div class="mobile-header d-lg-none ">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-6">
               <div class="mobile__logo">
                  <?php insurez_header_logo_black(); ?>
               </div>
            </div>
            <div class="col-6">
               <div class="mobile__menu text-end">
                  <a class="tp-menu-bar" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header area end -->
   <!-- tp-offcanvus-area-start -->
   <div class="tpoffcanvas-area">
      <div class="offcanvas__wrapper">
         <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
               <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
               <?php insurez_header_logo_black(); ?>
            </div>
            <div class="mobile-menu"></div>

            <?php 
             $address = get_theme_mod('top_header_address', __('66 Broklyne Golden Street, USA', 'insurez'));
             $address_link = get_theme_mod('top_header_address_link', '#');
             $email = get_theme_mod('top_header_email', __('needhelp@company.com', 'insurez'));
             $call_us_button_text = get_theme_mod('header_phone_text', __('+986567686789', 'insurez'));
            ?>

            <div class="tpoffcanvas__contact">
               <h4 class="tpoffcanvas__title">Contacts</h4>
               <div class="tpoffcanvas__contact-content d-flex">
                  <div class="tpoffcanvas__contact-content-icon">
                     <i class="fa-sharp fa-solid fa-location-dot"></i>
                  </div>
                  <div class="tpoffcanvas__contact-content-content">
                     <a
                        href="<?php echo esc_url($address_link); ?>"><?php echo esc_html($address); ?></a>
                  </div>
               </div>
               <div class="tpoffcanvas__contact-content d-flex">
                  <div class="tpoffcanvas__contact-content-icon">
                     <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="tpoffcanvas__contact-content-content">
                     <a href="mailto:<?php echo esc_html($email); ?>"><?php echo esc_html($email); ?></a>
                  </div>
               </div>
               <div class="tpoffcanvas__contact-content d-flex">
                  <div class="tpoffcanvas__contact-content-icon">
                     <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="tpoffcanvas__contact-content-content">
                     <a href="tel:<?php echo esc_html($call_us_button_text); ?>"><?php echo esc_html($call_us_button_text); ?></a>
                  </div>
               </div>
            </div>
            <div class="tpoffcanvas__social">
               <?php insurez_mobile_menu_socials(); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <?php insurez_breadcrumb(); ?>