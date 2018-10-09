<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marta_Lynx
 */

?>

<section class="books-section">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
    
    
    
    <div class="books-wrapper">
    <div class="books-wrapper-flexbox">
    <?php 
    if( has_post_thumbnail() ) { ?> 
    
    
    
    <figure class="" id="book-cover-img">
        <?php
       the_post_thumbnail('martalynx-archive-book-cover');
        ?>    
    </figure>
    <?php
    }
        
    ?>
        
   <div class="books-wrapper--text books-flex-item">
   
    
    <section class="book-excerpt-text">
    <h4 class="books--description">Description</h4>
    
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
			 the_excerpt(); 
                 
                     wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'martalynx' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        
        
        <div >
           <?php 
            $read_more_link = sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Read More<span class="screen-reader-text"> "%s"</span>', 'martalynx' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                );
            ?>
            
            <a href=" <?php echo esc_url( get_permalink() )?>" rel="bookmark"  class="btn btn--book">
           <?php echo $read_more_link; ?>
            </a>
            
        </div><!--  continue reading      --> 
         
        
        
        

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
	
	
	
	
    
    </section>
    
                     
                     
                     
                      </div>
        </div>
    </div>
    
    
    <?php get_sidebar(); 
    ?>
    
    
	
</article>

</section>
<!-- #post-<?php the_ID(); ?> -->
