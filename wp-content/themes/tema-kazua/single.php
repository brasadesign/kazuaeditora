<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" class="fundo-blog" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

					<?php if ( have_comments() ) : ?>
					<?php comments_template( '', true ); ?>
					<?php else : // or, if we don't have comments:
					if ( ! comments_open() ) : ?>
						<p class="nocomments"></p>
					<?php endif; // end ! comments_open() ?>
				<?php endif; // end have_comments() ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
	<?php get_sidebar('blog'); ?>
	</div>
<?php get_footer(); ?>
