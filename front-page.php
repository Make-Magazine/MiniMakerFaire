<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="dmbs-content">
  <?php
  if(false === get_theme_mod('home_img_carousel_checkbox')) { ?>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">

        <div class="item active">
        <?php $slide_1_link = get_theme_mod('slide_1_link');
        if (!empty($slide_1_link)) :?>
          <a href="<?php echo esc_url( get_theme_mod( 'slide_1_link' ) ); ?>">
        <?php endif; ?>
          <img class="" src="<?php echo esc_url( get_theme_mod( 'slide_img_upload_1' ) ); ?>" alt="<?php echo get_theme_mod( 'slide_title_1' ); ?>">
        <?php $slide_1_link = get_theme_mod('slide_1_link');
        if (!empty($slide_1_link)) :?>
          </a>
        <?php endif; ?>
          <div class="container">
            <div class="carousel-caption">
                <?php $slide_title_1 = get_theme_mod('slide_title_1');
                if (!empty($slide_title_1)) :?>
                  <h1><?php echo $slide_title_1; ?></h1>
                <?php endif; ?>
                <?php $slide_text_1 = get_theme_mod('slide_text_1');
                if (!empty($slide_text_1)) :?>
                  <p><?php echo $slide_text_1; ?></p>
                <?php endif; ?>
            </div>
          </div>
        </div>

        <?php
        if(false === get_theme_mod('slide_img_upload_2_checkbox')) { ?>
          <div class="item">
            <?php $slide_1_link = get_theme_mod('slide_1_link');
            if (!empty($slide_1_link)) :?>
              <a href="<?php echo esc_url( get_theme_mod( 'slide_1_link' ) ); ?>">
            <?php endif; ?>
              <img class="" src="<?php echo esc_url( get_theme_mod( 'slide_img_upload_1' ) ); ?>" alt="<?php echo get_theme_mod( 'slide_title_1' ); ?>">
            <?php $slide_1_link = get_theme_mod('slide_1_link');
            if (!empty($slide_1_link)) :?>
              </a>
            <?php endif; ?>
            <div class="container">
              <div class="carousel-caption">
                <?php $slide_title_2 = get_theme_mod('slide_title_2');
                if (!empty($slide_title_2)) :?>
                  <h1><?php echo $slide_title_2; ?></h1>
                <?php endif; ?>
                <?php $slide_text_2 = get_theme_mod('slide_text_2');
                if (!empty($slide_text_2)) :?>
                  <p><?php echo $slide_text_2; ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php
        if(false === get_theme_mod('slide_img_upload_3_checkbox')) { ?>
          <div class="item">
            <?php $slide_3_link = get_theme_mod('slide_3_link');
            if (!empty($slide_3_link)) :?>
              <a href="<?php echo esc_url( get_theme_mod( 'slide_3_link' ) ); ?>">
            <?php endif; ?>
              <img class="" src="<?php echo esc_url( get_theme_mod( 'slide_img_upload_3' ) ); ?>" alt="<?php echo get_theme_mod( 'slide_title_3' ); ?>">
            <?php $slide_3_link = get_theme_mod('slide_3_link');
            if (!empty($slide_3_link)) :?>
              </a>
            <?php endif; ?>
            <div class="container">
              <div class="carousel-caption">
                <?php $slide_title_3 = get_theme_mod('slide_title_3');
                if (!empty($slide_title_3)) :?>
                  <h1><?php echo $slide_title_3; ?></h1>
                <?php endif; ?>
                <?php $slide_text_3 = get_theme_mod('slide_text_3');
                if (!empty($slide_text_3)) :?>
                  <p><?php echo $slide_text_3; ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
  </div>
  <?php } ?>

  <div class="dmbs-main">

    <?php if(false === get_theme_mod('hompage_wimf_checkbox')) { ?>
    <!-- WIMF Pannel -->
    <div class="container std-panel what-is-maker-faire">
      <div class="row">
        <h2 class="text-center">What is Maker Faire?</h2>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <p class="text-center">We call it the Greatest Show (& Tell) on Earth. Maker Faire is part science fair, part county fair, and part something entirely new! As a celebration of the Maker Movement, it’s a family-friendly showcase of invention, creativity, and resourcefulness. Faire gathers together tech enthusiasts, crafters, educators, tinkerers, food artisans, hobbyists, engineers, science clubs, artists, students, and commercial exhibitors. Makers come to show their creations and share their learnings. Attendees flock to Maker Faire to glimpse the future and find the inspiration to become Makers themselves.</p>
        </div>
      </div>
    </div>
    <div class="container panel-hr">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <hr class="hr-half" />
        </div>
      </div>
    </div>
    <!-- End WIMF Pannel -->
    <?php } ?>

    <?php

    // check if the flexible content field has rows of data
    if( have_rows('home_page_panels', 22)):

      // loop through the rows of data
      while ( have_rows('home_page_panels', 22) ) : the_row();



        // FEATURED MAKERS
        if( get_row_layout() == 'featured_makers_panel' ):

          // check if the nested repeater field has rows of data
          if( have_rows('featured_makers') ):

            echo '<div class="container std-panel"><div class="row">';
            if(get_sub_field('title')){
              echo '<div class="col-xs-12 text-center padbottom"><h2>' . get_sub_field('title') . '</h2></div>';
            }

            ?><div class="col-xs-12 text-center padbottom"><h2>Featurd Makers</h2></div><?php

            // loop through the rows of data
            while ( have_rows('featured_makers') ) : the_row();

              $image = get_sub_field('maker_image');

              echo '<div class="col-xs-6 col-sm-4 text-center">
                      <img class="img-circle img-responsive" style="margin-left: auto;margin-right: auto;" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />
                      <br />
                      <div class="text-center">
                        <h4>Minerva Tantoco</h4>
                        <p>Chief Technology Officer, New York City</p>
                      </div>
                    </div>';

            endwhile;

            echo '</div></div>
                  <div class="container panel-hr">
                    <div class="row">
                      <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                        <hr class="hr-half" />
                      </div>
                    </div>
                  </div>';

          endif;



        // RECENT POSTS
        elseif( get_row_layout() == 'post_feed' ): 

          $post_feed_quantity = get_sub_field('post_quantity');
          $args = array( 'numberposts' => $post_feed_quantity, 'post_status' => 'publish' );
          $recent_posts = wp_get_recent_posts( $args );

          echo '<div class="container std-panel recent-post-panel"><div class="row">';

          if(get_sub_field('title')){
            echo '<div class="col-xs-12 text-center padbottom"><h2>' . get_sub_field('title') . '</h2></div>';
          }

          foreach( $recent_posts as $recent ){
            echo '<div class="col-xs-6 col-sm-4">
                    <a href="' . get_permalink($recent["ID"]) . '">';
                    if ( has_post_thumbnail() ) {
                      $thumb_id = get_post_thumbnail_id($recent['ID']);
                      $url = wp_get_attachment_url($thumb_id);
                      echo "<div class='recent-post-img'><img src='".$url."' class='img-responsive' /></div>";
                    }

            echo   '<h4>' . $recent["post_title"] . '</h4>
                    <p>' . substr($recent["post_content"], 0 , 150) . '...</p>
                    <p><strong>Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></strong></p>
                    </a>
                  </div>';
          }

          echo '</div></div>
                <div class="container panel-hr">
                  <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                      <hr class="hr-half" />
                    </div>
                  </div>
                </div>';


        // 2 COLUMN LAYOUT
        elseif( get_row_layout() == '2_column_photo_and_text_panel' ): 

          $column_1 = get_sub_field('column_1');
          $column_2 = get_sub_field('column_2');
          echo '<div class="container std-panel"><div class="row">';
          if(get_sub_field('title')){
            echo '<div class="col-xs-12 text-center padbottom"><h2>' . get_sub_field('title') . '</h2></div>';
          }
          echo '<div class="col-sm-6">' . $column_1 . '</div>';
          echo '<div class="col-sm-6">' . $column_2 . '</div>';

          echo '</div></div>
                <div class="container panel-hr">
                  <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                      <hr class="hr-half" />
                    </div>
                  </div>
                </div>';


        // WIDGET AREA
        elseif( get_row_layout() == 'widget_area_1' ):

          $widget_radio = get_sub_field('show_widget_area_1');
          if( $widget_radio == 'show' ):
            dynamic_sidebar( 'page_widget_area_1' );
          endif;

        endif;



      endwhile;

    else :

      // no layouts found
      ?> no layout found<?php

    endif;

    ?>

  </div><!-- end dmbs-main -->

</div>
<!-- end content container -->

<?php get_footer(); ?>

