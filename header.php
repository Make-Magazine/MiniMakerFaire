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
