<?php get_header();
/*
Template Name: About Page
*/
?>

<div class="row" style="background-color:<?php the_field("color"); ?>">
	
	<div class="col-xs-9">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- <div class="col-xs-3"> -->
			<h2><?php the_title();?></h2>
		<!-- </div> -->

			<div class="col-xs-9">
				<img src="<?php the_field("main_image"); ?>" alt="">


				<?php the_field("company_info"); ?>

			</div>

		<?php endwhile; else: ?>
			<p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>

	</div>
	
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>