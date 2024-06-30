<div class="navbar">
    <div class="row">

        <div class="left">
            <div class="logo">
                <span><a href="/" title="Home">Blood Rave</a></span>
                <span class="liner">
                    Dark Electronic Music<br />
                    Napa, California
                </span>
            </div>
        </div>


        <!--  
        <nav class="desktop">
            <?php
                wp_nav_menu( array(
                    'menu'           => 'Main Menu',
                    'menu_class'     => 'main-menu',
                    'container_class'=> 'main-menu',
                    'theme_location' => '__no_such_location',
                    'fallback_cb'    => false 
                ));
            ?>
        </nav>
        -->

        <div class="right">
            <?php if (!is_front_page()) {?>
                <?php wp_title(''); ?>
            <?php } ?>
            <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        
    </div>
</div>