<?php get_header(); ?>

<div class="row">
	
	<div class="col-xs-12 col-sm-9 content">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- <div class="col-xs-3"> -->
		<h1><?php the_title();?></h1>
		<!-- </div> -->

			<h2>Advertise with Us</h2>
			<hr/>
			<h3>Plans</h3>
			
			<div class="row">
				
				<div class="col-xs-4">
					<h4>Article Width</h4>
					<p>100% x 200 px</p>
					<p>100% x 130 px (m)</p>
				</div>
				
				<div class="col-xs-3 center">
					<h5>12,000,000</h5>
					<p >Est. Impressions</p>
				</div>
				
				<div class="col-xs-3 center">
					<h5>$10.00</h5>
					<p>Per 1k Imps.</p>
				</div>
				
				<div class="col-xs-2">
					<a href="#">
						<div class="button btn-primary"><h5>Buy Now</h5></div>
					</a>
				</div>

			</div>
			
			<div class="ad-preview long mt20"></div>

			<div class="row mt20">

				<div class="col-xs-4">
					<h4>Side-Bar</h4>
					<p>100% x 250 px</p>
					<p>100% x 2 px (m)</p>
				</div>

				<div class="col-xs-3 center">
					<h5>12,000,000</h5>
					<p>Est. Impressions</p>
				</div>
				
				<div class="col-xs-3 center">
					<h5>$5.00</h5>
					<p>Per 1k Imps.</p>
				</div>
				
				<div class="col-xs-2">
					<a href="#">
						<div class="button btn-primary"><h5>Buy Now</h5></div>
					</a>
				</div>

			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<div class="ad-preview side mt20"></div>
				</div>
			</div>

		<?php endwhile; else: ?>
			<p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>

	</div>
	
	<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>