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
		<div class="filters">
			<div class="btn-group" data-filter-group="location">
				<button class="btn" data-filter=".san-francisco">San Francisco</button>
				<button class="btn" data-filter=".sacramento">Sacramento</button>
				<button class="btn" data-filter=".los-angeles">Los Angeles</button>
				<button class="btn" data-filter=".newport-beach">Newport Beach</button>
				<button class="btn" data-filter=".seattle">Seattle</button>
				<button class="btn" data-filter=".spokane">Spokane</button>
				<button class="btn" data-filter=".phoenix">Phoenix</button>
				<button class="btn" data-filter=".las-vegas">Las Vegas</button>
				<button class="btn" data-filter="*">All</button>
			</div>
		</div>
	</div>
</div>

<div class="row">
<div class="grid-producer">
	<?php $loop = new WP_Query( array( 'post_type' => 'producer', 'posts_per_page' => -1, 'meta_key' => 'last_name', 'orderby' => 'meta_value', 'order' => 'ASC') ); ?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<div class="producer-item">
				<!-- <div class="col-md-3"> -->
					<?php
						$office_location = get_field('office_location');
						$region_key = get_field('region');
					?>
					<?php foreach ($office_location as $ol) : ?>
					<figure class="producer-card <?php echo $ol->post_name; ?> <?php echo $region_key; ?>">
					<?php endforeach; ?>
						<img class="img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>">
						<figcaption>
							<h3><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h3>
							<p><?php the_field('title'); ?></p>
						</figcaption>
					</figure>
				<!-- </div> -->
			</div>
		</a>
	  <!-- <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2> -->
	<?php endwhile;  wp_reset_query();?>
</div>
</div>