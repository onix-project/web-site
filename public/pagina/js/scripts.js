/*
Author       : Theme_ocean.
Template Name: Fury - Product Landing Page
Version      : 1.0
*/
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
		/*PRELOADER JS*/
		$(window).on('load', function() { 
			$('.status').fadeOut();
			$('.preloader').delay(350).fadeOut('slow'); 
		}); 
		/*END PRELOADER JS*/		
		
		/*START MENU JS*/
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

			$(window).scroll(function() {
			  if ($(this).scrollTop() > 100) {
				$('.indecadores-top').removeClass('slideOutUp').addClass('slideInDown').show();
				$('.menu-top').addClass('menu-shrink');
				$('#img-logo').attr('src', $imagen1);
			  } else {
				$('.indecadores-top').removeClass('slideInDown').addClass('slideOutUp');
				setTimeout(() => {
					if($('.indecadores-top').hasClass('slideOutUp')){
						$('.indecadores-top').hide();
					}
				}, 350);
				$('.menu-top').removeClass('menu-shrink');
				$('#img-logo').attr('src', $imagen2);
			  }
			});
			
			$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
			});				
		/*END MENU JS*/ 							
		
		/*START VIDEO JS*/
		$('.video-play').magnificPopup({
            type: 'iframe'
        });
		/*END VIDEO JS*/

		/* START ABOUT JS */
		 $("#about-slider").owlCarousel({
				items:1,
				itemsDesktop:[1199,1],
				itemsDesktopSmall:[979,1],
				itemsTablet:[768,1],
				itemsMobile:[600,1],
				pagination:true,
				navigation:false,
				slideSpeed:1000,
				autoPlay:false
			});
		/* END ABOUT JS */
		
		/* START PRODUCTS JS */
		 $("#product-slider").owlCarousel({
				items:3,
				itemsDesktop:[1199,3],
				itemsDesktopSmall:[979,3],
				itemsTablet:[768,2],
				itemsMobile:[600,1],
				pagination:true,
				navigation:false,
				slideSpeed:1000,
				autoPlay:false
			});
		/* END PRODUCTS JS */
		
		/* START TESTIMONIAL JS */
		 $("#testimonial-slider").owlCarousel({
				items:3,
				itemsDesktop:[1199,2],
				itemsDesktopSmall:[979,2],
				itemsTablet:[768,2],
				itemsMobile:[600,1],
				pagination: false,
				navigation:true,
				navigationText:["",""],
				slideSpeed:1000,
				autoPlay:false
			});
		/* END TESTIMONIAL JS */	

		/*START PARTNER LOGO*/
		$('.partner').owlCarousel({
		  autoPlay: 5000, //Set AutoPlay to 3 seconds
		  items : 5,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3]
		});
		/*END PARTNER LOGO*/		
		
	}); 	
	
	/* START PARALLAX JS */
	(function () {

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		 
		} else {
			$(window).stellar({
				horizontalScrolling: false,
				responsive: true
			});
		}

	}());
	/* END PARALLAX JS  */	
	
	/*START ANIMATION JS*/
	  AOS.init();
	/*END ANIMATION JS*/	
				
})(jQuery);


  

