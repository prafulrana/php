jQuery(document).ready(function ($) {

	function onePageNav(){
		/*-----------------------------------------------------------------------------------*/
		/*	Smooth Scroll
		/*  Thanks to: https://github.com/davist11/jQuery-One-Page-Nav
		/*-----------------------------------------------------------------------------------*/
		$(".nav").onePageNav({
			filter: ':not(.external)',
			changeHash: false,
			scrollSpeed: 1500,
		});
	}

	onePageNav();
	
	function smoothScroll(){

		// Scrolls to RSVP section
		$(".js-scroll").click(function() {
			$('html, body').animate({
				scrollTop: $("#rsvp").offset().top
			}, 2000);
			return false;
		});

		return false;
	}

	smoothScroll();

});

jQuery(document).foundation(); // Initialize Foundation