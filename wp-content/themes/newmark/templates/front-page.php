<?php
/**
 * Template Name: Home Template
 */
?>

<h2 class="homepage-slogan"><?php the_field('slogan', 'option') ?></h2>
<figure class="homepage-figure"></figure>


<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
  
<?php endwhile; ?>
