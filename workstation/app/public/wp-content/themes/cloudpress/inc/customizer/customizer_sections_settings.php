<?php
$repeater_path = trailingslashit( CLOUDPRESS_THEME_DIR ) . '/inc/customizer-repeater/functions.php';
if ( file_exists( $repeater_path ) ) {
require_once( $repeater_path );
}
/**
 * Customize for taxonomy with dropdown, extend the WP customizer
 */

if ( ! class_exists( 'WP_Customize_Control' ) )
	return NULL;

function cloudpress_sections_settings( $wp_customize ){
	
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

/* Sections Settings */
	$wp_customize->add_panel( 'section_settings', array(
		'priority'       => 126,
		'capability'     => 'edit_theme_options',
		'title'      => esc_html__('Homepage Section Settings','cloudpress'),
	) );
	
	//Latest News Section
	$wp_customize->add_section('cloudpress_latest_news_section',array(
			'title' => esc_html__('Latest News settings','cloudpress'),
			'panel' => 'section_settings',
			'priority'       => 8,
			));
		
			
	// Enable news section
	$wp_customize->add_setting( 'latest_news_section_enable' , array( 'default' => 'on',  'sanitize_callback' => 'cloudpress_sanitize_radio',) );
			$wp_customize->add_control(	'latest_news_section_enable' , array(
					'label'    => esc_html__( 'Enable Home News section', 'cloudpress' ),
					'section'  => 'cloudpress_latest_news_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>esc_html__('ON', 'cloudpress'),
						'off'=>esc_html__('OFF', 'cloudpress')
					)
			));

		// News section title
		$wp_customize->add_setting( 'home_news_section_title',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('Vitae Lacinia','cloudpress'),
		'sanitize_callback' => 'cloudpress_sanitize_text',
		));	
		$wp_customize->add_control( 'home_news_section_title',array(
		'label'   => esc_html__('Title','cloudpress'),
		'section' => 'cloudpress_latest_news_section',
		'type' => 'text',
		));	
		
		//News section discription
		$wp_customize->add_setting( 'home_news_section_discription',array(
		'default'=> esc_html__('Cras Vitae Placerat','cloudpress'),
		'sanitize_callback' => 'cloudpress_sanitize_text',
		));	
		$wp_customize->add_control( 'home_news_section_discription',array(
		'label'   => esc_html__('From Our Blog','cloudpress'),
		'section' => 'cloudpress_latest_news_section',
		'type' => 'textarea',
		));	
		
		
		// enable / disable meta section 
		$wp_customize->add_setting(
			'blog_meta_section_enable',
			array('capability'  => 'edit_theme_options',
			'default' => true,
			'sanitize_callback' => 'cloudpress_sanitize_checkbox',
			
			));
		$wp_customize->add_control(
			'blog_meta_section_enable',
			array(
				'type' => 'checkbox',
				'label' => esc_html__('Enable post meta values, like author name, date, comments, etc.','cloudpress'),
				'section' => 'cloudpress_latest_news_section',
			)
		);		
}
add_action( 'customize_register', 'cloudpress_sections_settings' );

/**
 * Add selective refresh for Front page section section controls.
 */
function cloudpress_register_home_section_partials( $wp_customize ){
	//News
	$wp_customize->selective_refresh->add_partial( 'home_news_section_title', array(
		'selector'            => '.section-module.blog .section-subtitle',
		'settings'            => 'home_news_section_title',
		'render_callback'  => 'cloudpress_home_news_section_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_news_section_discription', array(
		'selector'            => '.section-module.blog .section-title',
		'settings'            => 'home_news_section_discription',
		'render_callback'  => 'cloudpress_home_news_section_discription_render_callback',
	
	) );
}
add_action( 'customize_register', 'cloudpress_register_home_section_partials' );

function cloudpress_home_news_section_title_render_callback() {
	return get_theme_mod( 'home_news_section_title' );
}

function cloudpress_home_news_section_discription_render_callback() {
	return get_theme_mod( 'home_news_section_discription' );
}

function cloudpress_sanitize_radio( $input, $setting ){
     //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);
 
     //get the list of possible radio box options 
     $choices = $setting->manager->get_control( $setting->id )->choices;
                             
     //return input if valid or return default option
     return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                          
}