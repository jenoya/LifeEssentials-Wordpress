<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-9 content">
		
		<h1><?php the_title();?></h1>

		<div id="content">
		
			<ul id="tabs" class="nav nav-tabs nav-justified category-nav" data-tabs="tabs">
				<li class="active" role="presentation"><a href="#edc-interviews" data-toggle="tab"a>EDC Interviews</a></li>
				<li><a href="#product-reviews" data-toggle="tab">Product Reviews</a></li>
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
				</div>

			</div>
		</div>

	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>