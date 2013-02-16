<header id="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?>
        <img src="assets/img/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
    <nav id="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
  </div>
</header>