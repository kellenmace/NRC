<?php
/**
 * Template Name: News Template
 */
?>
<div id="news-page-wrapper">
<div class="row">
	<div class="col-md-12">
		<h2 class="page-title"><?php echo get_the_title(); ?></h2>
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<div class="news-stories-archive">
			<h2>Other News</h2>
			<div class="archive-divider"></div>
			<?php
				$news_loop = new WP_Query(array('post_type' => 'news', 'posts_per_page' => -1));
				while($news_loop->have_posts()) : $news_loop->the_post();
			?>
			<a href="<?php the_permalink(); ?>">
				<ul class="list-unstyled">
					<li><?php echo get_the_date(); ?></li>
					<li><?php the_title(); ?></li>
				</ul>
			</a>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
	<div class="col-md-8z">
		<?php
			$current_news_loop = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 1));
			while($current_news_loop->have_posts()) : $current_news_loop->the_post();
		?>
			<h1><?php the_title(); ?></h1>
			<p><?php echo get_the_date(); ?></p>
			<p><?php the_content(); ?></p>
		<?php endwhile; wp_reset_postdata(); ?>
		<div class="row">
			<div class="col-xs-5">
				<div class="archive-divider"></div>
			</div>
		</div>
		<h4 class="shared-transaction-responsive">Share this Story</h4>
		<div class="a2a_kit a2a_kit_size_25 a2a_default_style">
			<a class="a2a_button_print"></a>
			<a class="a2a_button_email"></a>
			<a class="a2a_button_twitter"></a>
		</div>
	</div>
</div>
</div>