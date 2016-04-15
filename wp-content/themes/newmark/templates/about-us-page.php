<?php
/**
 * Template Name: About Us Template
 */
?>

<div class="about-us-page-wrap">

	<?php include('_about-sections/splash.php'); ?>
	<div class="inner-container">
		<div class="col-md-12">
			<div class="about-us-fixed-nav">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#about-newmark">About</a></li>
					<li><a href="#transactions-and-rates"><span class="go-all-screens">Transactions and Rates</span><span class="go-iPhone-5-portrait">Transactions</span></a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#lenders">Lenders</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<?php include('_about-sections/about-section.php'); ?>
	<?php include('_about-sections/transactions-and-rates.php'); ?>
	<?php include('_about-sections/services.php'); ?>
	<?php include('_about-sections/lenders.php'); ?>
	<?php include('_about-sections/contact.php'); ?>
</div>