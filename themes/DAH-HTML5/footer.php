		</div>  <!-- end content area -->
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="col col75">
					<?php wp_nav_menu( array('menu' => 'footer navigation' )); ?>
				</div>
				<div class="col col25">
					<a href="<?php echo home_url(); ?>/museum#Auszeichnungen">
						<img src="<?php echo get_template_directory_uri(); ?>/art/emya-logo.svg" alt="Logo" class="logo-img">
					</a>
				</div>
				<div class="col col100">
				<p class="copyright">
					&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>
				</p>
				</div>
			</footer>

		
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		
		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>

		<script src="<?php echo get_template_directory_uri(); ?>/js/uisearch.js"></script>
      	<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
    	<script>
      		new UISearch( document.getElementById( 'sb-search' ) );
    	</script>
	
	</body>
</html>