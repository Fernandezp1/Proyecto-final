<?php
/**
* Theme functions and definitions.
* @package Cloudpress WordPress theme
*/

if( ! defined( 'ABSPATH' ) )
{
	exit;
}

define('CLOUDPRESS_THEME_DIR', get_template_directory());
define('CLOUDPRESS_THEME_URI', get_template_directory_uri() );

if ( ! function_exists( 'wp_body_open' ) ) {

	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 */
		do_action( 'wp_body_open' );
	}
}

/**
 * Implement the Custom Header feature.
 */
require( CLOUDPRESS_THEME_DIR . '/inc/theme-setup.php');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cloudpress_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'cloudpress_content_width', 696 );
}
add_action( 'after_setup_theme', 'cloudpress_content_width', 0 );

//About Theme
$theme = wp_get_theme(); // gets the current theme
if ( 'CloudPress' == $theme->name)
{
	if ( is_admin() )
	{
        require CLOUDPRESS_THEME_DIR . '/admin/admin-init.php';
	}
}

//Alpha Color Control
require( CLOUDPRESS_THEME_DIR .'/inc/customizer/customizer-alpha-color-picker/class-cloudpress-customize-alpha-color-control.php');

/**
* Register Widget
*/
require( CLOUDPRESS_THEME_DIR . '/inc/widget/register-widget.php');

/**
* Breadcrumb setting
*/
require( CLOUDPRESS_THEME_DIR . '/inc/breadcrumbs/breadcrumbs.php');

/**
* Register css and js
*/
require( CLOUDPRESS_THEME_DIR . '/inc/script/scripts.php');

/**
* Nav walker
*/
require( CLOUDPRESS_THEME_DIR . '/inc/menu/default_menu_walker.php');
require( CLOUDPRESS_THEME_DIR . '/inc/menu/cloudpress_nav_walker.php');
/**
* helder function
*/
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/helper-function.php');
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer-toggle/customizer-toggle.php');

/**
* Customizer functionality
*/
require ( CLOUDPRESS_THEME_DIR . '/inc/custom-style/custom-css.php' );
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/customizer_theme_style.php' );
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/customizer_sections_settings.php' );
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/customizer.php' );
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/single-blog-options.php' );
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/footer-options.php' );
require ( CLOUDPRESS_THEME_DIR . '/inc/widget/wdl_social_icon.php');
require ( CLOUDPRESS_THEME_DIR . '/inc/widget/wdl_topbar_info.php');
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/customizer-pro-feature.php' );
require ( CLOUDPRESS_THEME_DIR . '/inc/customizer/customizer-recommended-plugin.php');
require_once ( CLOUDPRESS_THEME_DIR . '/inc/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'cloudpress_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function cloudpress_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		 // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => 'Spice Box',
            'slug'      => 'spicebox',
            'required'  => false,
        ),
         array(
            'name'      => 'Yoast SEO',
            'slug'      => 'wordpress-seo',
            'required'  => false,
        ),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
