jQuery(function () {
	var navbar = window.mainNav;
	
	window.addEventListener('scroll', scrollHandler);

	function scrollHandler(e) {
		if(window.scrollTop > 50) {
			jQuery(navbar).toggleClass('affix-top', 'affix');
		} else {
			jQuery(navbar).toggleClass('affix', 'affix-top');
		}
	}
});