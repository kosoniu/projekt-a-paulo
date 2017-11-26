<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php do_action( "wp_enqueue_styles" ) ?>


	<?php wp_head(); ?>
</head>

	<div class="hamburger hamburger--collapse">
	  <div class="hamburger-box">
	    <div class="hamburger-inner"></div>
	  </div>
	</div>

	<div class="menu">
			<ul>

				<?php wp_nav_menu(
				  array(
				    'theme_location' => 'header-menu'
				  )
				); ?>
			</ul>
	</div>
