<div id="single-producer-page">
<h1 class="page-title">Team</h1>
<a href="<?php bloginfo('url'); ?>/production-team"><p>< &nbsp;Back to production team</p></a>

<div class="row">
	<div class="col-md-3 col-sm-4 col-xs-4">
		<img class="img-responsive" src="<?php the_post_thumbnail_url('large'); ?>">
	</div>
	<div class="col-md-5 col-sm-3 col-xs-8">
		<div class="producer-title-box">
			<h2><?php the_title(); ?></h2>
			<h3><?php the_field('title'); ?></h3>
		</div>
	</div>
	<div class="col-md-4 col-sm-5 col-xs-12">
		<div class="producer-info-box">
			<p><?php the_field('phone_number'); ?></p>
			<p><a href="mailto:<?php the_field('email'); ?>"><i class="fa fa-envelope-o"></i></a>&nbsp;&nbsp;<a href="<?php the_field('vcard'); ?>">vCard</a></p>
			<?php
				$location = get_field('office_location');
				if($location) :
					foreach($location as $l) :
			?>
				<!-- <p><?php //echo get_field('phone_number', $l->ID); ?></p> -->
				<p><?php echo get_field('address', $l->ID); ?></p>
			<?php endforeach; endif;?>
		</div>
	</div>
</div>
<div class="producer-tabs">
	<div class="row">
		<div class="col-md-12">
			<div role="tabpanel">
			    <!-- Nav tabs -->
			    <ul class="nav nav-tabs" role="tablist">
			        <li role="presentation">
			            <a href="#bio" aria-controls="bio" role="tab" data-toggle="tab"><h3>Bio</h3></a>
			        </li>
			        <li role="presentation" class="active">
			            <a href="#transactions" aria-controls="transactions" role="tab" data-toggle="tab"><h3 class="all-screens">Transactions</h3><h3 class="iphone5-portrait-screen-only">TRX</h3></a>
			        </li>
			        <li role="presentation">
			            <a href="#resources" aria-controls="resources" role="tab" data-toggle="tab"><h3>Resources</h3></a>
			        </li>
			    </ul>

			    <!-- Tab panes -->
			    <div class="tab-content">
			        <div role="tabpanel" class="tab-pane" id="bio">
			        	<div class="row">
			        		<div class="col-md-10 col-md-offset-1">
					        	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					        		<p class="producer-bio"><?php the_content(); ?></p>
					        	<?php endwhile; endif; ?>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane active" id="transactions">
			        	<div class="row">
			        		<div class="col-md-12">
			        			<div class="row">
			        				<div class="grid">
										<?php
											$transactions = get_posts(array(
												'post_type' => 'transaction',
												'meta_query' => array(
													array(
														'key' => 'transaction_contacts', // name of custom field
														'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
														'compare' => 'LIKE'
													)
												)
											));
										?>
										<?php if($transactions) : ?>
											<?php foreach($transactions as $t) : ?>
												<?php
														$transaction_type = get_field('property_type', $t->ID);
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
																$transaction_text = 'Office';
																break;
															default:
																$transaction_class = 'default';
																$transaction_text = 'default';
																break;
														}
													 ?>
														<a href="<?php the_permalink($t->ID); ?>">
															<div class="grid-item">
																<div class="col-md-3">
																	<figure class="transaction-card">
																		<?php $image = wp_get_attachment_url(get_post_thumbnail_id($t->ID), 'medium'); ?>
																		<img class="img-responsive" src="<?php echo $image; ?>">
																		<figcaption>
																			<?php
																				$state_field = get_field_object('state', $t->ID);
																				$state_value = get_field('state', $t->ID);
																				$state_label = $state_field['choices'][$state_value];
																			?>
																			<h3>$<?php the_field('amount', $t->ID); ?></h3>
																			<p>For <?php echo get_the_title($t->ID); ?></p>
																			<p>in <?php the_field('city', $t->ID); ?>, <?php echo $state_label; ?></p>
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
											<?php endforeach; ?>
										<?php else : ?>
											<p>No Transactions Found for this Producer</p>
										<?php endif; ?>
									</div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="resources">
			        	<p>resources</p>
			        </div>
			    </div>
			</div>
		</div>
</div>
</div>
</div>