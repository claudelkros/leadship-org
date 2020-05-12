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
		<main id="main" class="main-content">
			<div class="title-descript">
				<img src="<?= get_template_directory_uri()?>/assets/image/b.jpg" alt="">
				<h2 class="text-content">THE LAST POST</h2>
			</div>
			<div class="spacing" style="padding: 3%;"></div>
			<div class="front__page--posts" >
				
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
							<div class="front__page--post--list ">

								<div class="entry-content" itemprop="description">
									<?php the_post_thumbnail(); ?>
										<div class="text-content">
											<?php
											the_title(
												sprintf(
													'<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark" itemprop="url">',
													esc_url( get_permalink() )
												),
												'</a></h2>'
											);
											
					
											?>
										</div>
										<div class="category categories--color">
											<?php echo get_the_category_list(); ?>
										</div>
										
									<?php //the_excerpt(); ?>
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
		<div class="overlay">
			<div class="what__we__do" style='background:url("<?= get_template_directory_uri() ?>/assets/image/children.jpeg");background-origin: unset;background-repeat: no-repeat;background-size: 627px;background-position: right;'>
				
				<div class="spacing" style="padding: 3%;"></div>
				<div class="what__we__do--description">
					<p style="width:60%">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. 
						A unde laborum rerum, repudiandae cumque reiciendis sint. Distinctio nemo numquam laborum, 
						odio dolore doloremque quisquam laboriosam quaerat fugiat eveniet id eligendi.
					</p>
					<p style="width:45%">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. 
						A unde laborum rerum, repudiandae cumque reiciendis sint. Distinctio nemo numquam laborum, 
						odio dolore doloremque quisquam laboriosam quaerat fugiat eveniet id eligendi.
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					</p>
				</div>
				<div class="what__we__do--title" style="color:#FFF;position: absolute;background: #00000087;right: 0;width: 30%">
					<h2>WHAT WE LOVE TO DO </h2>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
