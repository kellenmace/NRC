<div id="single-producer-page">
<h1 class="page-title">Team</h1>
<a href="<?php bloginfo('url'); ?>/production-team"><p>< &nbsp;Back to production team</p></a>

<div class="row">
	<div class="col-md-3">
		<img class="img-responsive" src="<?php the_post_thumbnail_url('large'); ?>">
	</div>
	<div class="col-md-5">
		<div class="producer-title-box">
			<h2><?php the_title(); ?></h2>
			<h3><?php the_field('title'); ?></h3>
		</div>
	</div>
	<div class="col-md-4">
		<div class="producer-info-box">
			<?php
				$location = get_field('office_location');
				if($location) :
					foreach($location as $l) :
			?>
						<p><?php echo get_field('phone_number', $l->ID); ?></p>
						<p><a href="<?php the_field('vcard'); ?>"><i class="fa fa-envelope-o"> vCard</i></a>
						<p><?php echo get_field('address', $l->ID); ?></p>
					<?php endforeach; ?>
				<?php endif; ?>
		</div>
	</div>
</div>
<div class="producer-tabs">
	<div class="row">
		<div class="col-md-12">
			<div role="tabpanel">
			    <!-- Nav tabs -->
			    <ul class="nav nav-tabs" role="tablist">
			        <li role="presentation" class="active">
			            <a href="#bio" aria-controls="bio" role="tab" data-toggle="tab"><h3>Bio</h3></a>
			        </li>
			        <li role="presentation">
			            <a href="#transactions" aria-controls="transactions" role="tab" data-toggle="tab"><h3>Transactions</h3></a>
			        </li>
			        <li role="presentation">
			            <a href="#resources" aria-controls="resources" role="tab" data-toggle="tab"><h3>Resources</h3></a>
			        </li>
			    </ul>

			    <!-- Tab panes -->
			    <div class="tab-content">
			        <div role="tabpanel" class="tab-pane active" id="bio">
			        	<div class="row">
			        		<div class="col-md-10 col-md-offset-1">
					        	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					        		<p class="producer-bio"><?php the_content(); ?></p>
					        	<?php endwhile; endif; ?>
			        		</div>
			        	</div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="transactions">
			        	<p>transactions</p>
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