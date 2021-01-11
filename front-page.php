<?php  get_header(); ?>

    
   
  

    
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/tutorat1.jpg') ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">&#x1F642;Bienvenue dans notre page d'accueil! </h1>
    <h2 class="headline headline--medium">Voulez-vous un tuteur expérimenté en Mathématiques, en science physique, en programmation ?</h2>
    <h3 class="headline headline--small">Vous êtes au bon endroit!</h3>
    <a href="#" class="btn btn--large btn--blue">Contactez-nous tout de suite !</a>
  </div>
</div>


<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Évenements à venir</h2>

      <?php
      
        $homepageEvents = new WP_Query(array(

          'posts_per_page' => 2,
          'post_type' => 'event' 

        ));
        
        while( $homepageEvents -> have_posts()){

          $homepageEvents -> the_post(); ?>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p><?php the_content();?> <a href="<?php the_permalink();?>" class="nu gray">En savoir plus</a></p>
            </div>
          </div>


        <?}
    
      ?>
      
      

      
      

      <p class="t-center no-margin"><a href="#" class="btn btn--blue">Vue de tous les évènements</a></p>
    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">À partir de nos Blogs</h2>
    
      <?php

        $homepagePosts = new WP_Query(array(
          'posts_per_page'=> 3

        ));
        while($homepagePosts -> have_posts()){

        $homepagePosts -> the_post(); 
      ?>

      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
          <span class="event-summary__month"><?php the_time('M'); ?></span>
          <span class="event-summary__day"><?php the_time('d'); ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p><?php echo wp_trim_words(get_the_content(), 15);?> <a href="<?php the_permalink(); ?>" class="nu gray"> En savoir plus</a></p>
        </div>
      </div>



      <?php  } 

            wp_reset_postdata();
    
      ?>
    </div>
      <p class="t-center no-margin"><a href="<?php echo site_url('/blog') ?>" class="btn btn--yellow">Afficher tout les blogs des publications</a></p>
  </div>

</div>
    

 

<div class="hero-slider">
<div data-glide-el="track" class="glide__track">
  <div class="glide__slides">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/tutorat2.jpg') ?>);">
      <div class="hero-slider__interior container">
        <div class="hero-slider__overlay">
          <h2 class="headline headline--medium t-center">Programmation</h2>
          <p class="t-center">Voulez-vous un tuteur en programmation ? </p>
          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">N'hésitez pas à nous contacter</a></p>
        </div>
      </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/tutorat3.jpg') ?>);">
      <div class="hero-slider__interior container">
        <div class="hero-slider__overlay">
          <h2 class="headline headline--medium t-center">Science Physiques</h2>
          <p class="t-center">Voulez-vous un tuteur en science physique ?</p>
          <p class="t-center no-margin"><a href="#" class="btn btn--orange">N'hésitez pas à nous contacter</a></p>
        </div>
      </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/tutorat4.jpg') ?>);">
      <div class="hero-slider__interior container">
        <div class="hero-slider__overlay">
          <h2 class="headline headline--medium t-center">Mathématiques</h2>
          <p class="t-center">Voulez-vous un tuteur en mathématiques ?</p>
          <p class="t-center no-margin"><a href="<?php echo site_url('/blog') ?>" class="btn btn--blue">N'hésitez pas à nous contacter</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
</div>
</div>

<?php
  get_footer();


?>