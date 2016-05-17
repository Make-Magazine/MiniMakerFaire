<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>

  <link rel='shortlink' href='<?php echo get_site_url(); ?>' />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/cropped-big-logo.png" />
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/cropped-big-logo-32x32.png" sizes="32x32" />
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/cropped-big-logo-192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/cropped-big-logo-180x180.png" />
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/cropped-big-logo-270x270.png" />
</head>
<body <?php body_class(); ?>>

  <div class="flag-banner header-flag"></div>

      
  <nav class="navbar navbar-default <?php if(!is_page_template( 'page-home.php' )) : ?>nav-not-home<?php endif; ?>" role="navigation" id="slide-nav">
    <div class="container text-center nav-flex">
      <div class="navbar-header">
        <a class="navbar-toggle"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <img class="header-logo" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
      </div>

      <div id="nav-not-home-logo">
        <a href="/">
          <img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
        </a>
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
              echo '<div id="header-cta-button"><a class="btn btn-primary" href="';
              echo $header_cta_link;
              echo '">';
              echo $header_cta_text;
              echo '</a></div>';
              break;
          case 'value2':
              break;
        }
      } ?>

    </div>
  </nav>

  <div id="page-content">
