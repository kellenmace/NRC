<?php
/**
 * Template Name: Transactions Template
 */
?>

<div class="row">
	<div class="col-md-12">
		<h2 class="page-title"><?php echo get_the_title(); ?></h2>
	</div>
</div>
<div class="row">
	<?php $loop = new WP_Query( array( 'post_type' => 'transaction', 'posts_per_page' => -1) ); ?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<?php
		// if(get_field('property_type') == 'industrial'){
		// 	$transaction_class = 'industrial';
		// 	$transaction_text = 'Indust.';
		// }
		$transaction_type = get_field('property_type');
		switch ($transaction_type) {
			case 'industrial':
				$transaction_class = 'industrial';
				$transaction_text = 'Indust.';
				break;
			case 'mixed':
				$transaction_class = 'mixed';
				$transaction_text = 'Mixed';
				break;
			case 'multi':
				$transaction_class = 'multi-family';
				$transaction_text = 'Multi';
				break;
			case 'retail':
				$transaction_class = 'retail';
				$transaction_text = 'Retail';
				break;
			case 'office':
				$transaction_class = 'office';
				$transaction_text = 'Indust.';
				break;
			default:
				$transaction_class = 'default';
				$transaction_text = 'default';
				break;
		}
	 ?>
		<a href="<?php the_permalink(); ?>">
			<div class="col-md-3">
				<figure class="transaction-card">
					<img class="img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>">
					<figcaption>
						<h3>$<?php the_field('amount'); ?></h3>
						<p>For <?php the_title(); ?></p>
						<p>in <?php the_field('location'); ?></p>
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
		</a>
	  <!-- <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2> -->
	<?php endwhile;  wp_reset_query();?>
</div>