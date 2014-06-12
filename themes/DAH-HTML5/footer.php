		</div>  <!-- end content area -->
			<!-- footer -->
			<footer class="footer" role="contentinfo">
			<div class="grid">
				<div class="grid-80">
					<?php wp_nav_menu( array('menu' => 'footer navigation' )); ?>
				</div>
				<div class="grid-30">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/art/emya-logo.svg" alt="Logo" width="100%" class="logo-img">
					</figure>
				</div>
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10932812-2', 'dah-bremerhaven.de');
  ga('send', 'pageview');

</script>

		<script src="<?php echo get_template_directory_uri(); ?>/js/uisearch.js"></script>
      	<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    	<script>
      		new UISearch( document.getElementById( 'sb-search' ) );
    	</script>
	
	</body>
</html>