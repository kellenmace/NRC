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
	<div class="col-md-12">
		<h4>Enter search term or select producer to filter results below</h4>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="search">
			<span class="fa fa-search"></span>
			<input type="text" class="quicksearch" placeholder="e.g. Phoenix, retail, Heagerty, permanent" />
		</div>
	</div>
	<!-- <div class="col-md-3">
		<select class="filters-select">
			<option value=" "></option>
			<?php
				$loop = new WP_Query( array( 'post_type' => 'producer', 'posts_per_page' => -1, 'meta_key' => 'last_name', 'orderby' => 'meta_value', 'order' => 'ASC') );
				while($loop->have_posts()) : $loop->the_post();
			?>
				<option value="<?php the_field('first_name'); ?><?php the_field('last_name'); ?>"><?php the_title(); ?></option>
			<?php endwhile; ?>
		</select>
	</div> -->
</div>
<div class="row">
<div class="grid">
	<?php $loop = new WP_Query( array( 'post_type' => 'transaction', 'posts_per_page' => -1) ); ?>
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<?php
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
				$transaction_class = 'multi';
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
			<div class="grid-item">
				<div class="col-md-3">
					<figure class="transaction-card">
						<img class="img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>">
						<figcaption>
							<?php
								$state_field = get_field_object('state');
								$state_value = get_field('state');
								$state_label = $state_field['choices'][$state_value];
							?>
							<h3>$<?php the_field('amount'); ?></h3>
							<p>For <?php the_title(); ?></p>
							<p>in <?php the_field('city'); ?>, <?php echo $state_label; ?></p>
							<div class="hidden-tags">
								<?php
									$producers = get_field('transaction_contacts');
									$financing_type = get_field('financing_type');
									foreach($producers as $p){
										echo get_field('first_name', $p->ID) . get_field('last_name', $p->ID) . ' ';
									};
									if($financing_type){
										echo $financing_type . ' ';
									};
									the_field('state');
								?>
							</div>
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