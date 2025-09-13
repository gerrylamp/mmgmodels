<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">

    <?php if ( ! is_front_page() ) : ?>
        <style>
            #header { position: static !important; inset: auto; }
            .fixheadpos { display: none; }
        </style>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body>

	<header id="header" class="section_con">
		<div class="wrapper">
			<div class="header_con">
				<figure class="main_logo">
					<a href="<?php echo get_home_url(); ?>"></a>
					<img src="<?php echo get_template_directory_uri(); ?>/images/mmg_logo_top_tm.png" alt="mmg models">
				</figure>

				<!-- Burger button -->
				<button class="burger" aria-label="Menu">
					<span></span>
					<span></span>
					<span></span>
				</button>

				<nav class="main_nav">
					<button class="close_btn">&times;</button>
					<?php wp_nav_menu( array('theme_location' => 'primary' ) ); ?>
				</nav>

				<div class="social_icons">
					<figure><a href="https://www.facebook.com/"></a><img src="<?php echo get_template_directory_uri(); ?>/images/icons/fb-icon.webp" alt="facebook"></figure>
					<figure><a href="https://www.x.com/"></a><img src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter-icon.webp" alt="twitter"></figure>
					<figure><a href="https://www.instagram.com/"></a><img src="<?php echo get_template_directory_uri(); ?>/images/icons/insta-icon.webp" alt="instagram"></figure>
				</div>
			</div>
		</div>
	</header>

	<div class="fixheadpos"></div>