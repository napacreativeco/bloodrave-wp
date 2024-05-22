<?php
/* Single Page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div class="page-content single-post <?php echo strtolower(get_the_title()); ?>">

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    
</div>

<?php get_footer(); ?>