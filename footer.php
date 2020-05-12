<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leadship
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer__social ">
			<li>facebook</li>
			<li>linkedin</li>
			<li>youtube</li>
		</div><hr style="margin: 10px">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'leadship' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'leadship' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'leadship' ), 'leadship', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
  AOS.init();
</script>
</body>
</html>
