<?php
/**
 * Template Name: About Us Template
 */
?>
<div class="inner-container">
<div class="row">
	<div class="col-md-12">
		<div class="about-us-fixed-nav">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#transactions-and-rates">Transactions and Rates</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#lenders">Lenders</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</div>
</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div id="about-newmark" class="about-section">
			<div class="about-content">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<?php the_field('about_newmark'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="transactions-and-rates" class="about-section"></div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="services" class="about-section">
			<div role="tabpanel">
			    <!-- Nav tabs -->
			    <ul class="nav nav-tabs" role="tablist">
			        <li role="presentation" class="active">
			            <a href="#mortgage-banking" aria-controls="home" role="tab" data-toggle="tab">Mortgage Banking &amp; Brokerage</a>
			        </li>
			        <li role="presentation">
			            <a href="#loan-servicing" aria-controls="tab" role="tab" data-toggle="tab">Loan Servicing</a>
			        </li>
			        <li role="presentation">
			            <a href="#debt-advisory" aria-controls="tab" role="tab" data-toggle="tab">Debt Advisory</a>
			        </li>
			        <li role="presentation">
			            <a href="#acquisition-brokerage" aria-controls="tab" role="tab" data-toggle="tab">Acquisition Brokerage &amp; Note Sales</a>
			        </li>
			        <li role="presentation">
			            <a href="#consulting" aria-controls="tab" role="tab" data-toggle="tab">Consulting</a>
			        </li>
			    </ul>

			    <!-- Tab panes -->
			    <div class="tab-content">
			        <div role="tabpanel" class="tab-pane active" id="mortgage-banking">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="mortgage-content"><?php the_field('mortgage_banking'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="loan-servicing">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="loan-content"><?php the_field('loan_servicing'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="debt-advisory">
						<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="debt-content"><?php the_field('debt_advisory'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="acquisition-brokerage">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="acquisition-content"><?php the_field('acquisition_brokerage'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="consulting">
						<div class="row">
			        		<div class="col-md-offset-1 col-md-10">
			        			<div class="consulting-content"><?php the_field('consulting'); ?></div>
			        		</div>
			        	</div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="lenders" class="about-section">
			<div class="row">
				<div class="lenders-content">
					<?php the_field('lenders'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="contact" class="about-section san-francisco">
			<div role="tabpanel">
			    <!-- Nav tabs -->
			    <ul class="nav nav-tabs" role="tablist">
			        <li role="presentation" class="active">
			            <a href="#san-francisco" aria-controls="san-francisco" role="tab" data-toggle="tab">San Francisco</a>
			        </li>
			        <li role="presentation">
			            <a href="#sacramento" aria-controls="sacramento" role="tab" data-toggle="tab">Sacramento</a>
			        </li>
			        <li role="presentation">
			            <a href="#los-angeles" aria-controls="los-angeles" role="tab" data-toggle="tab">Los Angeles</a>
			        </li>
			        <li role="presentation">
			            <a href="#newport-beach" aria-controls="newport-beach" role="tab" data-toggle="tab">Newport Beach</a>
			        </li>
			        <li role="presentation">
			            <a href="#seattle" aria-controls="seattle" role="tab" data-toggle="tab">Seattle</a>
			        </li>
			        <li role="presentation">
			            <a href="#spokane" aria-controls="spokane" role="tab" data-toggle="tab">Spokane</a>
			        </li>
			        <li role="presentation">
			            <a href="#phoenix" aria-controls="phoenix" role="tab" data-toggle="tab">Phoenix</a>
			        </li>
			        <li role="presentation">
			            <a href="#las-vegas" aria-controls="las-vegas" role="tab" data-toggle="tab">Las Vegas</a>
			        </li>
			    </ul>
			    <!-- Tab panes -->
			    <div class="tab-content">
			        <div role="tabpanel" class="tab-pane fade in active" id="san-francisco">San Francisco</div>
			        <div role="tabpanel" class="tab-pane fade" id="sacramento">Sacramento</div>
			        <div role="tabpanel" class="tab-pane fade" id="los-angeles">Los Angeles</div>
			        <div role="tabpanel" class="tab-pane fade" id="newport-beach">Newport Beach</div>
			        <div role="tabpanel" class="tab-pane fade" id="seattle">Seattle</div>
			        <div role="tabpanel" class="tab-pane fade" id="spokane">Spokane</div>
			        <div role="tabpanel" class="tab-pane fade" id="phoenix">Phoenix</div>
			        <div role="tabpanel" class="tab-pane fade" id="las-vegas">Las Vegas</div>
			    </div>
			</div>
		</div>
	</div>
</div>