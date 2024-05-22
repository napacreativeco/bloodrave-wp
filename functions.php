<?php
function throne_theme_setup() {
	
	wp_enqueue_script("jquery");
	
    add_theme_support( 'post-thumbnails' );
	
    register_nav_menus(
        array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
        )
    );
    
}
add_action( 'init', 'throne_theme_setup' );

// add_action( 'after_setup_theme', 'woocommerce_support' );
// function woocommerce_support() {
//    add_theme_support( 'woocommerce' );
// }    



/*======================================================
 * Styles
 *======================================================*/
function throne_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/compiled/throne.css' );
    wp_enqueue_script( 'throne-script', get_stylesheet_directory_uri() . '/compiled/throne.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'throne_styles' );

/*======================================================
 * Disable WooCommerce Styles
 *======================================================*/
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
/**
 * Disable WooCommerce block styles (front-end).
 */
// function themesharbor_disable_woocommerce_block_styles() {
//     wp_dequeue_style( 'wc-blocks-style' );
// }
// add_action( 'wp_enqueue_scripts', 'themesharbor_disable_woocommerce_block_styles' );

/*======================================================
 * Trim Zeros on Prices
 *======================================================*/
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

function currentYear( $atts ){
    return date('Y');
}
add_shortcode( 'year', 'currentYear' );

/*======================================================
 * Customizer External
 *======================================================*/
//include get_template_directory() . '/inc/linkboxes.php';

/*======================================================
 * Pagination
 *======================================================*/
$args = array(
    'base'               => '%_%',
    'format'             => '?paged=%#%',
    'total'              => 1,
    'current'            => 0,
    'show_all'           => false,
    'end_size'           => 1,
    'mid_size'           => 2,
    'add_args'           => false,
    'add_fragment'       => '',
    'before_page_number' => '',
    'after_page_number'  => ''
);


remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/*======================================================
 * Active Nav
 *======================================================*/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


/*======================================================
 * Customizer
 *======================================================*/
function at_customizer( $wp_customize ) {

    include get_template_directory() . '/inc/announcement.php';
    include get_template_directory() . '/inc/overlay-announcement.php';

}
add_action( 'customize_register', 'at_customizer' );




    

