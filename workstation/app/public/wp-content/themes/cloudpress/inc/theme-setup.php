<?php
if( !function_exists('cloudpress_theme_setup')):

	function cloudpress_theme_setup()
	{
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cloudpress, use a find and replace
		* to change 'cloudpress' to the name of your theme in all the template files.
		*/
		load_theme_textdomain('cloudpress', CLOUDPRESS_THEME_DIR .'/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support('title-tag');
		
		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'cloudpress-primary' => esc_html__('Primary' , 'cloudpress')
		));

		// woocommerce support
			add_theme_support( 'woocommerce' );
	
		// Woocommerce Gallery Support
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		add_theme_support( 'custom-header', apply_filters( 'cloudpress_custom_header_args', array(
		'default-text-color'     => '000000',
		'width'                  => 2000,
		'height'                 => 150,
		'flex-height'            => true,
		) ) );
		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
		   	'height'      => 45,
		   	'width'       => 285,
		   	'flex-width' => true,
			)
		);

		add_editor_style();

		// Gutenberg layout support.
		add_theme_support( 'align-wide' );
	}
	endif;	

	add_action(	'after_setup_theme', 'cloudpress_theme_setup' );

	function cloudpress_comment_field_to_bottom( $fields ) 
	{
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter( 'comment_form_fields', 'cloudpress_comment_field_to_bottom' );

	add_filter( 'wp_get_attachment_image_attributes', function( $attr )
	{
	 if( isset( $attr['class'] )  && 'custom-logo' === $attr['class'] )
	     $attr['class'] = 'custom-logo';
	 return $attr;
	} );


	add_filter( 'get_custom_logo', 'cloudpress_change_logo_class' );

	function cloudpress_change_logo_class( $html ) {
	$html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
	return $html;
	}


	add_action( 'admin_init', 'cloudpress_customizer_css' );
	function cloudpress_customizer_css() 
		{
			wp_enqueue_style( 'cloudpress-pro-info', CLOUDPRESS_THEME_URI . '/assets/css/pro-details.css' );
		}