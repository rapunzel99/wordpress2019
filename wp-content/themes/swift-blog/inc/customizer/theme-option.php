<?php 

/**
 * Theme Options Panel.
 *
 * @package swift_blog
 */

$default = swift_blog_get_default_theme_options();
// Setting - enable_header_overlay.
$wp_customize->add_setting('enable_header_overlay',
    array(
        'default' => $default['enable_header_overlay'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_header_overlay',
    array(
        'label' => esc_html__('Enable Header Overlay', 'swift-blog'),
        'section' => 'header_image',
        'type' => 'checkbox',
        'priority' => 100,
    )
);
// Setting - site_title_identity_color.
$wp_customize->add_setting( 'site_title_identity_color',
	array(
		'default'           => $default['site_title_identity_color'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control ( new WP_Customize_Color_Control( $wp_customize, 'site_title_identity_color',
	array(
		'label'    => __( 'Site Title/Tagline Color', 'swift-blog' ),
		'section'  => 'title_tagline',
		'type'     => 'color',
		'priority' => 100,
	)
) );

// Add Theme Options Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
		'title'      => esc_html__( 'Theme Options', 'swift-blog' ),
		'priority'   => 200,
		'capability' => 'edit_theme_options',
	)
);

/*layout management section start */
$wp_customize->add_section( 'theme_option_section_settings',
	array(
		'title'      => esc_html__( 'Layout Management', 'swift-blog' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'theme_option_panel',
	)
);

/*Date Layout*/
$wp_customize->add_setting( 'site_date_layout_option',
	array(
		'default'           => $default['site_date_layout_option'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'swift_blog_sanitize_select',
	)
);
$wp_customize->add_control( 'site_date_layout_option',
	array(
		'label'    => esc_html__( 'Select Date Format', 'swift-blog' ),
		'section'  => 'theme_option_section_settings',
		'choices'  => array(
                'in-time-span' => __( 'Time Span Format', 'swift-blog' ),
                'normal-format' => __( 'Regular Format', 'swift-blog' ),
		    ),
		'type'     => 'select',
		'priority' => 160,
	)
);

/*Global Layout*/
$wp_customize->add_setting( 'global_layout',
	array(
		'default'           => $default['global_layout'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'swift_blog_sanitize_select',
	)
);
$wp_customize->add_control( 'global_layout',
	array(
		'label'    => esc_html__( 'Global Sidebar Layout', 'swift-blog' ),
		'section'  => 'theme_option_section_settings',
		'choices'   => array(
			'left-sidebar'  => esc_html__( 'Primary Sidebar - Content', 'swift-blog' ),
			'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'swift-blog' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'swift-blog' ),
			),
		'type'     => 'select',
		'priority' => 170,
	)
);


/*content excerpt in global*/
$wp_customize->add_setting( 'excerpt_length_global',
	array(
		'default'           => $default['excerpt_length_global'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'swift_blog_sanitize_positive_integer',
	)
);
$wp_customize->add_control( 'excerpt_length_global',
	array(
		'label'    => esc_html__( 'Set Global Archive Length', 'swift-blog' ),
		'section'  => 'theme_option_section_settings',
		'type'     => 'number',
		'priority' => 175,
		'input_attrs'     => array( 'min' => 1, 'max' => 200, 'style' => 'width: 150px;' ),

	)
);
// Footer Latest fix post Section.
$wp_customize->add_section('single_page_section_Settings',
    array(
        'title' => esc_html__('Single Post/page Section Options', 'swift-blog'),
        'priority' => 100,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);
// Setting - enable_except_on_single_post.
$wp_customize->add_setting('enable_except_on_single_post',
    array(
        'default' => $default['enable_except_on_single_post'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_except_on_single_post',
    array(
        'label' => esc_html__('Enable Excerpt on Single Post/page', 'swift-blog'),
        'section' => 'single_page_section_Settings',
        'type' => 'checkbox',
        'priority' => 100,
    )
);

// Setting - enable_authro_detail_single_page.
$wp_customize->add_setting('enable_authro_detail_single_page',
    array(
        'default' => $default['enable_authro_detail_single_page'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_authro_detail_single_page',
    array(
        'label' => esc_html__('Enable Author Details on Single Post/page', 'swift-blog'),
        'section' => 'single_page_section_Settings',
        'type' => 'checkbox',
        'priority' => 90,
    )
);

// Setting - enable_related_post_on_single_page.
$wp_customize->add_setting('enable_related_post_on_single_page',
    array(
        'default' => $default['enable_related_post_on_single_page'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_related_post_on_single_page',
    array(
        'label' => esc_html__('Enable Related Post on Single Post/page', 'swift-blog'),
        'section' => 'single_page_section_Settings',
        'type' => 'checkbox',
        'priority' => 100,
    )
);
// Setting single_related_post_title.
$wp_customize->add_setting( 'single_related_post_title',
	array(
	'default'           => $default['single_related_post_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'single_related_post_title',
	array(
	'label'    => __( 'Title for Single Post/page Related Post', 'swift-blog' ),
	'section'  => 'single_page_section_Settings',
	'type'     => 'text',
	'priority' => 100,
	)
);
/*No of related post*/
$wp_customize->add_setting('number_of_single_related_post',
    array(
        'default'           => $default['number_of_single_related_post'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_positive_integer',
    )
);
$wp_customize->add_control('number_of_single_related_post',
    array(
        'label'       => esc_html__('Select no of Related Post (max-6)', 'swift-blog'),
        'section'     => 'single_page_section_Settings',
        'type'        => 'number',
        'priority'    => 110,
        'input_attrs' => array('min' => 1, 'max' => 6, 'style' => 'width: 150px;'),

    )
);

// Pagination Section.
$wp_customize->add_section( 'pagination_section',
	array(
	'title'      => __( 'Pagination Options', 'swift-blog' ),
	'priority'   => 110,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

// Setting pagination_type.
$wp_customize->add_setting( 'pagination_type',
	array(
	'default'           => $default['pagination_type'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'swift_blog_sanitize_select',
	)
);
$wp_customize->add_control( 'pagination_type',
	array(
	'label'       => __( 'Pagination Type', 'swift-blog' ),
	'section'     => 'pagination_section',
	'type'        => 'select',
	'choices'               => array(
		'default' => __( 'Default (Older / Newer Post)', 'swift-blog' ),
		'numeric' => __( 'Numeric', 'swift-blog' ),
	    ),
	'priority'    => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'footer_section',
	array(
	'title'      => __( 'Footer Options', 'swift-blog' ),
	'priority'   => 130,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);


// Setting social_content_heading.
$wp_customize->add_setting( 'number_of_footer_widget',
	array(
	'default'           => $default['number_of_footer_widget'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'swift_blog_sanitize_select',
	)
);
$wp_customize->add_control( 'number_of_footer_widget',
	array(
	'label'    => __( 'Number Of Footer Widget', 'swift-blog' ),
	'section'  => 'footer_section',
	'type'     => 'select',
	'priority' => 100,
	'choices'               => array(
		0 => __( 'Disable footer sidebar area', 'swift-blog' ),
		1 => __( '1', 'swift-blog' ),
		2 => __( '2', 'swift-blog' ),
		3 => __( '3', 'swift-blog' ),
		4 => __( '4', 'swift-blog' ),
	    ),
	)
);

// Setting enable_mailchimp_suscription.
$wp_customize->add_setting('enable_mailchimp_suscription',
    array(
        'default' => $default['enable_mailchimp_suscription'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_mailchimp_suscription',
    array(
        'label' => __('Enable Mailchimp Suscription Section', 'swift-blog'),
        'section' => 'footer_section',
        'type' => 'checkbox',
        'priority' => 100,
    )
);

// Setting mailchimp_suscription_title.
$wp_customize->add_setting( 'mailchimp_suscription_title',
	array(
	'default'           => $default['mailchimp_suscription_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'mailchimp_suscription_title',
	array(
	'label'    => __( 'Mailchimp Suscription Title', 'swift-blog' ),
	'section'  => 'footer_section',
	'type'     => 'text',
	'priority' => 120,
    'active_callback' => 'swift_blog_mailchimp_section_callback',
	)
);


// Setting mailchimp_suscription_shortcode.
$wp_customize->add_setting( 'mailchimp_suscription_shortcode',
	array(
	'default'           => $default['mailchimp_suscription_shortcode'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'mailchimp_suscription_shortcode',
	array(
	'label'    => __( 'Mailchimp Suscription Shortcode', 'swift-blog' ),
	'section'  => 'footer_section',
	'type'     => 'text',
	'priority' => 120,
    'active_callback' => 'swift_blog_mailchimp_section_callback',
	)
);


// Setting enable_site_logo_on_footer.
$wp_customize->add_setting('enable_site_logo_on_footer',
    array(
        'default' => $default['enable_site_logo_on_footer'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_site_logo_on_footer',
    array(
        'label' => __('Enable Site Logo', 'swift-blog'),
        'section' => 'footer_section',
        'type' => 'checkbox',
        'priority' => 130,
    )
);

// Setting copyright_text.
$wp_customize->add_setting( 'copyright_text',
	array(
	'default'           => $default['copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'copyright_text',
	array(
	'label'    => __( 'Footer Copyright Text', 'swift-blog' ),
	'section'  => 'footer_section',
	'type'     => 'text',
	'priority' => 130,
	)
);


// Breadcrumb Section.
$wp_customize->add_section( 'breadcrumb_section',
	array(
	'title'      => __( 'Breadcrumb Options', 'swift-blog' ),
	'priority'   => 120,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

// Setting breadcrumb_type.
$wp_customize->add_setting( 'breadcrumb_type',
	array(
	'default'           => $default['breadcrumb_type'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'swift_blog_sanitize_select',
	)
);
$wp_customize->add_control( 'breadcrumb_type',
	array(
	'label'       => __( 'Breadcrumb Type', 'swift-blog' ),
	'description' => sprintf( __( 'Advanced: Requires %1$sBreadcrumb NavXT%2$s plugin', 'swift-blog' ), '<a href="https://wordpress.org/plugins/breadcrumb-navxt/" target="_blank">','</a>' ),
	'section'     => 'breadcrumb_section',
	'type'        => 'select',
	'choices'               => array(
		'disabled' => __( 'Disabled', 'swift-blog' ),
		'simple' => __( 'Simple', 'swift-blog' ),
		'advanced' => __( 'Advanced', 'swift-blog' ),
	    ),
	'priority'    => 100,
	)
);


// Preloader Section.
$wp_customize->add_section('enable_preloader_option',
    array(
        'title' => __('Preloader Options', 'swift-blog'),
        'priority' => 120,
        'capability' => 'edit_theme_options',
        'panel' => 'theme_option_panel',
    )
);

// Setting enable_preloader.
$wp_customize->add_setting('enable_preloader',
    array(
        'default' => $default['enable_preloader'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'swift_blog_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_preloader',
    array(
        'label' => __('Enable Preloader', 'swift-blog'),
        'section' => 'enable_preloader_option',
        'type' => 'checkbox',
        'priority' => 150,
    )
);
