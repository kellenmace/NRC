<?php
/**
 * Template Name: Team Template
 */
?>

<div class="row">
	<div class="col-md-12">
		<h2 class="page-title"><?php echo get_the_title(); ?></h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h4>Click to Filter</h4>
	</div>
</div>

<div class="row">
<div class="grid-producer">
	<?php $loop = new WP_Query( array( 'post_type' => 'producer', 'posts_per_page' => -1) ); ?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<div class="producer-item">
				<div class="col-md-3">
					<figure class="producer-card">
						<img class="img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>">
						<figcaption>
							<h3><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h3>
							<p><?php the_field('title'); ?></p>
						</figcaption>
						<div class="row">
							<div class="col-md-12">
								<div class="transaction-type <?php echo $transaction_class; ?>">
									<p class="transaction-type-text"><?php echo $transaction_text; ?></p>
								</div>
							</div>
						</div>
					</figure>
				</div>
			</div>
		</a>
	  <!-- <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2> -->
	<?php endwhile;  wp_reset_query();?>
</div>
</div>