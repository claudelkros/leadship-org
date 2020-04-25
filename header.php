<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leadship
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php if(is_front_page()): ?>
	<body <?php body_class(); ?>>
<?php elseif(is_home()): ?>
	<body>
<?php else : ?>
	<body>
<?php endif; ?>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			// if ( is_front_page() && is_home() ) :
			// 	?>
			<!-- 	<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
			// 	<?php
			// else :
			// 	?>
			// 	<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p>
			// 	<?php
			// endif; ?> -->
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary' ,
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'navlinks'
				) );
				?>
			</nav><!-- #site-navigation -->
			<div class="hamburger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div><!-- .site-branding -->

		

		<?php
			$leadship_description = get_bloginfo( 'description', 'display' );
			if ( $leadship_description || is_customize_preview() AND is_front_page()) :
				?>
				<div class="site-description">
					<div class="primary"></div>
					<div class="center" style="display:flex">
						<div class="typing"><?php echo $leadship_description; /* WPCS: xss ok. */ ?> </div>
						
					</div>
					<div class="second"></div>
				</div>
			<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
