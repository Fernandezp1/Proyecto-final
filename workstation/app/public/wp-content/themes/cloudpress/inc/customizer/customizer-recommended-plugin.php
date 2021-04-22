<?php
/* Notifications in customizer */
require CLOUDPRESS_THEME_DIR . '/inc/customizer-notify/cloudpress-customizer-notify.php';
$config_customizer = array(
	'recommended_plugins'       => array(
		'spicebox' => array(
			'recommended' => true,
			'description' => sprintf( esc_html__( 'Install and activate the %s plugin to take full advantage of all the features this theme has to offer.', 'cloudpress' ), sprintf( '<strong>%s</strong>', 'Spicebox' ) ),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'cloudpress' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'cloudpress' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'cloudpress' ),
	'activate_button_label'     => esc_html__( 'Activate', 'cloudpress' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'cloudpress' ),
);
cloudpress_Customizer_Notify::init( apply_filters( 'cloudpress_customizer_notify_array', $config_customizer ) );

?>