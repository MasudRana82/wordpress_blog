<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function designer_services_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'designer-services' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Google Language Translator', 'designer-services' ),
			'slug'             => 'google-language-translator',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	designer_services_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'designer_services_register_recommended_plugins' );