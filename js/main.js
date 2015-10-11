$(document).ready(function() {
   

 /* owlCarousel ***********************/
  $("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      


 
});
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false


   /*End owlCarousel ***********************/
  var $slides = $('#slides-2');
  $slides.superslides({
            hashchange: false
        });
/*
   $(function() {
   
	});
*/


});
