<?php get_header(); ?>
<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>

					<h1><?php the_title(); ?></h1>

			</header>				

				<?php the_content(); ?>
						

				<h3 class="featured">Featured Article</h3>
				<?php $args = array( 
				      'post_type' => array( 'post' ),
				      'posts_per_page' => 1,           
				      'ignore_sticky_posts' => false,      
				    );

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				  <p class="date"><?php the_date(); ?></p>
				  <?php the_excerpt(); ?>
				<?php endwhile;
				endif;
				wp_reset_postdata(); ?>		

				<div class="advice">
					<h3>Expert Advice</h3>
					<img src="<?php bloginfo('template_directory'); ?>/images/advice.jpg">
				</div>

				<div class="round-box">
<blockquote>
<p>I was so happy to discover a community of women who are not only willing to share what they know, but purposefully seeking out those in need.</p>
</blockquote>
<p style="text-align: right;">-Clara, Houston, TX</p>
<p class="member-button"><a title="Join The Clementine Group" href="http://theclementinegroup.com/2012/07/join-the-clementine-group/">Become a Member</a></p>
</div>


		</article>



	<?php endwhile; ?>

</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
