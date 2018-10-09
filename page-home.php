<?php
/**
Template Name: Home Page
 */

// ----------- Advanced Custom Fields ---------------------/
$section_2_title = get_field('section_2_title');
$book_title = get_field('book_title');
$book_description = get_field('book_description');

$facebook_link = get_field('facebook_link');
$twitter_link = get_field('twitter_link');
$instagram_link = get_field('instagram_link');



get_header(); ?>

    <div class="home-page-body">

        <div class="header-image">

        </div>
        <!-- end header image   -->

        <section class="section-black-orchid">





            <h2 class="white-text js--show-sticky-nav">
                <?php echo $section_2_title ?>
            </h2>


            <div class="black-orchid-box js--wp-2">




                


                <div class="book-text-wrapper">

                    <p>

                        <?php echo $book_title ?><br><br>

                        <?php echo $book_description ?>



                    </p>


                </div>
                <a class="button-ghost black-orchid-btn  js--wp-4" href="#popup">READ MORE</a>





            </div>
            <!-- end of book text wrapper -->










        </section>




        <section class="section-email-signup">
            <div class="row">
                <div class="section-email-signup-box">
                    <h3>Signup to my Newsletter </h3>


                    <div class="email-box homepage-email">



                        <div role="form" class="wpcf7 contact-form" id="wpcf7-f96-p72-o2" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="#wpcf7-f96-p72-o2" method="post" class="wpcf7-form contact-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="96">
                                    <input type="hidden" name="_wpcf7_version" value="5.0.1">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f96-p72-o2">
                                    <input type="hidden" name="_wpcf7_container_post" value="72">
                                </div>




                                <p><label>
   
   
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="21" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"  placeholder="Your email" id="email-input-homepage"></span> </label></p>
                                <p><input type="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit btn btn-full" id="email-signup-homepage"><span class="ajax-loader"></span></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>





                        </div>



                    </div>

                </div>
            </div>

        </section>


        <section class="section-follow-me">


            <h2>Follow Me </h2>




            <div class="social-links">


                <a href="<?php echo $facebook_link ?>" target='_blank'><?php echo martalynx_get_svg(array('icon' => 'facebook', 'fallback' => true)); ?> </a>

                <a href="<?php echo $twitter_link ?>" target='_blank'><?php
                echo martalynx_get_svg(array('icon' => 'twitter', 'fallback' => true));?> </a>

                <a href="<?php echo $instagram_link ?>" target='_blank'><?php
                echo martalynx_get_svg(array('icon' => 'instagram', 'fallback' => true));?> </a>










            </div>

        </section>





    </div>
    <!-- Homepage body -->



    <?php

get_footer();