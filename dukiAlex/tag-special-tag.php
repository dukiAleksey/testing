<?php get_header(); ?>

<section>

  <?php 
  // Check if there are any posts to display
  if ( have_posts() ) : ?>

  <h1>* <?php single_tag_title( '', true ); ?></h1>
    
    <?php

      // The Loop
      while ( have_posts() ) : the_post(); ?>
    
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

      <p>Published: <?php the_time('F j, Y'); ?></p>

      <p><?php the_excerpt()?></p>
  
  <?php endwhile; else : ?>
  
    <p><?php _e( 'Sorry, no results found.'); ?></p>
  
  <?php endif; ?>

  <?php the_posts_navigation();
    /*
      Pagination
    */
     ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>