<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

  <div class="flag-banner"></div>

  <nav class="navbar navbar-default" role="navigation" id="slide-nav">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-toggle"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      </div>

      <?php
      wp_nav_menu( array(
              'theme_location'    => 'main_menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_id'      => 'slidemenu',
              'container_class'   => 'text-center',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
      );
      ?>
    </div>
  </nav>

<?php endif; ?>

<div id="page-content">