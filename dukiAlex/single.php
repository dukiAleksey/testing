<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article>

          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

          <p>on <?php the_time('F j, Y'); ?></p>

          <?php the_content(); ?>

          <p class="cat">Posted In <?php the_category( ', ' ); ?></p>

          <p><?php the_tags(); ?></p>


          <?php comments_template();
          /*
            Include comments template
          */
           ?>

        </article>

  <?php endwhile; else : ?>

  <p><?php _e( 'Sorry, no posts found.'); ?></p>

  <?php endif; ?>


  <?php get_sidebar(); ?>

<?php get_footer(); ?>