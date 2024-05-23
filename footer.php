<footer>
    <div id="coordinates"></div>
    <div class="attribution">
        <div id="coordinates"></div>
        code by <a href="https://throne.work" title="Throne">Throne</a>
        <!-- <div id="reader"></div> -->
    </div>
</footer>

<?php 
    if ( is_front_page() ) {
        get_template_part('template-parts/announcement-modal');
    }
?>

<script>
    var closeMenu = document.getElementById('close-menu');
    var mobileMenu = document.getElementById('menu-overlay');
    closeMenu.addEventListener('click', function() {
        mobileMenu.style.left = "100%";
        mobileMenu.style.right = "-100%";
    });

    var hamburger = document.getElementById('hamburger');
    hamburger.addEventListener('click', function() {
        mobileMenu.style.left = "6px";
        mobileMenu.style.right = "6px";
    });
</script>

<script>
    var flierLink = document.querySelector(".flier-link");

    jQuery('.flier-link').on('click', function() {

        jQuery('.flier-modal').css('display', 'flex');

        var img = jQuery(this).attr('data-image').value;

        jQuery('.flier-modal-image').attr('src', jQuery(this).attr('data-image'));

    });

    jQuery('.flier-modal').on('click', function(e) {

        if ( !jQuery(e.target).is('img') ) {
            jQuery('.flier-modal').css('display', 'none');
        }
    });
</script>

<?php wp_footer(); ?>
</body>
</html>