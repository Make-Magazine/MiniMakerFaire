<?php
/*
* Template name: Schedule
*/
get_header(); ?>



<div id="page-schedule" class="container" ng-app="schedule">

  <div class="topic-nav">
    <div class="topic-nav-item-inner activeTopic">
      <div class="topic-nav-item">
        <p>ALL</p>
      </div>
      <div class="active-topic-arrow"></div>
    </div>
    <div class="topic-nav-item-inner">
      <div class="topic-nav-item">
        <p>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/mic.png" alt="Maker Exhibit Talk Topic Icon" class="img-responsive" />
        Talk</p>
      </div>
      <div class="active-topic-arrow"></div>
    </div>
    <div class="topic-nav-item-inner">
      <div class="topic-nav-item">
        <p>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/demo.png" alt="Maker Exhibit Demo Topic Icon" class="img-responsive" />
        Demo</p>
      </div>
      <div class="active-topic-arrow"></div>
    </div>
    <div class="topic-nav-item-inner">
      <div class="topic-nav-item">
        <p>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/robot.png" alt="Maker Exhibit Workshop Topic Icon" class="img-responsive" />
        Workshop</p>
      </div>
      <div class="active-topic-arrow"></div>
    </div>
    <div class="topic-nav-item-inner">
      <div class="topic-nav-item">
        <p>
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/drones.png" alt="Maker Exhibit Performance Topic Icon" class="img-responsive" />
        Performance</p>
      </div>
      <div class="active-topic-arrow"></div>
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

  <table class="table schedule-table">
    <thead>
      <tr>
        <th class="schedule-col-1"></th>
        <th class="schedule-col-2">TITLE</th>
        <th class="schedule-col-3">TIME</th>
        <th class="schedule-col-4">STAGE: ALL <i class="fa fa-chevron-down" aria-hidden="true"></i></th>
        <th class="schedule-col-5">TYPE <i class="fa fa-chevron-down" aria-hidden="true"></i></th>
        <th class="schedule-col-6">TOPICS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="schedule-col-1" scope="row">
          <img src="http://lorempixel.com/400/400/sports/" alt="Maker Faire Exhibit Featured Image" class="img-responsive schedule-fixed-h" />
        </td>
        <td class="schedule-col-2">
          <div class="schedule-fixed-h">
            <h3>The Paper Airplane Guy</h3>
            <p class="schedule-short-d">John Collins, CTO Company X</p>
            <span>quick view <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
          </div>
        </td>
        <td class="schedule-col-3">11:00 AM - 11:30 AM</td>
        <td class="schedule-col-4">CENTER STAGE</td>
        <td class="schedule-col-5">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/robot.png" alt="Maker Exhibit Robot Topic Icon" class="img-responsive" />
        </td>
        <td class="schedule-col-6">Airplanes, Paper, Crafts</td>
      </tr>
      <tr>
        <td class="schedule-col-1" scope="row">
          <img src="http://lorempixel.com/400/400/sports/" alt="Maker Faire Exhibit Featured Image" class="img-responsive schedule-fixed-h" />
        </td>
        <td class="schedule-col-2">
          <div class="schedule-fixed-h">
            <h3>The Paper Airplane Guy</h3>
            <p class="schedule-short-d">John Collins, CTO Company X</p>
            <span>quick view <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
          </div>
        </td>
        <td class="schedule-col-3">11:00 AM - 11:30 AM</td>
        <td class="schedule-col-4">CENTER STAGE</td>
        <td class="schedule-col-5">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/robot.png" alt="Maker Exhibit Robot Topic Icon" class="img-responsive" />
        </td>
        <td class="schedule-col-6">Airplanes, Paper, Crafts</td>
      </tr>
    </tbody>
  </table>


</div>

<?php get_footer(); ?>