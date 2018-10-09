<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marta_Lynx
 */

?>

<section class="books-section single-book-page"><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="title--books-page">', '</h1>' );
		else :
			the_title( '<h2 class="title--books-page"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php martalynx_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
    
    <section class="post-content">
    
    
    
    
    
    <?php 
    if( has_post_thumbnail() ) { ?> 
    
    
    
    <figure class="book-cover-img-single">
        <?php
        the_post_thumbnail('martalynx-index-book-cover');
        ?>    
    </figure>
    <?php
    }
        
    ?>
        
   <div class="books-single">
   
    
    <section class="book-excerpt-text">
  
    
<!--    checks if sidebar is not active -->
    <?php 
        if( !is_active_sidebar( 'sidebar-1' ) ) :
        
    ?>
<!--   adds divs to wrap the content if no sidebar-->
    <div class="post-content__wrap">
    <div class="post-content__body">
    
    <?php 
    endif; ?>
    
   
   <div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'martalynx' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'martalynx' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php martalynx_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	<?php 
        if( !is_active_sidebar( 'sidebar-1' ) ) :
        
    ?>
    
        </div> <!-- .post-content-body -->
        </div> <!-- .post-content-wrap -->
	<?php 
        endif;
        ?>
	
	
	<!--   -----------get sharing buttons------------->
   <h3 class="share-buttons-title">Share This Story</h3>
    
    <?php
	get_template_part( 'template-parts/sharing', /* get_post_type(), */  'buttons' );
?>
	
	<?php
    martalynx_post_navigation();
                    
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
    
    
    ?>
    

   
   
   
    
    </section>
    
    
    <?php get_sidebar(); 
    ?>
    
    
	



<!-- #post-<?php the_ID(); ?> -->
