<?php

/*

Template Name: Gallery Page Template

*/


 ?>
<?php get_header(); ?>

<div class="gallery-container">
  <div class="gallery-text text-section">
  <h1 class=>Building That Speaks For Itself</h1>
  <p>Take a look at our diverse range of building projects. Whether it’s a renovation, new construction, or commercial build, we are proud to share our completed works with you.</p>
  </div>
  
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
