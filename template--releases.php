<?php
/* Template name: Releases */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div class="page-content <?php echo strtolower(get_the_title()); ?>">

    <div class="wrapper">
        <?php get_template_part("template-parts/release-list"); ?>
    </div>

</div>

<?php get_footer(); ?>