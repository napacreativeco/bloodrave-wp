<?php
/* Template name: Contact */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<div class="page-content <?php echo strtolower(get_the_title()); ?>">

    <div class="wrapper">
        <ul class="contact-list">
            <li>
                <div class="left">
                    <h2>Booking</h2>
                </div> 
                <div class="right">
                    <p>contact<x>@</x>throne.work</p>
                </div>
            </li>
            <li>
                <div class="left">
                    <h2>Music</h2>
                </div> 
                <div class="right">
                    <a href="https://open.spotify.com/artist/4beB8JGjQTVp5g6B4h5rls?si=3Cy_JOoeQeejzgn51pjUvA" title="Spotify">Spotify</a>
                    <a href="https://bloodrave.bandcamp.com/" title="Bandcamp">Bandcamp</a>
                    <a href="https://music.apple.com/ca/artist/blood-rave/1716720416" title="Apple Music">Apple Music</a>
                </div>
            </li>
            <li>
                <div class="left">
                    <h2>Social</h2>
                </div> 
                <div class="right">
                    <a href="https://www.instagram.com/jamesrogerx" title="Instagram">Instagram</a>
                    <a href="https://www.twitter.com/blooodrave" title="Twitter">Twitter</a>
                </div>
            </li>
        </ul>
    </div>

</div>

<?php get_footer(); ?>