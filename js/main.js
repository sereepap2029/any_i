$(document).ready(function() {
    $window = $(window);
    $slide = $('.section');
    winH = $window.height();
    winW = $window.width();
    //$slide.height(winH);

    /* owlCarousel ***********************/
    $("#owl-demo").owlCarousel({

        dots: true, 
        loop: true,
        //singleItem: true,
        items: 1,







    });

    // "singleItem:true" is a shortcut for:
    // items : 1, 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false


    /*End owlCarousel ***********************/
    /* Superslide ***********************/
    var $slides = $('#slides-2');
    Hammer($slide[1]).on("swipeleft", function(e) {
        $('#slides-2').data('superslides').animate('next');

    });

    Hammer($slide[1]).on("swiperight", function(e) {
        $('#slides-2').data('superslides').animate('prev');
    });

    $slides.superslides({
        hashchange: false,
        pagination: true,
        //play: 2000,
    });
    /*End Superslide ***********************/
    /*
       $(function() {
       
      });
    */


});
