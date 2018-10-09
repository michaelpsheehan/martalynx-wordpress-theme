<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marta_Lynx
 */

get_header(); ?>
    
    <?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->
			
<?php 
else: 
get_template_part( 'template-parts/content', 'none' );
return;

			
			endif; ?>
			
			

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<?php if ( have_posts() ) : ?>
	

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-short-stories', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
