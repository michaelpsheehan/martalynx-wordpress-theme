


// //  -------------------------------------------  Get elements from the dom -------------------------------------------
      
const navBurger = document.querySelector('.burger.js--nav-icon');

function navBurgerToggle(e) {
    

    // toggles nav burger icon open and closed
    this.classList.toggle('open');

    const nav = document.querySelector('.main-navigation');

// drops down the main navigation menu links on click
if(nav.classList.contains('open-nav')) {
    
        nav.classList.remove('open-nav')
        nav.classList.add('close-nav')


    } else {
    
        nav.classList.remove('close-nav');
        nav.classList.add('open-nav');
    }

    
}

navBurger.addEventListener('click', navBurgerToggle);



    
