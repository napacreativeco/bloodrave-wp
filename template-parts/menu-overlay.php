<div id="menu-overlay">
    <div id="close-menu">Close</div>
    
    <div class="holder">

        <div class="logo">
            <span><a href="/" title="Home">Blood Rave</a></span>
            <span class="liner">
                Dark Electronic Music<br />
                Napa, California
            </span>
        </div>

        <nav class="mobile">
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

        <div class="socials">
            <ul>
                <li><a href="https://www.instagram.com/jamesrogerx" title="Instagram">Instagram</a></li>
                <li><a href="https://www.twitter.com/blooodrave" title="Twitter">Twitter</a></li>
            </ul>
        </div>

    </div>


</div>