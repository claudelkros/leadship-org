<?php
/**
 * Template Name: Who Are We
 *
 *
 * @package Leadship
 */

get_header();
?>

	<div class="page__general">
        <div class="page__general--sidebar">
        <?php dynamic_sidebar('whoarewe'); ?>
        </div>
        <div class="page__space"></div>
		<div class="page__content">

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