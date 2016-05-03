<?php
/*
* Template name: Blank Page
*/
get_header();

get_template_part('template-part', 'header'); ?>

<!-- start content container -->
<div class="container">

    <div class="row">

        <div class="col-xs-12">

            <?php // theloop
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h2 class="page-header"><?php the_title() ;?></h2>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php comments_template(); ?>

            <?php endwhile; ?>
            <?php else: ?>

                <?php get_404_template(); ?>

            <?php endif; ?>

        </div>

    </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>
