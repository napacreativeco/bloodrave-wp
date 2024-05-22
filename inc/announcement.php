<?php

$wp_customize->add_section( 'announcement_section',
    array(
        'title' => __( 'Announcements' ),
        'description' => esc_html__( 'These are an example of Customizer Custom Controls.' ),
        'panel' => '', 
        'priority' => 160, 
        'capability' => 'edit_theme_options', 
        'theme_supports' => '', 
        'active_callback' => '', 
        'description_hidden' => 'false', 
    )
);

// Checkbox
$wp_customize->add_setting( 'announcement_checkbox',
    array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'bloodrave_sanitize_checkbox'
    )
);

function bloodrave_sanitize_checkbox( $input ) {
	
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

$wp_customize->add_control( 'announcement_checkbox',
    array(
        'label' => __( 'Show/Hide Announcement', 'bloodrave' ),
        'description' => esc_html__( 'Checked = active, Unchecked = inactive' ),
        'section'  => 'announcement_section',
        'priority' => 10,
        'type' => 'checkbox',
        'capability' => 'edit_theme_options',
    )
);

// Title
$wp_customize->add_setting( 'announcement_title',
    array(
        'default' => 'Default Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control( 'announcement_title',
    array(
        'label' => __( 'Title', 'bloodrave' ),
        'section'  => 'announcement_section',
        'priority' => 20,
        'type' => 'text',
        'capability' => 'edit_theme_options',
    )
);

// Description
$wp_customize->add_setting( 'announcement_description',
    array(
        'default' => 'Default Description',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field'
    )
);

$wp_customize->add_control( 'announcement_description',
    array(
        'label' => __( 'Description', 'bloodrave' ),
        'section'  => 'announcement_section',
        'priority' => 30,
        'type' => 'textarea',
        'capability' => 'edit_theme_options',
    )
);

// URL
$wp_customize->add_setting( 'announcement_url',
    array(
        'default' => 'Default URL',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control( 'announcement_url',
    array(
        'label' => __( 'Enter URL', 'bloodrave' ),
        'section'  => 'announcement_section',
        'priority' => 40,
        'type' => 'text',
        'capability' => 'edit_theme_options',
    )
);

// Button Text
$wp_customize->add_setting( 'announcement_button_text',
    array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control( 'announcement_button_text',
    array(
        'label' => __( 'Button Text', 'bloodrave' ),
        'section'  => 'announcement_section',
        'priority' => 40,
        'type' => 'text',
        'capability' => 'edit_theme_options',
    )
);

// Image
$wp_customize->add_setting('announcement_image', array(
        'transport'         => 'refresh',
        'height'            => 325,
    )
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'announcement_image_control', array(
        'label'             => __('Announcement Image', 'bloodrave'),
        'section'           => 'announcement_section',
        'settings'          => 'announcement_image',    
    )
));