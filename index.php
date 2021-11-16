<?php get_header(); ?>
          <?php
          if (have_posts() ) :
              while (have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile;
              else : echo '<p>There are no posts!</p>';
          endif;
          ?>
          <p>Hey Yo</p>
<?php get_footer(); ?>
