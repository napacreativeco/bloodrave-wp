<?php
/* Single Page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div class="page-content <?php echo strtolower(get_the_title()); ?>">

    <?php the_content(); ?>
    
</div>

<?php get_footer(); ?>