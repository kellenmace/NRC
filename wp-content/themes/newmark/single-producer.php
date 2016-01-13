<h1 class="page-title">Team</h1>
<a href="<?php bloginfo('url'); ?>/production-team"><p>< &nbsp;Back to production team</p></a>

<div class="row">
	<div class="col-md-3">
		<img class="img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>">
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
						<h3><?php echo get_field('phone_number', $l->ID); ?></h3>
					<?php endforeach; ?>
				<?php endif; ?>
		</div>
	</div>
</div>