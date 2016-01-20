<header class="banner">
  <nav class="navbar nav-primary navbar-fixed-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#newmark-nav">
              <span class="sr-only"></span>
              <span class="menu-bars"></span>
            </button>
              <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"> <img class="img-responsive" src="<?php the_field('logo', 'option') ?>" alt="Newmark Realty Capital"></a>
          </div>
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' =>'newmark-nav',
                        'menu_class' => 'nav navbar-nav navbar-right'
                        ]);
          endif;
          ?>
        </div>
      </div>
    </div>
  </nav>
</header>
