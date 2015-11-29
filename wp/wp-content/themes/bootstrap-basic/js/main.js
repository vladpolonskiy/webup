jQuery(function () {
	var navbar = window.mainNav;
	
	window.addEventListener('scroll', scrollHandler);

	function scrollHandler(e) {
		if(jQuery(document).scrollTop() > 50) {
			jQuery(navbar).removeClass('affix-top');
			jQuery(navbar).addClass('affix');
		} else {
			jQuery(navbar).removeClass('affix');
			jQuery(navbar).addClass('affix-top');
		}
	}

	jQuery('.navbar-default .nav > li').click(function() {
		jQuery('.navbar-default .nav > li').removeClass('current');
		jQuery(this).addClass('current');
	});
});