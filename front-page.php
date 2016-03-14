<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="item active">
        <a href="<?php echo esc_url( get_theme_mod( 'theme_slug_slide_one_link' ) ); ?>">
          <img class="first-slide" src="<?php echo esc_url( get_theme_mod( 'theme_slug_slide_img_upload_one' ) ); ?>" alt="<?php echo get_theme_mod( 'theme_slug_slide_title_1' ); ?>">
        </a>
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo get_theme_mod( 'theme_slug_slide_title_1' ); ?></h1>
              <p><?php echo get_theme_mod( 'theme_slug_slide_text_1' ); ?></p>
            </div>
          </div>
        </div>

        <div class="item">
         <a href="#">
          <img class="second-slide" src="#" alt="Second slide"></a>
          <div class="container">
            <div class="carousel-caption">
              <h1>What PHP code should go here?</h1>
              <p>Can you figure out what goes here?</p>
            </div>
          </div>
        </div>

        <div class="item">
         <a href="#">
          <img class="third-slide" src="#" alt="Third slide"></a>
          <div class="container">
            <div class="carousel-caption">
              <h1>Create a New Theme Customizer Function for This Heading</h1>
              <p>Another function to go here! Just copy and paste the first section of code you just used and rename your functions appropriately.</p>
            </div>
          </div>
        </div>

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

  <div class="col-xs-12 dmbs-main">

  </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>

