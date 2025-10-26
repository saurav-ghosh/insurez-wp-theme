<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Set up theme support features
function insurez_setup() {
    // Add support for dynamic <title> tag
    add_theme_support('title-tag');

    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for HTML5 markup
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Add support for custom logo
    add_theme_support('custom-logo');

    // Add support for post formats
    add_theme_support( 'post-formats', array(
        'image', 'video', 'gallery','audio',
    ) );

    // Register navigation menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'insurez'),
        'footer-menu' => __('Footer Menu', 'insurez'),
    ));
}
add_action('after_setup_theme', 'insurez_setup');

// Enqueue CSS and JS files
function insurez_enqueue_scripts() {
    // css files 
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '6.5.3', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'insurez-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );

   // js files 
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/vendor/waypoints.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'imagesloaded-pkgd', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'insurez-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'insurez-custom', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );

   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
       wp_enqueue_script( 'comment-reply' );
   }
}
add_action('wp_enqueue_scripts', 'insurez_enqueue_scripts');

/**
 * Add a sidebar.
 */
function insurez_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Posts Sidebar', 'insurez' ),
		'id'            => 'posts-sidebar',
		'description'   => __( 'These are the settings of posts sidebar.', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="widget mb-45 wow fadeInUp %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget--title mb-30">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'insurez' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'These are the settings of footer widget 1.', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget footer__widget-1 pb-30 %2$s">',
		'after_widget'  => '</div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'insurez' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'These are the settings of footer widget 2.', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget footer__widget-2 pb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer__widget-title footer__widget-title-2">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'insurez' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'These are the settings of footer widget 3.', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget footer__widget-3 pb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title footer__widget-title-3">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'insurez' ),
		'id'            => 'footer-widget-4',
		'description'   => __( 'These are the settings of footer widget 4.', 'insurez' ),
		'before_widget' => '<div id="%1$s" class="footer__widget footer__widget-3 pb-30 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'insurez_widgets_init' );

// Register custom Footer Widgets
function register_custom_footer_widget() {
    register_widget('Footer_Social_Icons_Widget');
    register_widget('Footer_Contact_Info_Widget');
}
add_action('widgets_init', 'register_custom_footer_widget');

// Add fields to user profile
function custom_author_social_fields($user) { ?>
    <h3><?php _e("Social Profiles", "insurez"); ?></h3>
    <table class="form-table">
        <tr>
            <th><label for="facebook">Facebook</label></th>
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="twitter">Twitter</label></th>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="linkedin">LinkedIn</label></th>
            <td>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr(get_the_author_meta('linkedin', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="pinterest">Pinterest</label></th>
            <td>
                <input type="text" name="pinterest" id="pinterest" value="<?php echo esc_attr(get_the_author_meta('pinterest', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
<?php }
add_action('show_user_profile', 'custom_author_social_fields');
add_action('edit_user_profile', 'custom_author_social_fields');

// Save custom fields
function save_custom_author_social_fields($user_id) {
    update_user_meta($user_id, 'facebook', sanitize_text_field($_POST['facebook']));
    update_user_meta($user_id, 'twitter', sanitize_text_field($_POST['twitter']));
    update_user_meta($user_id, 'linkedin', sanitize_text_field($_POST['linkedin']));
    update_user_meta($user_id, 'pinterest', sanitize_text_field($_POST['pinterest']));
}
add_action('personal_options_update', 'save_custom_author_social_fields');
add_action('edit_user_profile_update', 'save_custom_author_social_fields');

// Require kirki customizer settings and controls
if ( class_exists( 'Kirki' ) ) {
    require_once get_template_directory() . '/inc/insurez-kirki.php';
}

// Require template functions
require_once get_template_directory() . '/inc/template-functions.php';

// Require nav walker for Bootstrap 5
require_once get_template_directory() . '/inc/nav-walker.php';

// Require breadcrumb functions
require_once get_template_directory() . '/inc/breadcrumb.php';

add_action('pre_get_posts', 'show_all_portfolios_on_portfolio_archive');
function show_all_portfolios_on_portfolio_archive($query)
{
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('portfolio')) {
		$query->set('posts_per_page', -1); // Show all portfolios
	}
}