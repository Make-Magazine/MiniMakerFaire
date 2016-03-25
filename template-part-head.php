<?php global $dm_settings; ?>

<div class="dmbs-container">

<?php if ($dm_settings['show_header'] != 0) : ?>

    <div class="container dmbs-header">

        <?php // Header Logo ?>
        <?php if ( get_header_image() != '' ) : ?>
            <div class="dmbs-header-img">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive header-logo" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo" /></a>
            </div>
        <?php endif; ?>

        <?php if ( get_header_image() != '' ) : ?>
        <div class="dmbs-header-text">
        <?php else : ?>
        <div class="col-sm-12 dmbs-header-text">
        <?php endif; ?>

            <?php // Header Date and Time ?>
            <?php if ( get_header_textcolor() != 'blank' ) : ?>
                <h1><a class="custom-header-text-color" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4 class="custom-header-text-color"><?php bloginfo( 'description' ); ?></h4>
            <?php else : ?>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4><?php bloginfo( 'description' ); ?></h4>
            <?php endif; ?>

        </div>

    </div>

<?php endif; ?>