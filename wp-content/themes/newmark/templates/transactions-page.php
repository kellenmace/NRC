<?php
/**
 * Template Name: Transactions Template
 */
?>
<div class="row">
	<div class="col-md-12">
		<h1><?php echo get_the_title(); ?></h1>
	</div>
</div>
<div class="row">
	<?php $loop = new WP_Query( array( 'post_type' => 'transaction', 'posts_per_page' => -1) ); ?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<div class="col-md-3">
				<figure class="transaction-card">
					<img src="http://lorempixel.com/215/145">
					<h5><?php the_field('amount'); ?></h5>
					<p>For <?php the_title(); ?></p>
					<p>in <?php the_field('location'); ?></p>
					<div class="row">
						<div class="col-md-12">
							<div class="transaction-type">
								<p class="transation-type-text">Retail</p>
							</div>
						</div>
					</div>
				</figure>
			</div>
		</a>
	  <!-- <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2> -->
	<?php endwhile;  wp_reset_query();?>
</div>