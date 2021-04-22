<?php
// Global variables define
define('CLOUDPRESS_BUSINESS_PARENT_TEMPLATE_DIR_URI', get_template_directory_uri());
define('CLOUDPRESS_BUSINESS_TEMPLATE_DIR_URI', get_stylesheet_directory_uri());
define('CLOUDPRESS_BUSINESS_TEMPLATE_DIR', trailingslashit(get_stylesheet_directory()));

if (!function_exists('wp_body_open')) {

    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action('wp_body_open');
    }

}

// Enqueue Script
add_action('wp_enqueue_scripts', 'cloudpress_business_enqueue_styles',999);

function cloudpress_business_enqueue_styles() {

    wp_enqueue_style('cloudpress-business-parent-style', CLOUDPRESS_BUSINESS_PARENT_TEMPLATE_DIR_URI . '/style.css', array('bootstrap'));

    if (get_theme_mod('custom_color_enable') == true) {
        cloudpress_business_custom_light();
    }
    else {
        wp_enqueue_style('cloudpress-business-default-style', CLOUDPRESS_BUSINESS_TEMPLATE_DIR_URI . '/assets/css/default.css');
    }

}

//Setup theme
add_action('after_setup_theme', 'cloudpress_business_setup');

function cloudpress_business_setup() {
    load_theme_textdomain('cloudpress-business', CLOUDPRESS_BUSINESS_TEMPLATE_DIR . '/languages');

    require(CLOUDPRESS_BUSINESS_TEMPLATE_DIR . '/inc/customizer/footer-options.php');
    require(CLOUDPRESS_BUSINESS_TEMPLATE_DIR . '/inc/customizer/customizer_theme_style.php');

    //About Theme
    $theme = wp_get_theme(); // gets the current theme
    if ('CloudPress Business' == $theme->name) {
        if (is_admin()) {
            require CLOUDPRESS_BUSINESS_TEMPLATE_DIR . '/admin/admin-init.php';
        }
    }
}

// Add footer hook
add_action('cloudpress_business_footer_section_hook', 'cloudpress_business_footer_section_hook');

function cloudpress_business_footer_section_hook() {?>
 <footer class="site-footer">
 <?php
    if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3') || is_active_sidebar('footer-sidebar-4')): ?>
        <div class="row footer-sidebar">
            <!--Footer Widgets-->
            <div class="container">
              <div class="row">
                <?php get_template_part('sidebar','footer');?>
              </div>
            </div>
            <!--/Footer Widgets-->
        </div>
    <?php endif;?>
    <!--Site Info-->
    <?php if(get_theme_mod('footer_enable',true)===true):?>
            <div class="site-info">
                <div class="site-branding">
                 <?php $cloudpress_business_footer_copyright = get_theme_mod('footer_copyright','<p>'.__( 'Proudly powered by <a href="https://wordpress.org"> WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">CloudPress Business</a> by SpiceThemes', 'cloudpress-business' ).'</p>'); ?>
                <?php echo wp_kses_post($cloudpress_business_footer_copyright);?>
            </div>
        </div>
    <?php endif;?>
    <!--/Site Info-->
 </footer>
<?php
}

//Add custom color function
function cloudpress_business_custom_light() {
    $cloudpress_business_link_color = get_theme_mod('link_color','#E84B63');
    list($r, $g, $b) = sscanf($cloudpress_business_link_color, "#%02x%02x%02x");
    $r = $r - 232;
    $g = $g - 75;
    $b = $b - 99;

    if ($cloudpress_business_link_color != '#ff0000') :?>
    <style type="text/css">
        /* ====== Site title ===== */
        .site-title a:hover{
          color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        /* ====== Menus Section ===== */
        .navbar5.navbar-custom .search-box-outer a:hover, .dropdown-item.active, .dropdown-item:active, .dropdown-item:hover, .woocommerce-loop-product__title:hover {
          color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        .navbar5.navbar-custom .nav li.active a, .navbar5.navbar-custom .nav li.active a:hover, .navbar5.navbar-custom .nav li.active a:focus, .navbar5.navbar-custom .nav li a:hover, .navbar5.navbar .nav .nav-item:hover .nav-link, .navbar5.navbar .nav .nav-item .nav-link:focus, .navbar5.navbar .nav .nav-item.active .nav-link {
            background-color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        @media (max-width: 991px) {
        	.navbar5.navbar-custom .nav li.active a, .navbar5.navbar-custom .nav li.active a:hover, .navbar5.navbar-custom .nav li.active a:focus, .navbar5.navbar-custom .nav li a:hover {
        	    background-color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        	}
        }
        /* ====== Button ===== */
        .navbar5 .search-form input[type="submit"] {
            background: <?php echo esc_html($cloudpress_business_link_color); ?> none repeat scroll 0 0 !important;
            border: 1px solid <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        /* ====== Service Section ===== */
        .services3 .post:hover .post-thumbnail i.fa, .services3 .post:hover .post-thumbnail img {
        	background: #f5f6fa !important;
        }
        .services3 .post-thumbnail i.fa {
            background: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
            box-shadow: <?php echo esc_html($cloudpress_business_link_color); ?> 0px 0px 0px 1px !important;
        }
        .services3 .post:hover .post-thumbnail i.fa {
            color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        /* ====== Testimonial Section ===== */
        .testimonial3 .testmonial-block {
            border-left: 4px solid <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        .testimonial3 .testmonial-block:before {
              border-top: 25px solid <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        /* ====== WooCommerce ===== */
        .cart-header > a .cart-total {
              background: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        .woocommerce #review_form #respond .form-submit input, .woocommerce-message a.button, .woocommerce .return-to-shop a.button {
            background-color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        .woocommerce [type=submit], .woocommerce button {
            border: 1px solid <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        .woocommerce-message::before {
          color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        /* ====== Top Header ===== */
        .header-sidebar {
            background-color: <?php echo esc_html($cloudpress_business_link_color); ?> !important;
        }
        .widget .head-contact-info li a:hover {
            color: #fff !important;
        }
    </style>
<?php
endif;
}


function cloudpress_business_custom_color_css() {
  $theme = wp_get_theme();
  if ('CloudPress Business' == $theme->name) {
    if (get_theme_mod('custom_color_enable') == true) { ?>
        <style>
          .navbar5 button {
              background-color: transparent !important;
          }
          @media (min-width: 992px) {
            .navbar5 .search-box-outer .dropdown-menu {
                top: 30px !important;
            }
          }
        </style>
    <?php } ?>
    <style type="text/css">
      .cart-header a .cart-total span { display: none; }
    </style>
  <?php }
}
add_action('wp_head','cloudpress_business_custom_color_css');

function cloudpress_business_search_style() {
  if ( class_exists( 'WooCommerce' ) ) { ?>
    <style type="text/css">
      .navbar5 .nav-search { border-right: 1px solid rgb(255 255 255 / 60%); }
    </style>
  <?php }
}
add_action('wp_head','cloudpress_business_search_style');
