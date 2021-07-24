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
  <div class="nav-container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo home_url();?>"><img class="home-link" src="<?php echo get_template_directory_uri(); ?>/images/ria-logo.png"></a>
    <a href="<?php echo home_url();?>" class="icon-link"><i class="fas fa-home"></i></a>
           <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu' 
            
            ) ); ?>      
    </div>
</nav>
    