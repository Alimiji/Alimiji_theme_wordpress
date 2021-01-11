<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <!--<title>Déclic-Maths-Phys-Prog</title> -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    
    
    <title><?php the_title(); ?> </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet" />
 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
       <!-- <link rel="stylesheet" href="style.css" />
    -->
  </head>
  <body <?php body_class();?>>
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url()?>"><strong>Déclic Maths-Phys-Prog</strong></a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">

            <?php // wp_nav_menu(array(

             // 'theme_location' => 'headerMenuLocation'
            
           // ) ); ?>
            
            <ul>
              <li <?php if(is_page('en-ce-qui-nous-concerne')) echo ' class = "current-menu-item"'?>><a href= "<?php echo site_url('en-ce-qui-nous-concerne')?>">En ce qui nous concerne</a></li>
              
              <li <?php if(get_post_type()=='post') echo ' class = "current-menu-item"'?>><a href="<?php echo site_url('/blog')?>">Blog</a></li>
            </ul>
          
          </nav>
          <div class="site-header__util">
          
            
            <a href="#" class="btn btn--small btn--yellow float-left push-right">Contacter nous</a>
            <a href="#" class="btn btn--small btn--orange float-left push-right">Ouverture d'une session</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">S'inscrire</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>

</header>

