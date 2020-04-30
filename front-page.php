<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Leadship
 */

get_header();
?>

	<div id="primary " class="content-area front__page--background">
		<main id="main" class="site-main">
			<div class="front__page--post">
				
				<?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
				<?php if (have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text">
								<?php single_post_title(); ?>
							</h1>
						</header>
					<?php endif; ?>


						<?php
						// Start the loop.
						while ( $the_query->have_posts() ) :
							$the_query->the_post(); ?>
							<div class="front__page--post--list">

								<div class="entry-content" itemprop="description">
									<?php the_post_thumbnail(); ?>
										<div class="text-content">
											<?php
											/*
											* Include the Post-Format-specific template for the content if it's a post, otherwise include the Post-Type-specific template.
											*/
											// get_template_part(
											// 	'template-parts/post/item',
											// 	get_post_type() !== 'post' ? get_post_type() : get_post_format()
											// );
											the_title(
												sprintf(
													'<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark" itemprop="url">',
													esc_url( get_permalink() )
												),
												'</a></h2>'
											);
					
					
											?>
										</div>
									<?php the_excerpt(); ?>
								</div><!-- .entry-content -->
							</div>
							<?php
							// End the loop.
						endwhile;

						?>
					</div>

					<?php
					// Previous/next page navigation.
					the_posts_pagination(
						array(
							'prev_text'          => __( 'Previous page', 'genese' ),
							'next_text'          => __( 'Next page', 'genese' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'genese' ) . ' </span>',
						)
					);

					// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
