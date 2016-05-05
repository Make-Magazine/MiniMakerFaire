<?php
/*
* Template name: Schedule
*/
get_header(); ?>



<div id="page-schedule" class="container" ng-app="schedule">

  <div class="topic-nav">
    <div class="btn-group">
      <button type="button" class="btn btn-b-ghost dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Category <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li class="topic-nav-item-inner activeTopic">
          <div class="topic-nav-item">
            <p>ALL</p>
          </div>
          <div class="active-topic-arrow"></div>
        </li>

        <li class="topic-nav-item-inner">
          <div class="topic-nav-item">
            <p>
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/talk.png" alt="Maker Exhibit Talk Topic Icon" class="img-responsive" />
            Talk</p>
          </div>
          <div class="active-topic-arrow"></div>
        </li>

        <li class="topic-nav-item-inner">
          <div class="topic-nav-item">
            <p>
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/demo.png" alt="Maker Exhibit Demo Topic Icon" class="img-responsive" />
            Demo</p>
          </div>
          <div class="active-topic-arrow"></div>
        </li>

        <li class="topic-nav-item-inner">
          <div class="topic-nav-item">
            <p>
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/workshop.png" alt="Maker Exhibit Workshop Topic Icon" class="img-responsive" />
            Workshop</p>
          </div>
          <div class="active-topic-arrow"></div>
        </li>

        <li class="topic-nav-item-inner">
          <div class="topic-nav-item">
            <p>
              <img src="<?php echo get_bloginfo('template_directory'); ?>/img/performance.png" alt="Maker Exhibit Performance Topic Icon" class="img-responsive" />
            Performance</p>
          </div>
          <div class="active-topic-arrow"></div>
        </li>
      </ul>
    </div>
  </div>

  <div class="day-nav">
    <div class="day-nav-box activeDay">
      <div class="day-nav-item">
        <h2>Education Friday</h2>
      </div>
    </div>
    <div class="day-nav-box">
      <div class="day-nav-item">
        <h2>DAY 1: SATURDAY</h2>
      </div>
    </div>
    <div class="day-nav-box">
      <div class="day-nav-item">
        <h2>DAY 2: SUNDAY</h2>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table schedule-table">
      <thead>
        <tr>
          <th class="schedule-col-1"></th>
          <th class="schedule-col-2">TITLE</th>
          <th class="schedule-col-3">TIME</th>
          <th class="schedule-col-4"><a href="#">STAGE: ALL <i class="fa fa-chevron-down" aria-hidden="true"></i></a></th>
          <th class="schedule-col-5"><a href="#">TYPE <i class="fa fa-chevron-down" aria-hidden="true"></i></a></th>
          <th class="schedule-col-6">TOPICS</th>
        </tr>
      </thead>
      <tbody>
        <!-- FIRST ROW -->
        <tr class="schedule-row">
          <td class="schedule-col-1" scope="row">
            <img src="http://lorempixel.com/400/400/sports/" alt="Maker Faire Exhibit Featured Image" class="img-responsive schedule-fixed-h" />
          </td>
          <td class="schedule-col-2">
            <div class="schedule-fixed-h">
              <h3>The Paper Airplane Guy</h3>
              <p class="schedule-short-d">John Collins, CTO Company X</p>
              <span><a class="quick-view-toggle" href="#">quick view <i class="fa fa-chevron-down" aria-hidden="true"></i></a></span>
            </div>
          </td>
          <td class="schedule-col-3">11:00 AM - 11:30 AM</td>
          <td class="schedule-col-4">CENTER STAGE</td>
          <td class="schedule-col-5">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/workshop.png" alt="Maker Exhibit Robot Topic Icon" class="img-responsive" />
          </td>
          <td class="schedule-col-6">Airplanes, Paper, Crafts</td>
        </tr>
        <!-- FIRST ROW - MORE INFO "QUICK VIEW" -->
        <tr class="quick-view-tr">
          <td class="table-no-border">
          </td>
          <td colspan="5" class="quick-view-td table-no-border">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
            <p><a href="#">full details</a></p>
          </td>
        </tr>

        <!-- NEXT ROW -->
        <tr class="schedule-row">
          <td class="schedule-col-1" scope="row">
            <img src="http://lorempixel.com/400/400/sports/" alt="Maker Faire Exhibit Featured Image" class="img-responsive schedule-fixed-h" />
          </td>
          <td class="schedule-col-2">
            <div class="schedule-fixed-h">
              <h3>The Paper Airplane Guy</h3>
              <p class="schedule-short-d">John Collins, CTO Company X</p>
              <span><a class="quick-view-toggle" href="#">quick view <i class="fa fa-chevron-down" aria-hidden="true"></i></a></span>
            </div>
          </td>
          <td class="schedule-col-3">11:00 AM - 11:30 AM</td>
          <td class="schedule-col-4">CENTER STAGE</td>
          <td class="schedule-col-5">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/workshop.png" alt="Maker Exhibit Robot Topic Icon" class="img-responsive" />
          </td>
          <td class="schedule-col-6">Airplanes, Paper, Crafts</td>
        </tr>
        <!-- FIRST ROW - MORE INFO "QUICK VIEW" -->
        <tr class="quick-view-tr">
          <td class="table-no-border">
          </td>
          <td colspan="5" class="quick-view-td table-no-border">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
            <p><a href="#">full details</a></p>
          </td>
        </tr>

      </tbody>
    </table>
  </div>


</div>

<script>
jQuery( ".quick-view-toggle" ).click(function(event) {
  event.preventDefault();
  jQuery(this).closest(".schedule-row").next(".quick-view-tr").fadeToggle("medium");
});
</script>

<?php get_footer(); ?>