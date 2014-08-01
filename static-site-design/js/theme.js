$(function(){

	// Ensure that the correct nav is displaying for that size
	function showCorrectNav(){
		var $width = $(window).width();
		if ($width < 768) {
			$('#large-nav').addClass('hide');
			$('#mobile-nav').removeClass('hide');
		} else {
			$('#large-nav').removeClass('hide');
			$('#mobile-nav').addClass('hide');
		}
		$('#mobile-menu-items').hide();
	}
	showCorrectNav();
	$(window).resize(showCorrectNav);

	// Menu Toggler
	$('#menu-button').click(function(){
		$('#mobile-menu-items').toggle(150);
	});

});