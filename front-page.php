<?php get_header(); ?>
<div id="content">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div id="want">
				<h2>I want to...</h2>
				<a class="homebutton" id="start" href="/start">
					<p><span class="big">start</span> an online store</p>
				</a>
				<a class="homebutton" id="drive" href="drive">
					<p><span class="big">drive</span> traffic to my site</p>
				</a>
				<a class="homebutton" id="connect" href="connect">
					<p><span class="big">connect</span> with women retailers</p>
				</a>
			</div>

			<div id="twocolumns">
				<div class="column" id="event">
					<h3>Find an Event Near You</h3>
				</div>
				<div class="column" id="join">
					<h3>Get expert advice</h3>
					<p>Sign up and receive a FREE copy of <strong>The First 10 Steps to Building a Successful eCommerce Business</strong></p>
					<form action="http://newsletter.pixologyrules.com/t/r/s/yktlljk/" method="post" id="subForm">
						<div>
							<input type="text" class="field" name="cm-yktlljk-yktlljk" id="yktlljk-yktlljk" placeholder="Email Address"/><br />
							<input type="submit" class="button" value="Subscribe" />
						</div>
					</form>
				</div>
			</div>
						

		</article>


	<?php endwhile; ?>

</div><!-- #content -->
<?php get_footer('home'); ?>