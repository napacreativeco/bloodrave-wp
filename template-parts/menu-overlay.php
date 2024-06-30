<div id="menu-overlay">
    <div id="close-menu">Close</div>
    
    <div class="holder">

        <div class="announcement-text">
            <p><a href="<?php echo get_theme_mod('overlay_announcement_url'); ?>"><?php echo get_theme_mod('overlay_announcement_title'); ?></a></p>
            <p><a href="<?php echo get_theme_mod('overlay_announcement_url'); ?>"><?php echo get_theme_mod('overlay_announcement_description'); ?></a></p>
        </div>

        <div class="logo">
            <a href="/" title="Blood Rave">
                Blood&nbsp;
                <svg width="68" height="134" viewBox="0 0 68 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M68.0075 46.151C68.0075 28.2024 54.0295 13.5275 36.3656 12.3986V0.658691H31.9876V12.3986C14.3237 13.5275 0.345703 28.2024 0.345703 46.151C0.345703 54.0088 3.03033 61.2333 7.52607 66.9757C3.03033 72.7181 0.345703 79.9426 0.345703 87.8053C0.345703 105.754 14.3237 120.429 31.9876 121.558V133.298H36.3656V121.558C54.0295 120.429 68.0075 105.754 68.0075 87.8053C68.0075 79.9475 65.3229 72.723 60.8271 66.9757C65.3229 61.2333 68.0075 54.0088 68.0075 46.151ZM55.0062 25.3215C60.3412 30.6614 63.6345 38.0086 63.6345 46.151C63.6345 52.7131 61.4897 58.7597 57.8676 63.6579C52.2528 58.1462 44.7239 54.5878 36.3705 54.0529V16.7864C43.6343 17.3213 50.1571 20.4722 55.0111 25.3263L55.0062 25.3215ZM31.9876 75.5156C24.7238 74.9806 18.201 71.8297 13.347 66.9757C18.201 62.1266 24.7238 58.9708 31.9876 58.4358V75.5156ZM36.3656 58.4358C43.6294 58.9708 50.1522 62.1217 55.0062 66.9757C50.1522 71.8248 43.6294 74.9806 36.3656 75.5156V58.4358ZM13.3519 25.3215C18.206 20.4723 24.7287 17.3164 31.9926 16.7814V54.048C23.6391 54.5829 16.1102 58.1462 10.4954 63.653C6.86842 58.7597 4.72852 52.7081 4.72361 46.1461C4.72361 38.0037 8.01693 30.6565 13.3519 25.3165V25.3215ZM13.3519 108.63C8.01693 103.29 4.72361 95.9428 4.72361 87.8004C4.72361 81.2384 6.86842 75.1868 10.4954 70.2935C16.1102 75.8052 23.6391 79.3685 31.9926 79.8985V117.165C24.7287 116.63 18.206 113.479 13.3519 108.625V108.63ZM55.0111 108.63C50.1571 113.479 43.6343 116.635 36.3705 117.17V79.9035C44.7239 79.3685 52.2528 75.8052 57.8676 70.2984C61.4946 75.1917 63.6345 81.2433 63.6345 87.8053C63.6345 95.9477 60.3412 103.295 55.0062 108.635L55.0111 108.63Z" fill="white"/>
                </svg>
                Rave
            </a>
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
                <li><a href="https://bloodrave.bandcamp.com" title="Bandcamp">Bandcamp</a></li>
                <li><a href="https://open.spotify.com/artist/4beB8JGjQTVp5g6B4h5rls?si=3Cy_JOoeQeejzgn51pjUvA" title="Spotify">Spotify</a></li>
                <li><a href="https://music.apple.com/ca/artist/blood-rave/1716720416" title="Apple Music">Apple Music</a></li>
                <li><a href="https://www.instagram.com/jamesrogerx" title="Instagram">Instagram</a></li>
                <li><a href="https://www.twitter.com/blooodrave" title="Twitter">Twitter</a></li>
            </ul>
        </div>

    </div>


</div>