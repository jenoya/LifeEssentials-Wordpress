
<div class="col-xs-12 col-sm-3 red">

<?php if(!is_page('about')){ ?>
	<div class="about_info">
		<h2>About</h2>
		<p>Jennifer Oya discovered everyday carry blogs, and became obsessed. However, after seeing all of the websites about everyday carry blogs, and how they’re all seemingly male dominated, she wanted to make a gender friendly blog about all the cool and nifty tools, as well as reviews and interviews.<a>Read more.</a></p>
	</div>
<?php } ?>


	<h2>See Older</h2>
	<div>calendar</div>
	<!-- make ads appear -->
	
	<div class="row">
		<?php 

		$args = array(
			"post_type"         => "ads",
			"posts_per_page"	=> "1",
			"orderby"			=> "rand"
		);
		$ads = new WP_Query($args);

		if($ads->have_posts()): while ($ads->have_posts()) : $ads->the_post(); ?>
			<a href="<?php the_field('link');?>">
				<img src="<?php the_field('image');?>" class="img-responsive">
			</a>
		<?php endwhile; endif; ?>

	</div>
	<div class="row">
		<h2>More Info</h2>
		<p>akjdfhldsjf hldskjf kjfhsdkjfhskjdf lasdkjfhkdsjf skdjfhkdsjfhks djlfadskjfhadskjfhadskj fksdjafkafksfhlsdkjfl adskfhds.</p>
	</div>
	<div class="row">
		<h2>Stay Social</h2>
		<a href="https://www.facebook.com/its17">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/F_icon.svg/2000px-F_icon.svg.png" style="width:50px;" />
		</a>
	</div>

</div>
