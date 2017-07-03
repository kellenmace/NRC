<div class="row">
	<div class="col-md-12">
		<div id="services" class="about-section">
			<div role="tabpanel">
			    <!-- Nav tabs -->
			    <ul class="nav nav-tabs" role="tablist">
			        <li role="presentation" class="active">
			            <a href="#mortgage-banking" aria-controls="home" role="tab" data-toggle="tab">Mortgage Banking</a>
			        </li>
			        <li role="presentation">
			            <a href="#loan-servicing" aria-controls="tab" role="tab" data-toggle="tab">Loan Servicing</a>
			        </li>
			        <li role="presentation">
			            <a href="#debt-advisory" aria-controls="tab" role="tab" data-toggle="tab">Debt Advisory</a>
			        </li>
			        <li role="presentation">
			            <a href="#acquisition-brokerage" aria-controls="tab" role="tab" data-toggle="tab">Acquisition Brokerage</a>
			        </li>
							<li role="presentation">
								<a href="#consulting" aria-controls="tab" role="tab" data-toggle="tab">Consulting</a>
							</li>
			        <li role="presentation">
			            <a href="#affiliations" aria-controls="tab" role="tab" data-toggle="tab">Affiliations</a>
			        </li>
			        <li role="presentation">
			            <a href="#charitable_org" aria-controls="tab" role="tab" data-toggle="tab">Charitable Organizations</a>
			        </li>
			    </ul>

			    <!-- Tab panes -->
			    <div class="tab-content">
			        <div role="tabpanel" class="tab-pane active" id="mortgage-banking">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="mortgage-content-iphone5-landscape">
				        			<div class="mortgage-content"><?php the_field('mortgage_banking'); ?></div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="loan-servicing">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="loan-content-iphone5-landscape">
				        			<div class="loan-content"><?php the_field('loan_servicing'); ?></div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="debt-advisory">
								<div class="row">
			        		<div class="col-md-offset-1 col-md-10">

			        			<div class="debt-content-iphone5-landscape">
				        			<div class="debt-content"><?php the_field('debt_advisory'); ?></div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="acquisition-brokerage">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="acquisition-content-iphone5-landscape">
				        			<div class="acquisition-content"><?php the_field('acquisition_brokerage'); ?></div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
							<div role="tabpanel" class="tab-pane" id="consulting">
								<div class="row">
									<div class="col-md-offset-1 col-md-10">
										<div class="consulting-content-iphone5-landscape">
											<div class="consulting-content"><?php the_field('consulting'); ?></div>
										</div>
									</div>
								</div>
							</div>
			        <div role="tabpanel" class="tab-pane" id="affiliations">
								<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="consulting-content-iphone5-landscape">
				        			<div class="consulting-content">
				        				<h2>Newmark Services</h2>
				        				<h1>Affiliations</h1>
			        					<div class="row-grid row">
				        				<?php
				        					$images = get_field('affiliations');
				        					if($images):
				        				?>
				        						<?php foreach( $images as $image): ?>
			        								<div class="row-item col-sm-3 col-xs-6">
					        							<a href="<?php echo $image['description'] ?>" target="_blank">
					        								<img src="<?php echo $image['sizes']['large'] ?>" class="img-responsive">
				        								</a>
			        								</div>
				        						<?php endforeach; ?>
				        				<?php endif; ?>
			        					</div>
				        			</div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="charitable_org">
								<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="consulting-content-iphone5-landscape">
											<div class="consulting-content">
				        				<h2>Newmark Services</h2>
				        				<h1>Charitable Organizations</h1>
			        					<div class="row-grid row">
				        				<?php
				        					$images = get_field('charitable_organizations');
				        					if($images):
				        				?>
				        						<?php foreach( $images as $image): ?>
			        								<div class="row-item col-sm-3 col-xs-6">
					        							<a href="<?php echo $image['description'] ?>" target="_blank">
					        								<img src="<?php echo $image['sizes']['large'] ?>" class="img-responsive">
				        								</a>
			        								</div>
				        						<?php endforeach; ?>
				        				<?php endif; ?>
			        					</div>
				        			</div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
