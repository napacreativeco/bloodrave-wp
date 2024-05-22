<?php

$wp_customize->add_section( 'overlay_announcement_section',
    array(
        'title' => __( 'Overlay Announcements' ),
        'description' => esc_html__( 'These are an example of Customizer Custom Controls.' ),
        'panel' => '', 
        'priority' => 160, 
        'capability' => 'edit_theme_options', 
        'theme_supports' => '', 
        'active_callback' => '', 
        'description_hidden' => 'false', 
    )
);

// Title
$wp_customize->add_setting( 'overlay_announcement_title',
    array(
        'default' => 'Default Title',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control( 'overlay_announcement_title',
    array(
        'label' => __( 'Title', 'bloodrave' ),
        'section'  => 'overlay_announcement_section',
        'priority' => 20,
        'type' => 'text',
        'capability' => 'edit_theme_options',
    )
);

// Description
$wp_customize->add_setting( 'overlay_announcement_description',
    array(
        'default' => 'Default Description',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_textarea_field'
    )
);

$wp_customize->add_control( 'overlay_announcement_description',
    array(
        'label' => __( 'Description', 'bloodrave' ),
        'section'  => 'overlay_announcement_section',
        'priority' => 30,
        'type' => 'textarea',
        'capability' => 'edit_theme_options',
    )
);

// URL
$wp_customize->add_setting( 'overlay_announcement_url',
    array(
        'default' => 'Default URL',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control( 'overlay_announcement_url',
    array(
        'label' => __( 'Enter URL', 'bloodrave' ),
        'section'  => 'overlay_announcement_section',
        'priority' => 40,
        'type' => 'text',
        'capability' => 'edit_theme_options',
    )
);