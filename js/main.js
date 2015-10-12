$(document).ready(function() {
    $window = $(window);
    $slide = $('.section');
    winH = $window.height();
    winW = $window.width();
    //$slide.height(winH);
    var browser = get_browser_info();
    $('html').addClass(browser.toLowerCase());

    /* owlCarousel ***********************/
    $("#owl_s1-desk,#owl_s1-res").owlCarousel({

        dots: true,
        loop: true,
        //nav: true,
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

function get_browser_info() {
    var ua = navigator.userAgent,
        tem, M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
    if (/trident/i.test(M[1])) {
        tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
        return 'msie';
    }
    if (M[1] === 'Chrome') {
        tem = ua.match(/\bOPR\/(\d+)/)
        if (tem != null) {
            return 'opera'
        }
    }
    M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
    if ((tem = ua.match(/version\/(\d+)/i)) != null) {
        M.splice(1, 1, tem[1]);
    }
    return M[0];
}
