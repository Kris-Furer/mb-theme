<?php

/*

Template Name: Gallery Page Template

*/


 ?>
<?php get_header(); ?>

<div class="container-fluid mb-5 gallery-container">
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
<div class="row bg-secondary secondary-cta mt-5">
  <div class="col col-md-5 px-md-5">
    <h1 class="mb-0">Ready To Start?</h1>
    <p class="my-3">lets have a chat about your dream home</p>
    <button class="my-btn">Enquire Now</button>
  </div>
</div>

<?php get_footer(); ?>
