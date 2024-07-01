<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="description" content="dark electronic music">
	<meta name="keywords" content="Techno, Goth, Darkwave, EBM">
	<meta name="author" content="Blood Rave">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico">
	<title><?php wp_title( '|', true, 'right' ); ?> <?php if (!is_front_page()) { ?> Blood Rave <?php } ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
	<script type="module" src="https://cdn.jsdelivr.net/npm/@google/model-viewer-effects/dist/model-viewer-effects.min.js"></script>
	<script async src="https://ga.jspm.io/npm:es-module-shims@1.7.1/dist/es-module-shims.js"></script>
	<script type="importmap">
		{
			"imports": {
				"three": "https://cdn.jsdelivr.net/npm/three@^0.164.1/build/three.module.min.js"
			}
		}
	</script>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div class="grain"></div>

	<?php if ( is_front_page() ) { ?>
	<?php } else { ?>
		<?php get_template_part('template-parts/navbar'); ?>
	<?php } ?>

	<?php get_template_part('template-parts/model'); ?>

	<?php get_template_part('template-parts/menu-overlay'); ?>

	<link rel="stylesheet" href="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
	<script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
	<script>
		const cursor = new MouseFollower({
			el: null,
			container: document.body,
			className: 'mf-cursor',
			innerClassName: 'mf-cursor-inner',
			textClassName: 'mf-cursor-text',
			mediaClassName: 'mf-cursor-media',
			mediaBoxClassName: 'mf-cursor-media-box',
			iconSvgClassName: 'mf-svgsprite',
			iconSvgNamePrefix: '-',
			iconSvgSrc: '',
			dataAttr: 'cursor',
			hiddenState: '-hidden',
			textState: '-text',
			iconState: '-icon',
			activeState: '-active',
			mediaState: '-media',
			stateDetection: {
				'-pointer': 'a,button',
				'-hidden': 'iframe'
			},
			visible: true,
			visibleOnState: false,
			speed: 0.85,
			ease: 'expo.out',
			overwrite: true,
			skewing: 0,
			skewingText: 2,
			skewingIcon: 2,
			skewingMedia: 2,
			skewingDelta: 0.001,
			skewingDeltaMax: 0.15,
			stickDelta: 0.15,
			showTimeout: 20,
			hideOnLeave: true,
			hideTimeout: 300,
			hideMediaTimeout: 300
		});
	</script>