<?php get_header(); ?>

<?php get_template_part('template-part', 'header'); ?>

<div id="error-page" class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 cust-cls-100">
      <h1>404</h1>
    </div>
    <div class="col-xs-12 col-sm-6 cust-cls-100">
      <div id="error-text">
        <h3>Page not found</h3>
        <p id="p-error2">Looks like that link is broken. This might be because you mistyped the URL, we moved a file, or you're following a bad link.</p>
      </div>
    </div>
    <div class="col-xs-12">
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <p id="blue">
        <a href="javascript:history.back()">Go Back </a>/
        <a href="/">Go to Home Page </a>/
        <a href="/contact">Contact Us</a>
        </p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>