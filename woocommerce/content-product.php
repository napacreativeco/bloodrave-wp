<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( 'product-card', $product ); ?>>


    <div onclick="window.location='<?php the_permalink(); ?>';" class="image" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center center;">
        <?php
        if( $product->is_on_sale() ) { ?>
            <span class="sale-tag">on sale</span>				
        <?php
        }
        ?>
    </div>

    <div class="title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> by Blood Rave">
            <?php
            /**
            * Hook: woocommerce_shop_loop_item_title.
            *
            * @hooked woocommerce_template_loop_product_title - 10
            */
            do_action( 'woocommerce_shop_loop_item_title' );
            ?>
        </a>
    </div>
    <div class="price">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> by Blood Rave">
            <?php
            /**
             * Hook: woocommerce_after_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_rating - 5
             * @hooked woocommerce_template_loop_price - 10
             */
            do_action( 'woocommerce_after_shop_loop_item_title' );
            ?>
        </a>
    </div>

    <div class="options">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> by Blood Rave">
            <?php
            $variations = $product->get_available_variations();
            echo count($variations) . ' variations';
            ?>
        </a>
    </div>

</li>