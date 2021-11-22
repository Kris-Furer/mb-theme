<?php

/*

Template Name: Gallery Page Template

*/


 ?>
<?php get_header(); ?>

<div class="container-fluid">
  <h1 class="display-1 m-5">Gallery</h1>
  <div class="row mx-md-5 my-5 mx-sm-0">
    <div class="col-12 mx-auto">


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

</div>


<?php get_footer(); ?>
