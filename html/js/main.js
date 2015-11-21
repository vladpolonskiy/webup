(function($) {
	jQuery(document).ready(function () {
		jQuery('.logo-toggle').click(function () {
			jQuery(this).toggleClass('active');
			jQuery('.side-nav').toggleClass('active');
		});
	});
})(jQuery);