<?php get_header(); ?>

<?php get_template_part('template-part', 'header-home');

  // Get the home page ID
  if ( FALSE === get_post_status( 22 ) ) {
    $home_ID = 69;
  } else {
    $home_ID = 22;
  } 

  // Get the sponsors template page ID
  $sponsor_pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-sponsors.php'
  ));
  foreach($sponsor_pages as $sponsor_page){
    $sponsor_ID = $sponsor_page->ID;
  }
?>

  <section class="slideshow-panel">

    <div class="header-logo-div text-center" itemprop="event" itemscope itemtype="http://schema.org/Event">
      <?php $faire_location = get_field('faire_location', $home_ID);
      if( $faire_location ): ?>
        <h2 class="event-location" itemprop="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $faire_location ?></h2> <?php
      endif;

      $faire_date = get_field('faire_date', $home_ID);
      if( $faire_date ): ?>
        <h2 class="event-date" itemprop="startDate"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $faire_date ?></h2> <?php
      endif; ?>

      <img class="img-responsive header-logo" src="<?php echo get_theme_mod( 'header_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
      <?php $call_to_action_text = get_field('call_to_action_text', $home_ID);
            $call_to_action_text_url = get_field('call_to_action_text_url', $home_ID);
      if( $call_to_action_text ):
        if( $call_to_action_text_url ): ?>
          <a href="<?php echo $call_to_action_text_url ?>">
        <?php endif; ?>
        <h3 class="call_to_action_text"><?php echo $call_to_action_text ?></h3> <?php
        if( $call_to_action_text_url ): ?>
          </a>
        <?php endif;
      endif; ?>
    </div>

    <?php $images = get_field('image_carousel', $home_ID);
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
 
  </section>


  <?php

  // check if the flexible content field has rows of data
  if( have_rows('home_page_panels', $home_ID)):

    // loop through the rows of data
    while ( have_rows('home_page_panels', $home_ID) ) : the_row();



      // FEATURED MAKERS
      if( get_row_layout() == 'featured_makers_panel' ):

        $makers_to_show = get_sub_field('makers_to_show');
        $more_makers_button = get_sub_field('more_makers_button');

        $activeinactive = get_sub_field('activeinactive');
        if( $activeinactive == 'Active' ):

          echo '<section class="featured-maker-panel"><div class="container">';
          if(get_sub_field('title')){
            echo '<div class="row text-center">
                    <div class="title-w-border-y">
                      <h2>' . get_sub_field('title') . '</h2>
                    </div>
                  </div>';
          }

          // check if the nested repeater field has rows of data
          if( have_rows('featured_makers') ):

            echo '<div class="row padbottom">';

            // loop through the rows of data
            while ( have_rows('featured_makers') ) : the_row();

              $image = get_sub_field('maker_image');
              $maker = get_sub_field('maker_name');
              $decription = get_sub_field('maker_short_description');

              echo '<div class="featured-maker col-xs-6 col-sm-3">
                      <div class="maker-img" style="background-image: url(' . $image["url"] . ');">
                      </div>
                      <div class="maker-panel-text">
                        <h4>' . $maker . '</h4>
                        <p class="hidden-xs">' . $decription . '</p>
                      </div>
                    </div>';

            endwhile;

            echo '</div>';

            if(get_sub_field('more_makers_button')){
              echo '<div class="row padbottom">
                      <div class="col-xs-12 padbottom text-center">
                        <a class="btn btn-w-ghost" href="' . $more_makers_button . '">More Makers</a>
                      </div>
                    </div>';
            }

            echo '</div><div class="flag-banner"></div></section>';

          endif;

        endif;




      // RECENT POSTS
      elseif( get_row_layout() == 'post_feed' ): 

        $activeinactive = get_sub_field('activeinactive');
        if( $activeinactive == 'Active' ):

          $post_feed_quantity = get_sub_field('post_quantity');
          $args = array( 'numberposts' => $post_feed_quantity, 'post_status' => 'publish' );
          $recent_posts = wp_get_recent_posts( $args );

          echo '<section class="recent-post-panel"><div class="container">';

          if(get_sub_field('title')){
            echo '<div class="row padbottom text-center">
                    <img class="robot-head" src="' . get_bloginfo("template_directory") . '/img/news_robot.png" alt="Robot head icon" />
                    <div class="title-w-border-r">
                      <h2>' . get_sub_field('title') . '</h2>
                    </div>
                  </div>';
          }

          echo '<div class="row">';

          foreach( $recent_posts as $recent ){
            echo '<div class="recent-post-post col-xs-12 col-sm-3">
                    <article class="recent-post-inner">
                      <a href="' . get_permalink($recent["ID"]) . '">';
                      if ( has_post_thumbnail() ) {
                        $thumb_id = get_post_thumbnail_id($recent['ID']);
                        $url = wp_get_attachment_url($thumb_id);
                        echo "<div class='recent-post-img' style='background-image: url(" . $url . ");'></div>";
                      }

            echo  '     <div class="recent-post-text">
                          <h4>' . $recent["post_title"] . '</h4>
                          <p class="recent-post-date">' . mysql2date('M j, Y',  $recent["post_date"]) . '</p>
                          <p class="recent-post-descripton">' . substr($recent["post_content"], 0 , 150) . '</p>
                        </div>
                      </a>
                    </article>
                  </div>';
          }

          echo '<div class="col-xs-12 padtop padbottom text-center">
                  <a class="btn btn-b-ghost" href="/blog">More News</a>
                </div>';

          echo '</div></div><div class="flag-banner"></div></section>';

        endif;




      // 2 COLUMN LAYOUT
      elseif( get_row_layout() == '2_column_photo_and_text_panel' ): 

        $activeinactive = get_sub_field('activeinactive');
        if( $activeinactive == 'Active' ):

          $column_1 = get_sub_field('column_1');
          $column_2 = get_sub_field('column_2');
          $cta_button = get_sub_field('cta_button');
          $cta_button_url = get_sub_field('cta_button_url');
          echo '<section class="content-panel">
                  <div class="container">';

          if(get_sub_field('title')){
            echo '  <div class="row">
                      <div class="col-xs-12 text-center padbottom">
                        <h2>' . get_sub_field('title') . '</h2>
                      </div>
                    </div>';
          }

          echo '    <div class="row">
                      <div class="col-sm-6">' . $column_1 . '</div>
                      <div class="col-sm-6">' . $column_2 . '</div>
                    </div>';

          if(get_sub_field('cta_button')){
            echo '  <div class="row text-center padtop">
                      <a class="btn btn-b-ghost" href="' . $cta_button_url . '">' . $cta_button . '</a>
                    </div>';
          }

          echo '  </div>
                  <div class="flag-banner"></div>
                </section>';

        endif;




      // WHAT IS MAKER FAIRE PANEL
      elseif( get_row_layout() == 'what_is_maker_faire' ):

        $widget_radio = get_sub_field('show_what_is_maker_faire');
        if( $widget_radio == 'show' ):
          echo '<section class="what-is-maker-faire">
                  <div class="container">
                    <div class="row text-center">
                      <div class="title-w-border-y">
                        <h2>What is Maker Faire?</h2>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                        <p class="text-center">We call it the Greatest Show (& Tell) on Earth. Maker Faire is part science fair, part county fair, and part something entirely new! As a celebration of the Maker Movement, it’s a family-friendly showcase of invention, creativity, and resourcefulness. Faire gathers together tech enthusiasts, crafters, educators, tinkerers, food artisans, hobbyists, engineers, science clubs, artists, students, and commercial exhibitors. Makers come to show their creations and share their learnings. Attendees flock to Maker Faire to glimpse the future and find the inspiration to become Makers themselves.</p>
                      </div>
                    </div>
                  </div>
                  <div class="wimf-border">
                    <div class="wimf-triangle"></div>
                  </div>
                  <img src="' . get_bloginfo('template_directory') . '/img/makey.png" alt="Maker Faire information Makey icon" />
                </section>';
        endif;




      // CTA PANEL
      elseif( get_row_layout() == 'call_to_action_panel' ):

        $activeinactive = get_sub_field('activeinactive');
        if( $activeinactive == 'Active' ):

          $cta_title = get_sub_field('text');
          $cta_url = get_sub_field('url');
          echo '<section class="cta-panel">
                  <div class="container">
                    <div class="row text-center">
                      <div class="col-xs-12">
                        <h3><a href="' . $cta_url . '">' . $cta_title . ' <i class="fa fa-chevron-right" aria-hidden="true"></i></a></h3>
                      </div>
                    </div>
                  </div>
                </section>';

        endif;




      // SPONSOR PANEL
      elseif( get_row_layout() == 'sponsors_panel' ): 

        $activeinactive = get_sub_field('activeinactive');
        if( $activeinactive == 'Active' ):

          $sponsor_panel_field_1 = get_sub_field('title_sponsor_panel');
          $sponsor_panel_field_2 = get_sub_field('sub_title_sponsor_panel');
          $sponsor_panel_field_3 = get_sub_field('become_a_sponsor_button');

          // check if the nested repeater field has rows of data
          if( have_rows('sponsors', $sponsor_ID) ):

          echo '<section class="sponsor-slide">
                  <div class="container">
                    <div class="row sponsor_panel_title">
                      <div class="col-xs-12 text-center">
                        <div class="title-w-border-r">
                          <h2 class="sponsor-slide-title">' . $sponsor_panel_field_1 . '</h2>
                        </div>
                        <p>' . $sponsor_panel_field_2 . ' <span class="sponsor-slide-cat"></span></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12">

                        <div id="carousel-sponsors-slider" class="carousel slide" data-ride="carousel">
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">';

            // loop through the rows of data
            while ( have_rows('sponsors', $sponsor_ID) ) : the_row();

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

                endif; // end if image

              endif; // end row layout

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
            </section>
            <script>jQuery(".sponsor-slide .carousel-inner .item:first-child").addClass("active");
                    jQuery(function() {
                      var title = jQuery(".item.active .sponsors-type").html();
                      jQuery(".sponsor-slide-cat").text(title);
                      jQuery("#carousel-sponsors-slider").on("slid.bs.carousel", function () {
                        var title = jQuery(".item.active .sponsors-type").html();
                        jQuery(".sponsor-slide-cat").text(title);
                      })
                    });</script>';

          endif; //End have rows sponsors

        endif; //End active/inactive sponsors




      endif; //End flex content. Get row layout.

    endwhile;

  else :

    // no layouts found
    ?> no layout found<?php

  endif;

  ?>



  <?php // FIND OUT MORE PANEL ?>
  <aside class="fom-panel">
    <div class="container">
      <div class="row text-center">
        <div class="title-w-border-y">
          <h2 class="text-center">Find Out More</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6 col-sm-4 text-center">
          <a href="//help.makermedia.com/hc/en-us/categories/200341459-Make-Magazine" target="_blank">
            <img src="http://lorempixel.com/600/600/" alt="Click here to get subscritions to Make: Magazine" class="img-responsive" />
            <p>Get Make: Magazine</p>
          </a>
        </div>
        <div class="col-xs-6 col-sm-4 text-center">
          <a href="//makerfaire.com/map/" target="_blank">
            <img src="http://lorempixel.com/600/600/" alt="Click here to see our global Maker Faires" class="img-responsive" />
            <p>Global Maker Faires</p>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 text-center">
          <img src="http://lorempixel.com/600/600/" class="img-responsive" />
        </div>
      </div>
    </div>
  </aside>


  <?php // NEWSLETTER PANEL ?>
  <section class="newsletter-panel">
    <div class="container">

      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <p><strong>Stay in Touch:</strong> Get Global, Local, and Global Maker Faire Community updates.</p>
        </div>
        <div class="col-xs-12 col-sm-6">
          <form class="form-inline">
            <input class="form-control nl-panel-input" name="email" placeholder="Enter your email" type="email" required>
            <input class="form-control btn-w-ghost" value="GO" type="submit">
          </form>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
