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
    
<nav class="nav" role="navigation">
  <div class="nav-container" id="navContainer">
    <a class="navbar-toggler" id="navToggle">
        <i class="fas fa-bars"></i>
    </a>
    <a class="navbar-brand" href="<?php echo home_url();?>"><img class="home-link" src="<?php echo get_template_directory_uri(); ?>/images/ria-logo.png"></a>
    <a href="<?php echo home_url();?>" class="icon-link"><i class="fas fa-home"></i></a>
           <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu',
            'container_id' => 'main-menu'
            
            
            ) ); ?>      
    </div>
</nav>
    