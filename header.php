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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'leadship' ); ?></a>
	<header id="masthead" class="site-header" style='background:url("<?php header_image() ?>");background-size:cover;background-position:center;height:100vh'>
<?php elseif(is_home()): ?>
	<body>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'leadship' ); ?></a>
	<header id="masthead" class="site-header">
	
<?php else : ?>
	<body>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'leadship' ); ?></a>
	<header id="masthead" class="site-header">
	
<?php endif; ?>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
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
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'leadship' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary' ,
				'menu_id'        => 'primary-menu',
			) );
			?>
			</nav><!-- #site-navigation -->
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
