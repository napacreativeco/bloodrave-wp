<?php
/* Template name: Shows */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div class="page-content <?php echo strtolower(get_the_title()); ?>">

    <div class="wrapper">
        <?php get_template_part("template-parts/show-list"); ?>
    </div>

</div>

<?php get_footer(); ?>