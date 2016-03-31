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
    <div class="container what-is-maker-faire">
      <div class="row">
        <h2 class="text-center">What is Maker Faire?</h2>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <p class="text-center">We call it the Greatest Show (& Tell) on Earth. Maker Faire is part science fair, part county fair, and part something entirely new! As a celebration of the Maker Movement, it’s a family-friendly showcase of invention, creativity, and resourcefulness. Faire gathers together tech enthusiasts, crafters, educators, tinkerers, food artisans, hobbyists, engineers, science clubs, artists, students, and commercial exhibitors. Makers come to show their creations and share their learnings. Attendees flock to Maker Faire to glimpse the future and find the inspiration to become Makers themselves.</p>
        </div>
      </div>
    </div>
    <div class="container">
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
    if( have_rows('home_page_panels_field') ):
      ?>hello <?php

      // loop through the rows of data
      while ( have_rows('home_page_panels') ) : the_row();

        // check current row layout
        if( get_row_layout() == 'featured_makers_panel' ):

          // check if the nested repeater field has rows of data
          if( have_rows('featured_makers') ):

            echo '<ul>';

            // loop through the rows of data
            while ( have_rows('featured_makers') ) : the_row();

              $image = get_sub_field('maker_image');

              echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

            endwhile;

            echo '</ul>';

          endif;

        endif;



      endwhile;

    else :

        // no layouts found
      ?> no layout found<?php

    endif;

    ?>

    <!-- CTA Pannel -->
    <div class="container call-to-action">
      <div class="row">
        <div class="col-sm-8">
          <h2>Buy your Maker Faire tickets here!</h2>
        </div>
        <div class="col-sm-4 cta-panel-btn">
          <a class="btn btn-info" href="#">Buy tickets</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <hr class="hr-half" />
        </div>
      </div>
    </div>
    <!-- End CTA Pannel -->

    <!-- Image left and text right info Pannel -->
    <div class="container image-text-panel">
      <div class="row">
        <div class="col-sm-6">
          <img src="http://lorempixel.com/600/350/" alt="" class="img-responsive" />
        </div>
        <div class="col-sm-6">
          <h3>More info about this faire?</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <hr class="hr-half" />
        </div>
      </div>
    </div>
    <!-- End Image left and text right info Pannel -->

    <!-- Image right and text left info Pannel -->
    <div class="container image-text-panel">
      <div class="row">
        <div class="col-sm-6">
          <h3>Even more info about this faire?</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <div class="col-sm-6">
          <img src="http://lorempixel.com/600/350/" alt="" class="img-responsive" />
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <hr class="hr-half" />
        </div>
      </div>
    </div>
    <!-- End Image right and text left info Pannel -->

    <!-- Featured Maker Pannel -->
    <div class="container featured-maker-panel">
      <div class="row">
        <div class="col-xs-12 text-center padbottom">
          <h2>Featured Makers</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-4">
          <a href="http://makercon.com/speaker/minerva-tantoco/">
            <div class="featured-maker-panel-img">
              <img src="http://lorempixel.com/image_output/people-q-c-480-480-1.jpg" class="img-circle img-responsive" alt="">
            </div>
            <div class="text-center">
              <h4>Minerva Tantoco</h4>
              <p>Chief Technology Officer, New York City</p>
            </div>
          </a>
        </div>
        <div class="col-xs-6 col-md-4">
          <a href="http://makercon.com/speaker/minerva-tantoco/">
            <div class="featured-maker-panel-img">
              <img src="http://lorempixel.com/image_output/people-q-c-480-480-1.jpg" class="img-circle img-responsive" alt="">
            </div>
            <div class="text-center">
              <h4>Minerva Tantoco</h4>
              <p>Chief Technology Officer, New York City</p>
            </div>
          </a>
        </div>
        <div class="col-xs-6 col-md-4">
          <a href="http://makercon.com/speaker/minerva-tantoco/">
            <div class="featured-maker-panel-img">
              <img src="http://lorempixel.com/image_output/people-q-c-480-480-1.jpg" class="img-circle img-responsive" alt="">
            </div>
            <div class="text-center">
              <h4>Minerva Tantoco</h4>
              <p>Chief Technology Officer, New York City</p>
            </div>
          </a>
        </div>


      </div>
    </div>

    <!-- Featured Maker Pannel -->

  </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>

