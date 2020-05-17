$(document).ready(function(){
  $('.js--section-map').waypoint(function(direction){
        if (direction == "down"){
            $('nav').addClass('sticky');
        }
        else{
            $('nav').removeClass('sticky');
        }
    });
});


    /* ScrollReveal().reveal('.hero',{delay:300, duration:1500});
    ScrollReveal().reveal('.headline',{delay:300, duration:1000});
    ScrollReveal().reveal('.tagline',{delay:600, duration:2000});
    ScrollReveal().reveal('.punchline',{delay:1200, duration:2000});
    ScrollReveal().reveal('.widget',{delay:1200,interval:500}); */
/* Mobile navigation */
    $('.js--nav-icon').click(function() {
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');
        
        nav.slideToggle(200);
        
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
        } 
        else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
        }        
    });


/* var waypoints = $('#handler-first').waypoint(function(direction) {
  notify(this.element.id + ' hit 25% from top of window') 
}, {
  offset: '25%'
}) */
