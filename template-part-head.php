<div class="dmbs-container">

    <div class="container dmbs-header">

        <?php // Header Logo ?>
        <?php if ( get_header_image() != '' ) : ?>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="img-responsive header-logo" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?> logo" />
                </a>
            </div>
        <?php endif; ?>

        <?php if ( get_header_image() != '' ) : ?>
        <div class="col-xs-12 col-sm-8 col-md-9">
        <?php else : ?>
        <div class="col-sm-12">
        <?php endif; ?>

            <?php // Header Date and Time
            if(false === get_theme_mod('header_date_time_checkbox')) {

                $header_date_time_field = get_theme_mod('header_date_time_field');
                $header_location_field = get_theme_mod('header_location_field');
                $header_date_time_color = get_theme_mod('header_date_time_color'); ?>
                <h1 style="color: <?php echo $header_date_time_color; ?>"><?php echo $header_date_time_field; ?></h1>
                <h4 style="color: <?php echo $header_date_time_color; ?>"><?php echo $header_location_field; ?></h4>

            <?php } ?>

        </div>

    </div>