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
			    <?php $newmark_email = "info@newmarkrealtycapital.com"; ?>
			    <div class="tab-content">
			        <div role="tabpanel" class="tab-pane fade in active" id="san-francisco">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 52;
										$sf = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
										$staff_contacts = get_field_object('field_56a2b2d464a37', $post_id);
									?>
										<h3 class="location-title"><?php echo $sf->post_title; ?> - Headquarters</h3>
										<ul class="list-unstyled">
											<li><?php echo $address['value']; ?></li>
											<li>Phone <?php echo $phone_number['value']; ?></li>
											<li>Fax <?php echo $fax_number['value']; ?></li>
											<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
											<br>
											<li>If interested in a career at Newmark, please email<br>
											<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										</ul>
									</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4">
			        			<div class="staff-contacts-info-box">
			        				<!-- TODO: Repeat all staff contacts per post -->
			        				<?php echo $staff_contacts['value']; ?>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="sacramento">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 144;
										$sac = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
									?>
									<h3 class="location-title"><?php echo $sac->post_title; ?></h3>
									<ul class="list-unstyled">
										<li><?php echo $address['value']; ?></li>
										<li>Phone <?php echo $phone_number['value']; ?></li>
										<li>Fax <?php echo $fax_number['value']; ?></li>
										<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										<br>
										<li>If interested in a career at Newmark, please email<br>
										<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
									</ul>
								</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4"></div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="los-angeles">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 146;
										$la = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
									?>
									<h3 class="location-title"><?php echo $la->post_title; ?></h3>
									<ul class="list-unstyled">
										<li><?php echo $address['value']; ?></li>
										<li>Phone <?php echo $phone_number['value']; ?></li>
										<li>Fax <?php echo $fax_number['value']; ?></li>
										<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										<br>
										<li>If interested in a career at Newmark, please email<br>
										<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
									</ul>
								</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4"></div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="newport-beach">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 147;
										$nb = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
									?>
									<h3 class="location-title"><?php echo $nb->post_title; ?></h3>
									<ul class="list-unstyled">
										<li><?php echo $address['value']; ?></li>
										<li>Phone <?php echo $phone_number['value']; ?></li>
										<li>Fax <?php echo $fax_number['value']; ?></li>
										<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										<br>
										<li>If interested in a career at Newmark, please email<br>
										<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
									</ul>
								</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4"></div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="seattle">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 148;
										$sea = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
									?>
									<h3 class="location-title"><?php echo $sea->post_title; ?></h3>
									<ul class="list-unstyled">
										<li><?php echo $address['value']; ?></li>
										<li>Phone <?php echo $phone_number['value']; ?></li>
										<li>Fax <?php echo $fax_number['value']; ?></li>
										<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										<br>
										<li>If interested in a career at Newmark, please email<br>
										<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
									</ul>
								</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4"></div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="spokane">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 150;
										$spo = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
									?>
									<h3 class="location-title"><?php echo $spo->post_title; ?></h3>
									<ul class="list-unstyled">
										<li><?php echo $address['value']; ?></li>
										<li>Phone <?php echo $phone_number['value']; ?></li>
										<li>Fax <?php echo $fax_number['value']; ?></li>
										<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										<br>
										<li>If interested in a career at Newmark, please email<br>
										<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
									</ul>
								</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4"></div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="phoenix">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 151;
										$pho = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
									?>
									<h3 class="location-title"><?php echo $pho->post_title; ?></h3>
									<ul class="list-unstyled">
										<li><?php echo $address['value']; ?></li>
										<li>Phone <?php echo $phone_number['value']; ?></li>
										<li>Fax <?php echo $fax_number['value']; ?></li>
										<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										<br>
										<li>If interested in a career at Newmark, please email<br>
										<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
									</ul>
								</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4"></div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane fade" id="las-vegas">
			        	<div class="row">
			        		<div class="col-md-offset-1 col-md-4">
			        			<div class="location-info-box">
									<?php
										$post_id = 152;
										$lv = get_post($post_id);
										$address = get_field_object('field_56942bb523e31', $post_id);
										$phone_number = get_field_object('field_56942c317fbe6', $post_id);
										$fax_number = get_field_object('field_569d0d1a1a67d', $post_id);
									?>
									<h3 class="location-title"><?php echo $lv->post_title; ?></h3>
									<ul class="list-unstyled">
										<li><?php echo $address['value']; ?></li>
										<li>Phone <?php echo $phone_number['value']; ?></li>
										<li>Fax <?php echo $fax_number['value']; ?></li>
										<li><a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
										<br>
										<li>If interested in a career at Newmark, please email<br>
										<a href="mailto:<?php echo $newmark_email; ?>"><?php echo $newmark_email ?></a></li>
									</ul>
								</div>
			        		</div>
			        		<div class="col-md-offset-2 col-md-4"></div>
			        	</div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>