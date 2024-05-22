<?php 
if (get_theme_mod('announcement_checkbox') == 1) { ?>
    <div id="announcement-overlay">
        <div class="wrap">
            <div id="announcement-closer" class="closer"><span>&times;</span></div>
            <?php if ( !empty(get_theme_mod('announcement_image')) ) { ?>
                <img src="<?php echo get_theme_mod('announcement_image'); ?>" alt="<?php get_theme_mod('announcement_title'); ?>" />
            <?php } ?>
            <h3><?php echo get_theme_mod('announcement_title'); ?></h3>
            <p><?php echo get_theme_mod('announcement_description'); ?></p>
            <?php if ( !empty(get_theme_mod('announcement_button_text')) ) { ?>
                <button onclick="window.open('<?php get_theme_mod('announcement_url'); ?>');">
                    <?php echo get_theme_mod('announcement_button_text'); ?>
                </button>
            <?php } ?>
        </div>
    </div>
<?php } ?>