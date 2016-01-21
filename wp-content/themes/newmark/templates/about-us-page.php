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
					<div class="col-md-offset-2 col-md-8">
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
			        		<div class="col-md-offset-2 col-md-8">
			        			<div class="mortgage-content"><?php the_field('mortgage_banking'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="loan-servicing">
			        	<div class="row">
			        		<div class="col-md-offset-2 col-md-8">
			        			<div class="loan-content"><?php the_field('loan_servicing'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="debt-advisory">
						<div class="row">
			        		<div class="col-md-offset-2 col-md-8">
			        			<div class="debt-content"><?php the_field('debt_advisory'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="acquisition-brokerage">
			        	<div class="row">
			        		<div class="col-md-offset-2 col-md-8">
			        			<div class="acquisition-content"><?php the_field('acquisition_brokerage'); ?></div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="consulting">
						<div class="row">
			        		<div class="col-md-offset-2 col-md-8">
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
		<div id="lenders" class="about-section"></div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div id="contact" class="about-section"></div>
	</div>
</div>