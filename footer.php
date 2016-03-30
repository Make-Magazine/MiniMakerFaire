  <div class="dmbs-footer">
    <div class="container">
      <div class="row">
        <?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
        <div class="col-sm-4">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="img-responsive footer-logos" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
          </a>
          <?php
            wp_nav_menu( array(
              'theme_location'    => 'footer_menu',
              'depth'             => 2,
              'container'         => 'ul',
              'container_class'   => 'list-unstyled',
              'menu_class'        => 'list-unstyled',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
          ?>
        </div>
        <?php endif; ?>

        <div class="col-sm-4 hidden-xs">
          <a href="http://makerfaire.com/" target="_blank">
            <img class="img-responsive footer-logos" src="<?php echo get_bloginfo('template_directory');?>/img/makerfaire.gif" alt="Maker Faire logo" />
          </a>
          <ul class="list-unstyled">
            <li>
              <a href="http://makerfaire.com/makerfairehistory" target="_blank">About Maker Faire</a>
            </li>
            <li>
              <a href="http://makerfaire.com/map" target="_blank">Find a Faire Near You</a>
            </li>
            <li>
              <a href="http://makerfaire.com/be-a-maker" target="_blank">Be a Maker</a>
            </li>
            <li>
              <a href="//help.makermedia.com/hc/en-us/categories/200333245-Maker-Faire" target="_blank">Maker Faire FAQs</a>
            </li>
            <li>
              <a href="//help.makermedia.com/hc/en-us/sections/201008995-Maker-Faire-Support" target="_blank">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4 hidden-xs">
          <a href="http://makezine.com/" target="_blank">
            <img class="img-responsive footer-logos" src="<?php echo get_bloginfo('template_directory');?>/img/make-logo.png" alt="Make: magazine logo" />
          </a>
          <ul class="list-unstyled">
            <li>
              <a href="http://makezine.com/projects/" target="_blank">Make: Projects</a>
            </li>
            <li>
              <a href="http://makezine.com/category/workshop/3d-printing-workshop/" target="_blank">3D Printing Projects</a>
            </li>
            <li>
              <a href="http://makezine.com/category/technology/arduino/" target="_blank">Arduino Projects</a>
            </li>
            <li>
              <a href="http://makezine.com/category/technology/raspberry-pi/" target="_blank">Raspberry Pi Projects</a>
            </li>
            <li>
              <a href="https://help.makermedia.com/hc/en-us/categories/200341459-Make-Magazine" target="_blank">Subscription Services</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row padtop">
        <div class="col-xs-12">
          <p class="small text-muted text-center"><?php bloginfo( 'name' ); ?> is independently organized and operated under license from <a href="http://makermedia.com/" target="_blank">Maker Media, Inc.</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end main container -->
<?php wp_footer(); ?>
</body>
</html>