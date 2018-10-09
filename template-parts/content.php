<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marta_Lynx
 */

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>






        <div class="post__content">
            <header class="entry-header">
                <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            
            ?>

                    <?php 
    
    if( has_post_thumbnail() ) { ?>
                    <figure class="featured-image index-image">
                        <a href=" <?php echo esc_url( get_permalink() )?>" rel="bookmark">
                            <?php
            the_post_thumbnail('martalynx-index-img');
         ?>

                        </a>
                    </figure>
                    <!-- feauted-image full-bleed      -->


                    <?php  } ?>





                    <?php
            if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php martalynx_posted_on(); ?>
                        </div>
                        <!-- .entry-meta -->
                        <?php
            endif; ?>
            </header>
            <!-- .entry-header -->






            <div class="entry-content">
                <?php
               
// ----- displays an except of the post
            
            the_excerpt();
                     

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'martalynx' ),
                    'after'  => '</div>',
                ) );
            ?>
            </div>
            <!-- .entry-content -->


            <div class="continue-reading">
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

                <a href=" <?php echo esc_url( get_permalink() )?>" rel="bookmark" class="btn btn--book">
                    <?php echo $read_more_link; ?>
                </a>

            </div>
            <!--  continue reading      -->


        </div>
        <!-- .post__content -->

    </article>
    <!-- #post-<?php the_ID(); ?> -->
