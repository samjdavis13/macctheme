jQuery(document).ready(function($) {

	var nav = $('.nav')
	var feature = $('.feature');
	var topButton = $('#toTop');
	var body = $('body');

	if ( $(location).attr('href') == 'http://macc.nsw.edu.au/welcome/' || $(location).attr('href') == 'http://macc.nsw.edu.au/welcome/design-an-ad/' ) {
		$('#home-link').addClass('current-menu-item');
	};

	if  ( $('#subnav li').length ) {
		// If subnav exists add class to body.
		body.addClass('wsubnav');
	};

	$(window).scroll(function() {
		var  windowpos = $(window).scrollTop();

		if (windowpos >= 50) {
			$('#navlogo').addClass('move');
		} 

		if (windowpos >= feature.outerHeight() + nav.outerHeight() - 220) {
			topButton.addClass('appear');
			$('nav ul').addClass('right-align');
			$('#navlogo').addClass('appear');
			$('#home-link').addClass('hide');

		} else {
			topButton.removeClass('appear');
			$('nav ul').removeClass('right-align');
			$('#navlogo').removeClass('appear');
			$('#navlogo').removeClass('move');
			$('#home-link').removeClass('hide');
		}
	});

	$("#toTop").click(function () {
	   $("html, body").animate({scrollTop: 0}, 1000);
	});

	$(function() {
	    $('.slider').unslider({
			speed: 500,               //  The speed to animate each slide (in milliseconds)
			delay: 5000,              //  The delay between slide animations (in milliseconds)
			complete: function() {},  //  A function that gets called after every slide animation
			keys: true,               //  Enable keyboard (left, right) arrow shortcuts
			dots: true,               //  Display dot navigation
			fluid: false              //  Support responsive design. May break non-responsive designs
		});
	});

});