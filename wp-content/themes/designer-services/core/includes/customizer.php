<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'designer_services_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'designer-services' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'designer-services' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'designer-services' ),
			'off' => esc_html__( 'Disable', 'designer-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'designer-services' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'designer-services' ),
			'off' => esc_html__( 'Disable', 'designer-services' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'designer_services_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'designer-services' ),
	) );

	// POST SECTION

	Kirki::add_section( 'designer_services_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'designer-services' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'designer-services' ),
	    'panel'          => 'designer_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_enable_post_heading',
		'section'     => 'designer_services_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'designer-services' ),
		'section'     => 'designer_services_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'designer-services' ),
			'off' => esc_html__( 'Disable', 'designer-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'designer-services' ),
		'section'     => 'designer_services_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'designer-services' ),
			'off' => esc_html__( 'Disable', 'designer-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'designer_services_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'designer-services' ),
		'section'     => 'designer_services_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'designer_services_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'designer-services' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'designer-services' ),
	    'panel'          => 'designer_services_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_phone_number_heading',
		'section'     => 'designer_services_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'designer_services_header_phone_number',
		'section'  => 'designer_services_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'designer_services_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_email_address_heading',
		'section'     => 'designer_services_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'designer_services_header_email_address',
		'section'  => 'designer_services_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_enable_search',
		'section'     => 'designer_services_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_search_box_enable',
		'section'     => 'designer_services_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'designer-services' ),
			'off' => esc_html__( 'Disable', 'designer-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_enable_google_translator',
		'section'     => 'designer_services_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Google Translator', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_header_google_translator',
		'section'     => 'designer_services_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'designer-services' ),
			'off' => esc_html__( 'Disable', 'designer-services' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_enable_socail_link',
		'section'     => 'designer_services_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'designer_services_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'designer-services' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'designer-services' ),
		'settings'     => 'designer_services_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'designer-services' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'designer-services' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'designer-services' ),
				'description' => esc_html__( 'Add the social icon url here.', 'designer-services' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'designer_services_slider_section', array(
	    'title'          => esc_html__( 'Slider Settings', 'designer-services' ),
	    'description'    => esc_html__( '', 'designer-services' ),
	    'panel'          => 'designer_services_panel_id',
	    'priority'       => 160,
	) );
	
	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_enable_heading1',
		'section'     => 'designer_services_slider_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider',  'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_slider_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'designer-services' ),
		'section'     => 'designer_services_slider_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'designer-services' ),
			'off' => esc_html__( 'Disable',  'designer-services' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_slider_heading',
		'section'     => 'designer_services_slider_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Section ',  'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'designer_services_slider_counter',
        'label'       => esc_html__( 'Slider Counter Section',  'designer-services' ),
        'section'     => 'designer_services_slider_section',
        'default'     => '',
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $slider_image = get_theme_mod('designer_services_slider_counter','');
        for ( $i = 1; $i <= $slider_image; $i++ ) :

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'image',
        'settings'    => 'designer_services_slider_image'.$i,
        'label'       => esc_html__( 'Slider Image ', 'designer-services' ).$i,
        'description' => esc_html__( 'Image Dimension (1400 x 650)', 'designer-services' ),
        'section'     => 'designer_services_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'designer_services_slider_sub_heading' .$i,
        'label'       => esc_html__( 'Sub Heading ', 'designer-services' ).$i,
        'section'     => 'designer_services_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'designer_services_slider_main_heading' .$i,
        'label'       => esc_html__( 'Main Heading ', 'designer-services' ).$i,
        'section'     => 'designer_services_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'text',
        'settings'    => 'designer_services_slider_button_text' .$i,
        'label'       => esc_html__( 'Button Text ', 'designer-services' ).$i,
        'section'     => 'designer_services_slider_section',
        'default'     => '',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'link',
        'settings'    => 'designer_services_slider_button_url' .$i,
        'label'       => esc_html__( 'Button Url ', 'designer-services' ).$i,
        'section'     => 'designer_services_slider_section',
        'default'     => '',
    ] );

	endfor;

	//PROJECTS SECTION

	Kirki::add_section( 'designer_services_project_section', array(
	    'title'          => esc_html__( 'Our Project Settings', 'designer-services' ),
	    'description'    => esc_html__( 'Here you can add different type of project.', 'designer-services' ),
	    'panel'          => 'designer_services_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_enable_heading',
		'section'     => 'designer_services_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Project',  'designer-services' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_projects_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'designer-services' ),
		'section'     => 'designer_services_project_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'designer-services' ),
			'off' => esc_html__( 'Disable',  'designer-services' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_projects_text_heading',
		'section'     => 'designer_services_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Project', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'designer-services' ),
		'settings' => 'designer_services_projects_heading',
		'section'  => 'designer_services_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'designer_services_projects_number',
		'label'       => esc_html__( 'Number of Tabs to show', 'designer-services' ),
		'section'     => 'designer_services_project_section',
		'default'     => '',
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	$featured_post = get_theme_mod('designer_services_projects_number','');
    	for ( $j = 1; $j <= $featured_post; $j++ ) :

    	Kirki::add_field( 'theme_config_id', [
	        'type'        => 'text',
	        'settings'    => 'designer_services_projects_text' .$j,
	        'label'       => esc_html__( 'Tab Text ', 'designer-services' ).$j,
	        'section'     => 'designer_services_project_section',
	        'default'     => '',
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'select',
			'settings'    => 'designer_services_projects_category'.$j,
			'label'       => esc_html__( 'Select the category to show project ', 'designer-services' ).$j,
			'section'     => 'designer_services_project_section',
			'default'     => '',
			'placeholder' => esc_html__( 'Select an category...', 'designer-services' ),
			'priority'    => 10,
			'choices'     => designer_services_get_categories_select(),
		] );

	endfor;
    
	// FOOTER SECTION

	Kirki::add_section( 'designer_services_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'designer-services' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'designer-services' ),
        'panel'          => 'designer_services_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_footer_text_heading',
		'section'     => 'designer_services_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'designer_services_footer_text',
		'section'  => 'designer_services_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'designer_services_footer_enable_heading',
		'section'     => 'designer_services_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'designer-services' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'designer_services_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'designer-services' ),
		'section'     => 'designer_services_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'designer-services' ),
			'off' => esc_html__( 'Disable', 'designer-services' ),
		],
	] );
}