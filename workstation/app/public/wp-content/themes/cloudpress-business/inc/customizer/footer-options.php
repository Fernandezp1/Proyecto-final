<?php
function cloudpress_business_footer_customizer ( $wp_customize )
{
	$wp_customize->add_section('footer_section',
		array(
			'title' => esc_html__('Footer Settings','cloudpress-business'),
			'priority' => 10,
			'panel' => 'cloudpress_theme_panel',
		)
	);

/************************* Eanble Footer *********************************/

	$wp_customize->add_setting('footer_enable',
		array(
			'default' => true,
			'sanitize_callback' => 'cloudpress_business_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Cloudpress_Toggle_Control( $wp_customize, 'footer_enable',
		array(
			'label'    => esc_html__( 'Hide/Show Footer', 'cloudpress-business' ),
			'section'  => 'footer_section',
			'type'     => 'ios',
			'priority' 				=> 1,
		)
	));

/************************* Copyright *********************************/
	$wp_customize->add_setting('footer_copyright',
		array(
			'default'=>	'<p>'.__( 'Proudly powered by <a href="https://wordpress.org"> WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">CloudPress Business</a> by SpiceThemes', 'cloudpress-business' ).'</p>',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback'=> 'cloudpress_business_sanitize_text',
		)
	);

	$wp_customize->add_control('footer_copyright',
		array(
			'label'=> esc_html__('Copyright Content','cloudpress-business'),
			'section'=> 'footer_section',
			'type'=> 'textarea',
			'priority'=> 2,
		)
	);

}
add_action('customize_register','cloudpress_business_footer_customizer');
function cloudpress_business_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function cloudpress_business_sanitize_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
}
