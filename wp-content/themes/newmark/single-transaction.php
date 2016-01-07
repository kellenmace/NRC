<h2 class="page-title">Transactions</h2>
<a href="<?php bloginfo('url'); ?>/transactions">< Back to more transactions</a>

<div class="row">
	<div class="col-md-7">
		<img class="img-responsive" src="<?php the_post_thumbnail_url('full'); ?>">
	</div>
	<div class="col-md-3">
		<div class="transaction-details">
			<h3>$<?php the_field('amount'); ?></h3>
			<h4>For <?php the_title(); ?> <br>
			in <?php the_field('location'); ?></h4>

			<?php
				$field = get_field_object('property_type');
				$value = get_field('property_type');
				$label = $field['choices'][$value];
			?>
			<table>
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
			<!-- <p>Financing Type: <?php the_field('financing_type'); ?></p>
			<p>Property Type:  <?php the_field('property_type'); ?></p>
			<p>Term: <?php the_field('term'); ?></p>
			<p>Amortized: <?php the_field('amortized'); ?></p>
			<p>Transaction Contacts: </p> -->

			<h5>Share this Transaction</h5>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-7">
		<p><?php the_excerpt(); ?></p>
	</div>
	<div class="col-md-3">
		<a href="#" class="btn btn-primary">Click for more info</a>
	</div>
</div>
