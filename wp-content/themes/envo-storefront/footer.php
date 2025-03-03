</div><!-- end main-container -->
</div><!-- end page-area -->
<?php if ( is_active_sidebar( 'envo-storefront-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="container-fluid clearfix">
		<div class="container">
			<?php dynamic_sidebar( 'envo-storefront-footer-area' ); ?>
		</div>	
	</div>		
<?php } ?>
<?php do_action( 'envo_storefront_before_footer' ); ?> 
<footer id="colophon" class="footer-credits container-fluid" style="display: none;">
	<div class="container">
		<?php do_action( 'envo_storefront_generate_footer' ); ?> 
		<?php do_action( 'envo_storefront_generate_footer_credits' ); ?> 
	</div>	
</footer>
</div><!-- end page-wrap -->
<?php do_action( 'envo_storefront_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
