<div class="clearfix"></div>
</div><!-- #container -->

	<footer id="bottom">

		<div id="sponsors">
			<h4>Sponsored by:</h4>
			<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
	            <?php dynamic_sidebar( 'footer-widget-area' ); ?>
	        <?php endif; ?>
    	</div>

		<p class="copyright">Copyright &copy; 2012 Clementine Group, LLC.  Privacy Policy | Terms and Conditions</p>

	</footer>

<?php wp_footer(); ?>
</body>
</html>