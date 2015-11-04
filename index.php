<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-9 content">
		<h1>Recent Posts</h1>


		<?php if(have_posts()): while (have_posts()) : the_post(); ?>
			<?php
			// Must be inside a loop.

				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
				else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" class="img-responsive" />';
				}
			?>
			
			<h2 class="recent-posts">
				<a href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<p><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a></p>

		<?php endwhile; endif; ?>
	
	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>