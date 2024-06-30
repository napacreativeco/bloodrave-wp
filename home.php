<?php
/* Single Page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div class="page-content blog-page">
    <ul>
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
            

            <li class="blog-post-card">
                <div onclick="window.location='<?php the_permalink(); ?>';" class="image" style="background: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center center;">
                </div>
                <div class="title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
            </li>


        <?php
        endwhile; else:
        ?>
            <li>no posts yet</li>
        <?php
        endif;
        ?>
    </ul>

    
</div>

<?php get_footer(); ?>