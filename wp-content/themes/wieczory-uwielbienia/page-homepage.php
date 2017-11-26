<?php /* Template Name: Strona główna*/ ?>
<?php get_header(); ?>

<body class="mainpage">

	<div class="mainpage-wrapper">
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php the_field('logo'); ?>" /></a></h1>

		<h2><?php the_field('site_header'); ?></h2>

	</div>

<video poster="../public/img/KOS_6442.jpg" id="bgvid" playsinline autoplay muted loop>
		<!-- <source src="<?php the_field('background-video'); ?>" type="video/webm"> -->
		<source src="<?php the_field('background-video'); ?>" type="video/mp4">
</video>




<?php get_footer(); ?>
