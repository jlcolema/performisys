<?php
/**
 * Template Name: Showcase Template
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 *
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary" class="showcase">

			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php
					if ( '' != get_the_content() )
						get_template_part( 'content', 'intro' );
				?>

				<?php endwhile; ?>

			</div><!-- #content -->

		</div><!-- #primary -->

<?php get_footer(); ?>