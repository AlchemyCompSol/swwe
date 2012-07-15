<?php get_header(); ?>
<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>	
					<h1><?php the_title(); ?></h1>
			</header>				

				<?php the_content(); ?>
						

		</article>


	<?php endwhile; ?>

</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>