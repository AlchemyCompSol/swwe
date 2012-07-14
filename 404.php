<?php get_header(); ?>
<div id="content">

	<h1><?php _e( 'Not Found', 'starkers' ); ?></h1>
		<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'starkers' ); ?></p>
		<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>