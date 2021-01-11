<?php get_header(); ?>


<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/declic-image1.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php if(is_category()){
          single_cat_title();
      } if(is_author()){echo 'Posté par';the_author(); }?></h1>
      <div class="page-banner__intro">
        <p><?php the_archive_description();?></p>
      </div>
    </div>  
  </div>
  <p> <b>Salut! bienvenue dans notre . </b> </p>

  <div class="container container--narrow page-section">

    <?php
    while(have_posts()){

      the_post();
      ?>
      <div class = "post-item">

      <h2 class = "headline headline--medium headline--post-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>

      </div>

      <div class = "metabox">

        <p>Posté par <?php the_author_posts_link(); ?> le <?php the_time('n.j.y'); ?> sur <?php echo get_the_category_list(', ' );?> </p>

      </div>
      <div class = "generic-content">

      <?php the_excerpt();?>
      <p> <a class = "btn btn--yellow" href = "<?php the_permalink(); ?>"> lire la suite &raquo; </a> </p>

      </div>

   <?php }

      echo paginate_links();
   ?>

  </div>



<?php get_footer(); ?>