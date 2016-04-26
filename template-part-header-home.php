  <div class="flag-banner header-flag"></div>

  <nav class="navbar navbar-default" role="navigation" id="slide-nav">
    <div class="container text-center">
      <div class="navbar-header">
        <a class="navbar-toggle"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <img class="header-logo" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
      </div>

      <?php
      wp_nav_menu( array(
              'theme_location'    => 'main_menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_id'      => 'slidemenu',
              'container_class'   => '',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
      );

      $header_cta_radio = get_theme_mod( 'header_cta_radio' );
      $header_cta_text = get_theme_mod( 'header_cta_text' );
      $header_cta_link = esc_url( get_theme_mod( 'header_cta_link' ) );
      if( $header_cta_radio != '' ) {
        switch ( $header_cta_radio ) {
          case 'value1':
              echo '<a class="header-cta-button btn btn-primary" href="';
              echo $header_cta_link;
              echo '">';
              echo $header_cta_text;
              echo '</a>';
              break;
          case 'value2':
              break;
        }
      } ?>

    </div>
  </nav>

  <div id="page-content">