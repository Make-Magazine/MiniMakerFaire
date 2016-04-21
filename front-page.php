<?php get_header(); ?>

<?php get_template_part('template-part', 'header-home'); ?>

<!-- start content container -->
<div class="body-content">

  <div class="slideshow-panel">

    <div class="header-logo-div text-center" itemprop="event" itemscope itemtype="http://schema.org/Event">
      <?php $faire_location = get_field('faire_location', 22);
      if( $faire_location ): ?>
        <h2 class="event-location" itemprop="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $faire_location ?></h2> <?php
      endif;

      $faire_date = get_field('faire_date', 22);
      if( $faire_date ): ?>
        <h2 class="event-date" itemprop="startDate"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $faire_date ?></h2> <?php
      endif; ?>

      <img class="img-responsive header-logo" src="<?php echo get_theme_mod( 'header_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
      <?php $call_to_action_text = get_field('call_to_action_text', 22);
      if( $call_to_action_text ): ?>
        <h3 class="call_to_action_text"><?php echo $call_to_action_text ?></h3> <?php
      endif; ?>
    </div>

    <?php $images = get_field('image_carousel', 22);
    if( $images ): ?>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php $i = 0;
          foreach( $images as $image ):
            if ($i == 0) { ?>
              <div class="item active">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div> <?php
            } else { ?>
              <div class="item">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div> <?php
            }
            $i++;
          endforeach; ?>
        </div>

        <?php if( $images > 1 ): ?>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <img class="glyphicon-chevron-right" src="<?php echo get_bloginfo('template_directory');?>/img/arrow_left.png" alt="Image Carousel button left" />
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <img class="glyphicon-chevron-right" src="<?php echo get_bloginfo('template_directory');?>/img/arrow_right.png" alt="Image Carousel button right" />
            <span class="sr-only">Next</span>
          </a>
        <?php endif; ?>
      </div><!-- /.carousel -->

    <?php endif; ?>
 
  </div>



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



      // SPONSOR PANEL
      elseif( get_row_layout() == 'sponsors_panel' ): 

        $sponsor_panel_field_1 = get_sub_field('title_sponsor_panel');
        $sponsor_panel_field_2 = get_sub_field('sub_title_sponsor_panel');
        $sponsor_panel_field_3 = get_sub_field('become_a_sponsor_button');

        // check if the nested repeater field has rows of data
        if( have_rows('sponsors', 147) ):

        echo '<div class="sponsor-slide">
                <div class="container">
                  <div class="row sponsor_panel_title">
                    <div class="col-xs-12 text-center">
                      <h2 class="sponsor-slide-title">' . $sponsor_panel_field_1 . '</h2>
                      <div class="hr-red"><hr /></div>
                      <p>' . $sponsor_panel_field_2 . ' <span class="sponsor-slide-cat"></span></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">

                      <div id="carousel-sponsors-slider" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">';

          // loop through the rows of data
          while ( have_rows('sponsors', 147) ) : the_row();

            $sponsor_group_title = get_sub_field('sponsor_group_title'); //Sponsor group title

            if( get_row_layout() == 'sponsors_with_image' ):

              $sub_field_3 = get_sub_field('sponsors_image_size'); //size option

              // check if the nested repeater field has rows of data
              if( have_rows('sponsors_with_image') ):

                echo '<div class="item">
                        <div class="row spnosors-row">
                          <div class="col-xs-12">';
                          if(!empty($sponsor_group_title)){
                            echo '<h5 class="text-center sponsors-type">' . $sponsor_group_title . '</h5>';
                          }
                echo '      <div class="sponsors-box">';

                // loop through the rows of data
                while ( have_rows('sponsors_with_image') ) : the_row();

                  $sub_field_1 = get_sub_field('image'); //Photo
                  $sub_field_2 = get_sub_field('url'); //URL
                  
                  echo '<div class="' . $sub_field_3 . '">';
                  if( get_sub_field('url') ):
                    echo '<a href="' . $sub_field_2 . '" target="_blank">';
                  endif;
                  echo '<img src="' . $sub_field_1 . '" alt="Maker Faire sponsor logo" class="img-responsive" />';
                  if( get_sub_field('url') ):
                    echo '</a>';
                  endif;
                  echo '</div>';

                endwhile;

                echo '      </div>
                          </div>
                        </div>
                      </div>';

              endif;

            endif;

          endwhile;

          echo      '</div>
                  </div>
                </div>
              </div>
              <div class="row sponsor_panel_bottom">
                <div class="col-xs-12 text-center">
                  <p>';
                  if(!empty($sponsor_panel_field_3)){ echo '<a href="' . $sponsor_panel_field_3 . '">Become a Sponsor</a><span>&bull;</span>';}
          echo '<a href="/sponsors">All Sponsors</a></p>
                </div>
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
          <script>jQuery(".sponsor-slide .carousel-inner .item:first-child").addClass("active");
                  jQuery(function() {
                    var title = jQuery(".item.active .sponsors-type").html();
                    jQuery(".sponsor-slide-cat").text(title);
                    jQuery("#carousel-sponsors-slider").on("slid.bs.carousel", function () {
                      var title = jQuery(".item.active .sponsors-type").html();
                      jQuery(".sponsor-slide-cat").text(title);
                    })
                  });</script>';

        endif; //End sponsor page loop

      endif; //End sponsor panel



    endwhile;

  else :

    // no layouts found
    ?> no layout found<?php

  endif;

  ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>

