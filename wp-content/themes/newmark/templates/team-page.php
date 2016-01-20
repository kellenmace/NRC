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
			<div class="btn-group" data-filter-group="region">
				<button class="btn region is-checked" data-filter="*">All</button>
				<button class="btn region" data-filter=".nor-cal">Northern California</button>
				<button class="btn region" data-filter=".so-cal">Southern California</button>
				<button class="btn region" data-filter=".pac-nw">Pacific Northwest</button>
				<button class="btn region" data-filter=".arizona">Arizona</button>
				<button class="btn region" data-filter=".nevada">Nevada</button>
			</div>
			<div class="btn-group" data-filter-group="location">
				<button class="btn location is-checked" data-filter="*">All</button>
				<button class="btn location" data-filter=".san-francisco">San Francisco</button>
				<button class="btn location" data-filter=".sacramento">Sacramento</button>
				<button class="btn location" data-filter=".los-angeles">Los Angeles</button>
				<button class="btn location" data-filter=".newport-beach">Newport Beach</button>
				<button class="btn location" data-filter=".seattle">Seattle</button>
				<button class="btn location" data-filter=".spokane">Spokane</button>
				<button class="btn location" data-filter=".phoenix">Phoenix</button>
				<button class="btn location" data-filter=".las-vegas">Las Vegas</button>
				<button class="btn location">&nbsp;</button>
			</div>
		</div>
	</div>
</div>

<div class="row">
<div class="grid-producer">
	<?php $loop = new WP_Query( array( 'post_type' => 'producer', 'posts_per_page' => -1, 'meta_key' => 'last_name', 'orderby' => 'meta_value', 'order' => 'ASC') ); ?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<div class="producer-item <?php $office_location = get_field('office_location'); foreach($office_location as $ol){echo $ol->post_name . ' ';} ?><?php echo get_field('region');?>">
				<div class="col-md-3">
					<figure class="producer-card">
						<img class="img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>">
						<figcaption>
							<h3><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></h3>
							<p><?php the_field('title'); ?></p>
						</figcaption>
					</figure>
				</div>
			</div>
		</a>
	  <!-- <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2> -->
	<?php endwhile;  wp_reset_query();?>
</div>
</div>