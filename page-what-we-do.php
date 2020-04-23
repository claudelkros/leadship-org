<?php
/**
 * Template Name: What we do
 *
 *
 * @package Leadship
 */

get_header();
?>

	<div id="" class="whatwedo__general">
        <div class="whatwedo__general--sidebar">
        <?php dynamic_sidebar('whatwedo'); ?>
        </div>
        <div class="whatwedo__space"></div>
		<div id="content" class="content" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">

            <?php
            while ( have_posts() ) :
                the_post();

                the_content();

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </div><!-- #main -->
        <div class="whatwedo__space"></div>
	</div><!-- #primary -->

<?php

get_footer();