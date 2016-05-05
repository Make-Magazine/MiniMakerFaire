<?php
/*
* Template name: Blog
*/

get_header(); ?>

  <div class="container">

    <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

    <?php if( have_posts() ): ?>

      <?php while( have_posts() ): the_post(); ?>

        <div class="row">

          <div id="post-<?php get_the_ID(); ?>" <?php post_class('col-xs-12 padbottom padtop'); ?>>

            <div class="row">

              <div class="col-sm-4">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(400,420) ); ?></a>
              </div>

              <div class="col-sm-8">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <span class="meta">
                  <strong><?php the_time('F jS, Y'); ?></strong>
                </span>

                <?php the_excerpt(__('Continue reading »','example')); ?>

              </div>

            </div>

          </div>

        </div>

      <?php endwhile; ?>

      <div class="navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
      </div><!-- /.navigation -->

    <?php else: ?>

    <div id="post-404" class="noposts">

      <p><?php _e('None found.','example'); ?></p>

    </div><!-- /#post-404 -->

  <?php endif; wp_reset_query(); ?>

  </div>

<?php get_footer(); ?>