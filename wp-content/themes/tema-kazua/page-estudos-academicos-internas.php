<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Estudos Acadêmicos Internas
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div id="header-estudos-academicos">
			<a href="<?php echo esc_url( home_url( '/estudos-academicos' ) ); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/06AA-kazua-estudos-academicos.jpg" width="100%" height="auto" alt="" />
			</a>
			</div>				
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="academicos-header">
					<div class="img-destacada">
			<a class="thickbox image" href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 250,180 ), false, '' );echo $src[0];?>">
				<?php if ( ! post_password_required() && ! is_attachment() ) :
					the_post_thumbnail('thumb-academicos');
				endif; ?>
				</a>
					</div>
					<div class="resumo">
					<?php the_excerpt(); ?>
					</div>
				</header>

				<?php if (is_page( 'kazua-de-comunicacao' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-comunicacao', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php } elseif  (is_page( 'kazua-publicacoes-academicas' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-publicacoes', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php } elseif  (is_page( 'kazua-de-estudos-olimpicos' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-estudos-olimpicos', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php } elseif  (is_page( 'envie-sua-proposta' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-envie-proposta', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php } elseif  (is_page( 'kazua-de-filosofia' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-filosofia', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php } elseif  (is_page( 'kazua-de-psicologia' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-psicologia', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php } elseif  (is_page( 'kazua-de-educacao' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-educacao', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php } else { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php } ?>
	
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->

				<?php if ( have_comments() ) : ?>
					<?php comments_template( '', true ); ?>
				<?php else : // or, if we don't have comments:
					if ( ! comments_open() ) : ?>
						<p class="nocomments"></p>
					<?php endif; // end ! comments_open() ?>
				<?php endif; // end have_comments() ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
<?php get_footer(); ?>