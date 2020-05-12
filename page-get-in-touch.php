<?php
/**
 * Template Name: Get in touch
 *
 *
 * @package Leadship
 */

get_header();
?>

	<div id="" class="page__general">
        <div class="page__general--sidebar">
            <?php dynamic_sidebar('getintouch'); ?>
        </div>
        <div class="pageh__space"></div>
		<div id="content" class="main-content">

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
        <div class="getintouch__space"></div>
	</div><!-- #primary -->

<?php

get_footer();