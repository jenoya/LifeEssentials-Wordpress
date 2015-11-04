<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-9 content">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- <div class="col-xs-3"> -->
		<h1><?php the_title();?></h1>
		<!-- </div> -->

			<!-- <div class="col-xs-9"> -->
				<img src="<?php the_field("image"); ?>" alt="">


				<?php the_field("company_info"); ?>

			<!-- </div> -->

		<?php endwhile; else: ?>
			<p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>

	</div>
	
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>