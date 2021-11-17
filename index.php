<?php get_header(); ?>
<div class="container-fluid">

<div class="row mx-5">


          <?php
          if (have_posts() ) :
              while (have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile;
              else : echo '<p>There are no posts!</p>';
          endif;
          ?>
</div>
          </div>
<?php get_footer(); ?>
