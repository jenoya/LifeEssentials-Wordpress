<?php get_header();
/*
Template Name: About Page
*/
?>


<div class="row">
	
	<div class="col-xs-12 col-sm-9 content">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- <div class="col-xs-3"> -->
		<h1><?php the_title();?></h1>
		<!-- </div> -->
		<img src="<?php bloginfo('template_directory'); ?>/images/jenprofile.jpg" alt="Jennifer Oya" style="float:left; margin-right: 10px;">


		<?php the_field("company_info"); ?>


		<?php endwhile; else: ?>
			<p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>

	</div>
	
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>