


  
jQuery(document).ready(function($) {


    

// new mobile nav way
    
 $('.js--nav-icon').click(function(){
     
		$(this).toggleClass('open');
     
       var nav = $('.main-navigation');
     
     if(nav.hasClass('open-nav')) {
        nav.removeClass('open-nav');
        nav.addClass('close-nav');
        } else {
            nav.removeClass('close-nav');
            nav.addClass('open-nav');
        };
   
     });  
    
});

      
