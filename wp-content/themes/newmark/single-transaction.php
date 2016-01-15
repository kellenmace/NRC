<?php $loop = new WP_Query( array( 'post_type' => 'transaction', 'posts_per_page' => -1) ); ?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<div class="modal fade" id="<?php global $post; echo $post->post_name; ?>-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h1>$<?php the_field('amount'); ?> for <?php the_title(); ?> in <?php the_field('location'); ?></h1>
				<p><?php the_content(); ?></p>
			</div>
		</div>
	</div>
</div>
<?php endwhile;  wp_reset_query();?>

<div id="single-transaction-page">
<h1 class="page-title">Transactions</h1>
<a href="<?php bloginfo('url'); ?>/transactions"><p>< &nbsp;Back to more transactions</p></a>

<div class="row">
	<div class="col-md-8">
		<img class="img-responsive transaction-image" src="<?php the_post_thumbnail_url('full'); ?>">
	</div>
	<div class="col-md-4">
		<div class="transaction-details">
			<h1>$<?php the_field('amount'); ?></h1>
			<h4>For <?php the_title(); ?> <br>
			in <?php the_field('location'); ?></h4>

			<?php
				$field = get_field_object('property_type');
				$value = get_field('property_type');
				$label = $field['choices'][$value];
			?>
			<div class="table-responsive">
			<table class="table">
				<tr>
					<th>Financing Type: </th>
					<td><?php the_field('financing_type'); ?></td>
				</tr>
				<tr>
					<th>Property Type: </th>
					<td><?php echo $label; ?></td>
				</tr>
				<tr>
					<th>Term: </th>
					<td><?php the_field('term'); ?></td>
				</tr>
				<tr>
					<th>Amortized: </th>
					<td><?php the_field('amortized'); ?></td>
				</tr>
			</table>
			</div>

			<h3>Transaction Contacts</h3>
			<?php
				$producers = get_field('transaction_contacts');
				if($producers):
			?>
				<ul class="list-unstyled">
					<?php foreach( $producers as $p) : ?>
						<?php
							/*$office_location = get_posts(array(
							                             'post_type' => 'producer',
							                             'meta_query' => array(
							                                                   'key' => 'office_location',
							                                                   'value' => '"' . get_the_ID() . '"',
							                                                   'compare' => 'LIKE'
							                                                   )
							                             )
							);*/
							$office_location = get_field('office_location', $p->ID);
						?>
						<li>
							<p><?php echo get_the_title($p->ID); ?><br>
							<?php foreach( $office_location as $o) : ?>
								<?php echo get_the_title($o->ID); ?> Office<br>
								<?php echo get_field('phone_number', $o->ID); ?></p>
							<?php endforeach; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<h3>Share this Transaction</h3>
			<div class="a2a_kit a2a_kit_size_25 a2a_default_style">
				<a class="a2a_button_print"></a>
			    <a class="a2a_button_email"></a>
			    <a class="a2a_button_twitter"></a>
			</div>

			<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>

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
			 <div class="row">
			 	<div class="col-md-offset-4 col-md-8">
			 		<div class="transaction-type <?php echo $transaction_class; ?>">
			 			<p class="transaction-type-text"><?php echo $transaction_text; ?></p>
			 		</div>
			 	</div>
			 </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="transaction-more-info">
		<div class="col-md-8">
			<div class="transaction-excerpt">
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="more-info-button">
				<a href="#<?php global $post; echo $post->post_name; ?>-modal" class="btn btn-primary" data-toggle="modal" data-target="#<?php global $post; echo $post->post_name; ?>-modal">Click for more info</a>
			</div>
		</div>
	</div>
</div>
</div>