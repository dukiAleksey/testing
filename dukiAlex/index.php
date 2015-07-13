<?php get_header(); ?>

<section>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

      <p>Published: <?php the_time('F j, Y'); ?></p>

      <p><?php the_excerpt()?></p>
	
	<?php endwhile; else : ?>
	
	  <p><?php _e( 'Sorry, no results found.' ); ?></p>
	
	<?php endif; ?>

	<?php the_posts_navigation();
	/*
        Main page Pagination
    */
     ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>