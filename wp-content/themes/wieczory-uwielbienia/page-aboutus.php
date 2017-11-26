<?php /* Template Name: O nas */ ?>
<?php get_header(); ?>

<body>

	<section class="page_wrapper default">
		<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php echo get_template_directory_uri(); ?>/public/img/logo_black.png" /></a></h2>
		<div class="page_wrapper_inner">

			<div class="photo_wrapper" style="background-image: url(<?php the_field('photo'); ?>); ">
			</div>

			<div class="text_wrapper" style="background-color: <?php the_field('background_color'); ?>; color: <?php the_field('text_color'); ?>">
				<?php the_field('content'); ?>
			</div>

		</div>

	</section>



	<h1><?php the_field('site_header'); ?></h1>


<?php get_footer(); ?>
