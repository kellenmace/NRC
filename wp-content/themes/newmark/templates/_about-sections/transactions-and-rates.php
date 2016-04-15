<div class="row">
	<div class="col-md-12">
		<div id="transactions-and-rates" class="about-section">
			<div class="row">
				<div class="col-md-offset-1 col-md-5 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-5">
					<div class="recent-transactions-box">
						<h3>Recent Transactions</h3>
						<div id="recent-transactions-carousel" class="carousel slide" data-ride="carousel">
						    <ol class="carousel-indicators">
						        <li data-target="#recent-transactions-carousel" data-slide-to="0" class="active"></li>
						        <li data-target="#recent-transactions-carousel" data-slide-to="1" class=""></li>
						        <li data-target="#recent-transactions-carousel" data-slide-to="2" class=""></li>
						        <li data-target="#recent-transactions-carousel" data-slide-to="3" class=""></li>
						        <li data-target="#recent-transactions-carousel" data-slide-to="4" class=""></li>
						    </ol>
						    <div class="carousel-inner">
						    	<?php
										$state_label = $state_field['choices'][$state_value];
						    		$args = array('posts_per_page' => 10, 'post_type' => 'transaction');
						    		$transactions = new WP_Query($args);
						    		if($transactions->have_posts()) :
						    			$i = 0;
						    			while( $transactions->have_posts() ) : $transactions->the_post(); $i++;
						    				if($i == 1){
						    					echo '<div class="item active">';
						    				}
						    	?>
						    				<div class="row">
						    					<a href="<?php the_permalink(); ?>">
							    					<div class="col-md-12 col-sm-12 col-xs-12">
							    						<img class="img-responsive" src="<?php the_post_thumbnail_url('small'); ?>">
							    					</div>
							    					<div class="col-md-12 col-sm-12 col-xs-12">
							    						<p><?php the_title(); ?><br>
																 $<?php echo get_field('amount'); ?><br>
																 <?php echo get_field('city'); ?>, <?php echo $state_label ?>

															 </p>
							    					</div>
						    					</a>
						    				</div>
						    				<?php
							    				if ( $i % 2 == 0 && $i != 10 ) {
							    					echo '</div><div class="item">';
							    				}
						    				?>
						    			<?php endwhile; wp_reset_postdata(); ?>
						    			</div>
						    		<?php endif; ?>
					    </div>
						    <!-- <a class="left carousel-control" href="#recent-transactions-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						    <a class="right carousel-control" href="#recent-transactions-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->
						</div>
					</div>
				</div>
				<div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-10 col-xs-5">
					<div class="transaction-rates">
						<h3>Current Rates</h3>
						<!--START theFinancials.com Content-TINY WIDGET PART 1-->
						<!--copyright theFinancials.com - All Rights Reserved-->
						<script LANGUAGE='JavaScript' type='text/javascript'
						SRC='http://www.theFinancials.com/syndicated/NRC/NRCt_MarketUpdate_P1.js'>
						</script>
						<script LANGUAGE='JavaScript' type='text/javascript'>
						    //<!--
						    document.writeln(NRCt_MarketUpdate_P1('NRC', 'table_width', 200));
						    //-->
						</script>
						<!--END theFinancials.com Content-->

						<!--START theFinancials.com Content-TINY WIDGET PART 2-->
						<!--copyright theFinancials.com - All Rights Reserved-->
						<script LANGUAGE='JavaScript' type='text/javascript'
						SRC='http://www.theFinancials.com/syndicated/NRC/NRCt_MarketUpdate_P2.js'>
						</script>
						<script LANGUAGE='JavaScript' type='text/javascript'>
						    //<!--
						    document.writeln(NRCt_MarketUpdate_P2('NRC', 'table_width', 200));
						    //-->
						</script>
						<!--END theFinancials.com Content-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
