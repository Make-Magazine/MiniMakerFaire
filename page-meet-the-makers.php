<?php
/*
* Template name: Meet the Makers
*/
get_header(); ?>

<div class="mtm" ng-app="mtm">

  <div class="container">
    <h1 class="text-center"><?php echo get_the_title(); ?></h1>
  </div>

  <div class="mtm-carousel-cont">
    <?php $images = get_field('mtm_image_carousel');
    if( $images ): ?>
      <div class="mtm-carousel owl-carousel">
        <?php foreach( $images as $image ): ?>
            <div class="mtm-car-image" style="background: url('<?php echo $image["url"]; ?>') no-repeat center center;background-size: cover;"></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <a id="left-trigger" class="left carousel-control" href="#" role="button" data-slide="prev">
      <img class="glyphicon-chevron-right" src="<?php echo get_bloginfo('template_directory');?>/img/arrow_left.png" alt="Image Carousel button left" />
      <span class="sr-only">Previous</span>
    </a>
    <a id="right-trigger" class="right carousel-control" href="#" role="button" data-slide="next">
      <img class="glyphicon-chevron-right" src="<?php echo get_bloginfo('template_directory');?>/img/arrow_right.png" alt="Image Carousel button right" />
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
    <h2 class="text-center">Explore our Maker Exhibits!</h2>
  </div>
  <div class="flag-banner"></div>

  <div class="mtm-search">
    <form class="form-inline">
      <label for="mtm-search-input">Search:</label>
      <input ng-model="makerSearch.$" id="mtm-search-input" class="form-control" placeholder="Looking for a specific Exhibit or Maker?" type="text">
      <!--input class="form-control btn-w-ghost" value="GO" type="submit"-->
    </form>
  </div>

  <div ng-controller="mtmMakers">
    <div class="mtm-filter container">
      <div class="mtm-filter-view">
        <span class="mtm-view-by">View by:</span>
        <a href="#" class="mtm-filter-g"><i class="fa fa-picture-o" aria-hidden="true"></i> GALLERY</a>
        <span class="mtm-pipe">|</span>
        <a href="#" class="mtm-filter-l"><i class="fa fa-th-list" aria-hidden="true"></i> LIST</a>
      </div>

      <div class="dropdown">
        <button class="btn btn-link dropdown-toggle" type="button" id="mtm-dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Filter by Topics
          <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </button>
The category is: {{category}}
        <ul class="dropdown-menu" aria-labelledby="mtm-dropdownMenu">
          <li ng-repeat="tag in tags | orderBy: tag"> <a ng-click="setTagFilter(tag)">{{ tag }}</a></li>

        </ul>

      </div>
    </div>

    <div class="mtm-results">
      <div class="mtm-results-cont">
        <article class="mtm-maker" ng-repeat="maker in makers | filter : makerSearch | byCategory:category | limitTo:24" style="background-image: url('{{ maker.large_img_url }}')">
          <h3>{{ maker.name }}</h3>
        </article>

        <div class="clearfix"></div>

      </div>
    </div>
  </div>



</div>

<script>
  // Carousel init
  jQuery('.mtm-carousel').owlCarousel({
    center: true,
    autoWidth:true,
    items:2,
    loop:true,
    margin:0,
    nav:true,
    //navContainer:true,
    autoplay:true,
    autoplayHoverPause:true,
    responsive:{
      600:{
        items:3
      }
    }
  });

  // Carousel left right
  jQuery( "#right-trigger" ).click(function() {
    jQuery( ".owl-next" ).click();
  });
  jQuery( "#left-trigger" ).click(function() {
    jQuery( ".owl-prev" ).click();
  });

  // Gallery and list view
  jQuery(document).ready(function(){
    jQuery(".mtm-filter-l").click( function(event) {
      event.preventDefault();
      jQuery(".mtm-results-cont").addClass("container");
    });
    jQuery(".mtm-filter-g").click( function(event) {
      event.preventDefault();
      jQuery(".mtm-results-cont").removeClass("container");
    });
  });
</script>

<?php get_footer(); ?>
