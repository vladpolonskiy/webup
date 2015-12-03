jQuery(function () {

	var navbar = window.mainNav;

	jQuery(window).scroll(function (e) {
		if(jQuery(document).scrollTop() > 50) {
			jQuery(navbar).removeClass('affix-top');
			jQuery(navbar).addClass('affix');
		} else {
			jQuery(navbar).removeClass('affix');
			jQuery(navbar).addClass('affix-top');
		}
	});

	

	jQuery('.navbar-default .nav > li').click(function() {
		jQuery('.navbar-default .nav > li').removeClass('current');
		jQuery(this).addClass('current');
	});

	//Search toggle
	jQuery('.search-form').click(function() {
		if(!jQuery(this).hasClass('clicked')) {
			jQuery(this).addClass('clicked');
			jQuery('#form-search-input').focus();
		}
	});

	jQuery('.search-form').focusout(function() {
		jQuery(this).removeClass('clicked');
	});
});