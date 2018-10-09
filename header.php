<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marta_Lynx
 */




// ----------- Advanced Custom Fields ---------------------/
$hero_text_box_line_1 = get_field('hero_text_box_line_1');
$hero_text_box_line_2 = get_field('hero_text_box_line_2');
$hero_button_text = get_field('hero_button_text');
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">



<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MZCPVCB');</script>
<!-- End Google Tag Manager -->
    

	
<!-- google tag manager end -->
	
	
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZCPVCB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
    




<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'martalynx' ); ?></a>
    


 <?php  if(!is_front_page()) { ?>
    
    
    
    
    
    <!------------ wrapper for Flexbox  and sticky footer----------- -->
    <div class="site-wrapper">
        <!------------ wrapper for Flexbox  and sticky footer----------- -->
        
        <?php } ?>


<div id="header-main"  
   
   
   


    
    
    <?php 
     /*  
     ----- display hero image on front page only
     */
     
     
     
     if(is_front_page() ){ echo ' class="header-image-container" ';} else {echo ' class="header-main-container" ';}
           
           ?>
           >
    
    
    
         
         
    

<div class="header-image">
    
    
  
     <?php  if(is_front_page()) { ?>
    
           <div class="hero-text-box">
              <h1 class="big-heading"><span class="hero-heading-main"><?php echo $hero_text_box_line_1 ?></span>
                  <span class="hero-heading-sub"><?php echo $hero_text_box_line_2 ?></span></h1>
            <div class="hero-btn">
                <a class="btn btn-full" id="myBtn" href="short-stories" ><?php echo $hero_button_text ?></a>
                </div>
                
           </div>

    <?php } ?>
    
    
    
    </div><!--- header image container --->
    
    
      
    
    

	<header id="masthead" class="site-header">
 <?php if(! is_front_page() ){ ?>  <div id="header-top"></div> <?php } ?>
		<div class="site-branding">
			<?php
			the_custom_logo();?>
            
            
            <div class="site-branding__text">
           
				
			
			<?php
			

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
			
        </div><!-- site-branding__text -->
		</div><!-- .site-branding -->

            
            
<!--            NEW NAV BURGER   -->
<div class="navigation-section">
           
    <div class="navigation-main">
       <input type="checkbox" class="navigation__checkbox"  aria-expanded="false" id="navi-toggle">
       <label for="navi-toggle" class="nav__button js--nav-icon">
       <?php esc_html_e( '', 'martalynx' ); ?>
       </label>
       <div class="burger js--nav-icon">
       
       <span ></span>
       <span></span>
       <span></span>
       
        </div>
       
    </div>
       <nav id="site-navigation" class="main-navigation js--main-nav ">
		<!--</button>  -->
            <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
    </nav><!-- #site-navigation -->
       
        
    
    
    
		
		
        </div>
		
	
     
     
     
     
		 
          
          
		
		
    </header><!-- #masthead -->
    

    <!-- ending header main -->
                </div>
<!-- ending header main  -->
	<div id="content" class="site-content  <?php if(is_front_page() ){ echo 'home-page';} 
           
           ?>">
