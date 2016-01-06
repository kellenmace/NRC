<h2>Transactions</h2>
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
			<p>Financing Type: </p>
			<p>Property Type: </p>
			<p>Term: </p>
			<p>Amortized: </p>
			<p>Transaction Contacts: </p>

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
