<?php
/*
* Template name: Sponsors Page
*/
get_header(); ?>

<div class="container sponsors-landing">

  <div class="row padbottom">
    <div class="col-xs-12">
      <h2 class="pull-left"><?php echo get_the_title(); ?></h2>

      <?php
      if(get_field('become_sponsor_url')) {
        echo '<a class="sponsors-btn-top" href="/sponsors">BECOME A SPONSOR</a>';
      } ?>

    </div>
  </div>

    <?php
    // check if the flexible content field has rows of data
    if( have_rows('sponsors')):

      // loop through the rows of data
      while ( have_rows('sponsors')) : the_row();

        if( get_row_layout() == 'sponsors_with_image' ):

          echo '<div class="row spnosors-row"><div class="col-xs-12">';

          if(get_sub_field('sponsor_group_title')){
            echo '<h2 class="text-center sponsors-type">' . get_sub_field('sponsor_group_title') . '</h2>';
          }

          $sub_field_3 = get_sub_field('sponsors_image_size'); //size option

          // check if the nested repeater field has rows of data
          if( have_rows('sponsors_with_image') ):

            echo '<div class="sponsors-box">';

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

            echo '</div>';

          endif;

        echo '</div></div>';

        // Text Sponsors
        elseif( get_row_layout() == 'sponsors_with_text' ):

          echo '<div class="row spnosors-row"><div class="col-xs-12">';

          if(get_sub_field('sponsor_group_title')){
            echo '<h2 class="text-center sponsors-type">' . get_sub_field('sponsor_group_title') . '</h2>';
          }

          // check if the nested repeater field has rows of data
          if( have_rows('sponsors_with_text') ):

            echo '<div class="sponsors-text-box">';

            // loop through the rows of data
            while ( have_rows('sponsors_with_text') ) : the_row();

              $sub_field_1 = get_sub_field('sponsor_name'); //Photo
              $sub_field_2 = get_sub_field('url'); //URL
              
              echo '<div class="sponsors-text-box-inner">';
              if( get_sub_field('url') ):
                echo '<a href="' . $sub_field_2 . '" target="_blank">';
              endif;
              echo '<p>' . $sub_field_1 . '</p>';
              if( get_sub_field('url') ):
                echo '</a>';
              endif;
              echo '</div>';

            endwhile;

            echo '</div>';

          endif;

        echo '</div></div>';

        endif;

      endwhile;

    else :

      // no sponsors found
      ?> no sponsors found<?php

    endif; // End Sonsors rows

    if(get_field('become_sponsor_url')) {
      echo '<div class="row">
              <div class="col-xs-12 text-center">
                <a class="sponsors-btn-bottom" href="' . get_field('become_sponsor_url') . '">BECOME A SPONSOR</a>
              </div>
            </div>';
    }
    ?>

</div>

<?php get_footer(); ?>