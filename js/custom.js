/*
  * @package 
  * @subpackage template name HTML
  * 
  * Template Scripts
  * Created by themeturn
  
  1. Fixed header
  2. Site search
  3. Main slideshow
  4. Owl Carousel
      a. Testimonial
      b. Clients
      c. Team
  5. Back to top
  6. Skills
  7. BX slider
      a. Blog Slider
      b. Portfolio item slider
  8. Isotope
  9. Animation (wow)
  10. Flickr
  
*/


jQuery(function($) {
  "use strict";

   $('.navigation').singlePageNav({
        currentClass: 'active',
        changeHash: true,
        scrollSpeed: 750,
        offset: 0,
        filter: ':not(.external)',
        easing: 'swing',

    });

    $.noConflict();
     $('.nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });

    
 
	/* -------- Isotope Filtering -------- */
		var $container = $('#isotope-gallery-container');
		var $filter = $('.filter');
		$(window).load(function () {
		// Initialize Isotope
		$container.isotope({
			itemSelector: '.gallery-item-wrapper'
		});
		$('.filter a').click(function () {
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			return false;
		});
		$filter.find('a').click(function () {
			var selector = $(this).attr('data-filter');
			$filter.find('a').parent().removeClass('active');
			$(this).parent().addClass('active');
		});
		});
		$(window).smartresize(function () {
		$container.isotope('reLayout');
		});
		// End Isotope Filtering
		$('.gallery-zoom').magnificPopup({ 
				type: 'image'
				// other options
			});


});