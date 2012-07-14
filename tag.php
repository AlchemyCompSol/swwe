<?php get_header(); ?>
<div id="content">

		<h1><?php
			printf( __( 'Tag Archives: %s', 'starkers' ), '' . single_tag_title( '', false ) . '' );
		?></h1>

<?php
 get_template_part( 'loop', 'tag' );
?>

</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>