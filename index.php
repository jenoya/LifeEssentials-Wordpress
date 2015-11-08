<?php get_header(); ?>


<div class="row">
	<div class="col-xs-12 col-sm-9 content">
		<h1>Recent Posts</h1>
		<hr>

		<?php if(have_posts()): while (have_posts()) : the_post(); ?>
			<img src="<?php the_field('featured_image');?>" class="img-responsive featuredimage" style="max-height:300px;" />
			
			<h2 class="re-posts">
				<a href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<p><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a></p>
			<hr>
		
		<?php endwhile; endif; ?>

		<div class="ad">
			<?php 

			$args = array(
				"post_type"         => "long-ads",
				"posts_per_page"	=> "1",
				"orderby"			=> "rand"
			);
			$ads = new WP_Query($args);

			if($ads->have_posts()): while ($ads->have_posts()) : $ads->the_post(); ?>
				<a href="<?php the_field('link');?>">
					<img src="<?php the_field('image');?>" class="img-responsive longadcenter">
				</a>
			<?php endwhile; endif; ?>
			<hr>
		</div>

	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>