<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-9 content">
		
		<h1><?php the_title();?></h1>

		<ul class="nav nav-tabs nav-justified category-nav">
			<li role="presentation" class="active">
				<a href="#">Edc Interviews</a>
				
				<?php query_posts('category_name=edc-interviews'); ?>
					<ul>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
							<h2 class="recent-posts">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
							</h2>
							<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								}
								else {
									echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" class="img-responsive" />';
								}
								?>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

			</li>
			<li role="presentation"><a href="#">Product Reviews</a></li>
			<li role="presentation"><a href="#">Uncategorized</a></li>
			
		</ul>

				

		

	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>