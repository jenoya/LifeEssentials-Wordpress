<?php get_header(); ?>


<div class="row">
	<div class="col-xs-12 col-sm-9 content">
		
		<h1><?php the_title();?></h1>

		<div id="content">
		
			<ul id="tabs" class="nav nav-tabs nav-justified category-nav" data-tabs="tabs">
				<li class="active" role="presentation"><a href="#edc-interviews" data-toggle="tab"a>EDC Interviews</a></li>
				<li><a href="#product-reviews" data-toggle="tab">Product Reviews</a></li>
				<li><a href="#guides" data-toggle="tab">Guides</a></li>
				<li><a href="#explore" data-toggle="tab">Explore</a></li>
				<li><a href="#uncategorized" data-toggle="tab">Uncategorized</a></li>
			</ul>

			<div id="my-tab-content" class="tab-content">
				<div class="tab-pane active" id="edc-interviews">

					<?php query_posts('category_name=edc-interviews'); ?>
						<ul>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<h2 class="recent-posts">
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<!-- <div class="row"> -->
								<img src="<?php the_field('featured_image');?>" class="img-responsive" style="height:300px;" />
								<!-- </div> -->
								<p><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a></p>
							</li>

							<hr>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</div>

				<div class="tab-pane" id="product-reviews">
					<?php query_posts('category_name=product-reviews'); ?>
						<ul>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<h2 class="recent-posts">
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<img src="<?php the_field('featured_image');?>" class="img-responsive" style="height:300px;" />
								<p><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a></p>
							</li>

							<hr>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>

				<div class="tab-pane" id="guides">
					<?php query_posts('category_name=guides'); ?>
						<ul>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<h2 class="recent-posts">
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<img src="<?php the_field('featured_image');?>" class="img-responsive" style="height:300px;" />
								<p><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a></p>
							</li>

							<hr>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>

				<div class="tab-pane" id="explore">
					<?php query_posts('category_name=explore'); ?>
						<ul>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<h2 class="recent-posts">
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<img src="<?php the_field('featured_image');?>" class="img-responsive" style="height:300px;" />
								<p><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a></p>
							</li>

							<hr>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>

				<div class="tab-pane" id="uncategorized">
					<?php query_posts('category_name=uncategorized'); ?>
						<ul>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<h2 class="recent-posts">
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<img src="<?php the_field('featured_image');?>" class="img-responsive" style="height:300px;" />
								<p><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a></p>
							</li>

							<hr>

							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>

			</div>

			<hr>

		</div>
		
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