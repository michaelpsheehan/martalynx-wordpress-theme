<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marta_Lynx
 */




// ----------- Advanced Custom Fields ---------------------/
$facebook_link = get_field('facebook_link', 7);
$twitter_link = get_field('twitter_link', 7);
$instagram_link = get_field('instagram_link', 7);


?>

    </div>

    <!-- #content ------>


    <footer id="colophon" class="site-footer">

        <div class="footer-wrapper">
            <div class="row">
                <div class="col span-1-of-1">
                    <nav>
                        <?php
                
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
                    </nav>
                    <!-- #site-navigation -->
                </div>
            </div>

            <div class="footer-social-wrapper">
                <div class="row">
                    <nav class="social-menu">
                        <a href="<?php echo $facebook_link ?>" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'facebook', 'fallback' => true)); ?> </a>
                        <a href="<?php echo $twitter_link ?>" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'twitter', 'fallback' => true));?> </a>
                        <a href="<?php echo $instagram_link ?>" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'instagram', 'fallback' => true));?> </a>

                    </nav>
                </div>

                <?php get_sidebar('footer'); ?>

                <div class="row copyright-text">
                    <p>
                        Copyright &copy;
                        <?php echo date('Y');  ?> by Marta Lynx. All rights reseved
                    </p>

                </div>


            </div>
        </div>
        <!---- End Of my footer -->



        <!--	----------------------------	Popup newsletter signup ----------------------------------------------------------------- -->

        <div class="popup" id="popup">
            <div class="popup__content">

                <h3>Join my Newsletter</h3>
                <a href="" class="popup__close">&times</a>

                <p class="popup-text">to stay updated about my new books and short stories</p>
                <div class="email-box">

                    <!--   Contact form 7 integration -->

                    <div role="form" class="wpcf7 contact-form" id="wpcf7-f96-p72-o2" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/email-signup-test/#wpcf7-f96-p72-o2" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="96">
                                <input type="hidden" name="_wpcf7_version" value="5.0.1">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f96-p72-o2">
                                <input type="hidden" name="_wpcf7_container_post" value="1794">
                            </div>
                            <p><label>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"  placeholder="Your email" id="popup-email-input"></span> </label></p>
                            <p><input type="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit btn btn-full btn-popup " id="btn-popup"><span class="ajax-loader"></span></p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- end popup div -->

            </aside>
            <!-- #secondary -->

    </footer>
    <!-- #colophon -->
    

<!-- causing error header main was ending here -->
<!-- </div> -->
<!-- causing error header main was ending here -->
    
    
    
    
    
    
    
    
    
    
    <!-- #page -->
    


    <?php wp_footer(); ?>
    
    
    
    <?php  if(!is_front_page()) { ?>
    
    <!------------- site wrapper for flexbox and stiky footer end -------------->
    </div>
    <!------------- site wrapper -------------->
    
    <?php } ?>

    </body>

    </html>
