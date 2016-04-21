<?php get_header(); ?>

<?php get_template_part('template-part', 'header'); ?>

    <!-- start content container -->
    <div class="row">

        <div class="col-md-9">
         <h1><?php _e('Sorry This Page Does Not Exist!','devdmbootstrap3'); ?></h1>
        </div>

        <?php //get the right sidebar ?>
        <?php get_sidebar( 'right' ); ?>

    </div>
    <!-- end content container -->

<?php get_footer(); ?>