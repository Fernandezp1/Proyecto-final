<?php
/**
 * Single Blog Options Customizer
 *
 * @package cloudpress
 */
function cloudpress_single_blog_customizer ( $wp_customize )
{
$wp_customize->add_section('cloudpress_single_blog_section',
	array(
		'title' => esc_html__('Single Blog Section', 'cloudpress'),
		'panel' => 'cloudpress_theme_panel',
		'priority' => 5
	));

/************************* Meta Hide Show *********************************/

$wp_customize->add_setting('cloudpress_enable_single_post_category',
	array(
		'default' => true,
		'sanitize_callback' => 'cloudpress_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Cloudpress_Toggle_Control( $wp_customize, 'cloudpress_enable_single_post_category', 
	array(
		'label' => esc_html__('Hide/Show Categories', 'cloudpress'),
		'type' => 'ios',
		'section' => 'cloudpress_single_blog_section',
		'priority' => 4,
	)
));

$wp_customize->add_setting('cloudpress_enable_single_post_date',
	array(
		'default' => true,
		'sanitize_callback' => 'cloudpress_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Cloudpress_Toggle_Control( $wp_customize, 'cloudpress_enable_single_post_date', 
	array(
		'label' => esc_html__('Hide/Show Date', 'cloudpress'),
		'type' => 'ios',
		'section' => 'cloudpress_single_blog_section',
		'priority' => 6,
	)
));

$wp_customize->add_setting('cloudpress_enable_single_post_tag',
	array(
		'default' => true,
		'sanitize_callback' => 'cloudpress_sanitize_checkbox',
	)
);
$wp_customize->add_control(new Cloudpress_Toggle_Control( $wp_customize, 'cloudpress_enable_single_post_tag', 
	array(
		'label' => esc_html__('Hide/Show Tags', 'cloudpress'),
		'type' => 'ios',
		'section' => 'cloudpress_single_blog_section',
		'priority' => 8,
	)
));

}
add_action( 'customize_register', 'cloudpress_single_blog_customizer' );