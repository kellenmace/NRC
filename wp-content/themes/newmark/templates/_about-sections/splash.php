<div class="row">
	<div class="col-md-12">
		<?php
			$ids = get_field('splash_section', false, false);
			$query = new WP_Query(array(
			                            'posts_per_page' 	=> 1,
			                            'post__in'			=> $ids,
			                            'post_type'			=> 'transaction',
			                            'post_status'		=> 'any',
			                            'orderby'			=> 'rand'
			                            )
								 );
		?>
		<?php while($query->have_posts()) : $query->the_post(); ?>
		<div id="splash" class="splash-section" style="background-image: url(<?php $image = get_field('hi-res_image'); if(!empty($image)){ echo $image; } else { echo the_post_thumbnail_url(); } ?>);">
			<div class="row">
				<div class="photo-caption">
					<div class="col-sm-offset-1 col-sm-11">
							<a href="<?php the_permalink(); ?>">
								<h2><?php the_title(); ?></h2>
								<?php
									$state_field = get_field_object('state', $query->ID);
									$state_value = get_field('state', $query->ID);
									$state_label = $state_field['choices'][$state_value];
								?>
								<p><?php the_field('city', $query->ID); ?>, <?php echo $state_label; ?></p>
							</a>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>