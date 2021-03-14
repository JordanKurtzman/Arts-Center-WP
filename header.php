<!DOCTYPE html>
<html>

<head <?php language_attributes ();?> >
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <title>Ria Links | Artists for Systems Change </title>
    <?php wp_head(); ?>

</head>

<body>
    
<nav class="navbar navbar-expand-md navbar-dark" role="navigation">
  <div class="nav-container">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <a class="navbar-brand" href="<?php echo home_url();?>"><img class="home-link" src="<?php echo get_template_directory_uri(); ?>/images/ria-logo.png"></a>
    <a href="<?php echo home_url();?>" class="icon-link"><i class="fas fa-home"></i></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
    