jQuery(function () {
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