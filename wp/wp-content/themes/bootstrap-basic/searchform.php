<?php
/**
 * Template for displaying search form in bootstrap-basic theme
 * 
 * @package bootstrap-basic
 */
?>
<form role="search" method="get" class="search-form form" action="<?php echo esc_url(home_url('/')); ?>">
	<label for="form-search-input" class="sr-only"><?php _ex('Search for', 'label', 'bootstrap-basic'); ?></label>
	<div class="input-group fa fa-search fa-1x">
		<input type="search" id="form-search-input" class="form-control" placeholder="" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
		<span class="input-group-btn">
			<i class="fa fa-search"></i>
		</span>
	</div>
</form>