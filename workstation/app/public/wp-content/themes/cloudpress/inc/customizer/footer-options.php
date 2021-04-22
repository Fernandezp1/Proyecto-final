<?php
function cloudpress_footer_customizer ( $wp_customize )
{
	$wp_customize->add_section('footer_section',
		array(
			'title' => esc_html__('Footer Settings','cloudpress'),
			'priority' => 10,
			'panel' => 'cloudpress_theme_panel',
		)
	);

/************************* Eanble Footer *********************************/

	$wp_customize->add_setting('footer_enable',
		array(
			'default' => true,
			'sanitize_callback' => 'cloudpress_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Cloudpress_Toggle_Control( $wp_customize, 'footer_enable',
		array(
			'label'    => esc_html__( 'Hide/Show Footer', 'cloudpress' ),
			'section'  => 'footer_section',
			'type'     => 'ios',
			'priority' 				=> 1,
		)
	));

/************************* Copyright *********************************/
	$wp_customize->add_setting('footer_copyright',
		array(
			'default'=>	'<p>'.__( 'Proudly powered by <a href="https://wordpress.org"> WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">CloudPress</a> by SpiceThemes', 'cloudpress' ).'</p>',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback'=> 'cloudpress_sanitize_text',
		)
	);

	$wp_customize->add_control('footer_copyright',
		array(
			'label'=> esc_html__('Copyright Content','cloudpress'),
			'section'=> 'footer_section',
			'type'=> 'textarea',
			'priority'=> 2,
			'active_callback'=> 'cloudpress_footer_callback'
		)
	);

}
add_action('customize_register','cloudpress_footer_customizer');
