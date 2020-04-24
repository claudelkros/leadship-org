<?php
/**
 * Template Name: Who Are We
 *
 *
 * @package Leadship
 */

get_header();
?>

	<div id="" class="whoarewe__general">
        <div class="whoarewe__general--sidebar">
        <?php dynamic_sidebar('whoarewe'); ?>
        </div>
        <div class="whoarewe__space"></div>
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
        <div class="whoarewe__space"></div>
	</div><!-- #primary -->

<?php

get_footer();