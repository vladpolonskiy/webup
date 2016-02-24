<?php
/**
 * The theme footer
 * 
 * @package Basic
 */
?>
			</div><!--.site-content-->
			
			<footer id="site-footer" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="head-footer">
							<?php dynamic_sidebar('footer'); ?>
						</div>
						<div class="col-md-12 bottom-footer text-left">
							<span>Все права защищены © <?php echo date('Y'); ?> <a href="#">Basic</a></span>
						</div>
					</div>
				</div>			
			</footer>

		<?php wp_footer(); ?> 
	</body>
</html>