<?php
/*

Template Name: About Page Template

*/

 ?>

<?php get_header(); ?>
<div class="container-fluid">

  <div class="row landing-section">
    <div class="col-12 col-md-6 p-md-0 order-md-2">
      <img class='hero-img' src="<?php if (get_theme_mod( 'about_image' )) : echo get_theme_mod( 'about_image');
      else: echo get_template_directory_uri().'/images/drill.png'; endif; ?>" alt="">
    </div>

    <div class="col col-md-6 d-flex px-md-5 py-3 align-items-center">
      <div class="">
        <h1 class="display-3"><?php echo get_theme_mod('about_heading') ?></h1>
        <p><?php echo get_theme_mod('about_paragraph') ?></p>
      </div>
    </div>


    <!-- Row ends -->
  </div>


<!-- Our Team Section -->
  <!-- <div class="row my-5 text-center">
    <div class="col-12">

    </div>
  </div> -->



  <div class="row my-5 mx-md-5 team-section d-flex align-items-center justify-content-center ">
    <div class="row p-0">
      <h2 class='display-5 text-center my-5'>
        Our Team
      </h2>

    <?php
        query_posts(array(
          'post_type' => team
          )
        );
        ?>

        <?php
              if (have_posts() ) :
                  while (have_posts() ) : the_post(); ?>
                  <?php $title_input = get_post_meta(get_the_ID(), 'title_input', true); ?>
                  <!-- here's the area where it loops over each post -->
                  <div class="col-6 col-md-3">
                       <div class="profile-img">
                          <?php the_post_thumbnail("medium", ['class'=>'profile-pic']); ?>
                       </div>
                              <p class="fw-bold mb-0"><?php the_title() ?></p>
                              <p class="font-italic"><?php   echo $title_input; ?></p>
                       </div>

              <?php endwhile;
                  else : echo '<p>There are no posts!</p>';
              endif;
              ?>
  </div>
</div>







<!-- Hard Coded Team Template -->
  <!-- <div class="row m-5">
    <div class="col-md-3 col-sm-6">
      <div class="profile-img bg-secondary">Image Here</div>
      <p class="fw-bold mb-0">John Doe</p>
      <p class='font-italic'>Owner</p>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="profile-img bg-secondary">Image Here</div>
      <p class="fw-bold mb-0">John Doe</p>
      <p class='font-italic'>Owner</p>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="profile-img bg-secondary">Image Here</div>
      <p class="fw-bold mb-0">John Doe</p>
      <p class='font-italic'>Owner</p>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="profile-img bg-secondary">Image Here</div>
      <p class="fw-bold mb-0">John Doe</p>
      <p class='font-italic'>Owner</p>
    </div>
  </div> -->

<!-- Our process section -->
  <div class="row my-5 px-md-5">
    <div class="col-12 col-md-6">
      <h2 class="display-5 my-3"><?php echo get_theme_mod('about_heading_2') ?></h2>
      <p class="">
        <?php echo get_theme_mod('about_paragraph_2') ?>
      </p>
    </div>

    <div class="col col-md-6">
      <img src="<?php echo get_theme_mod('about_image_2') ?>" alt="image here">
    </div>
  </div>


  <!-- Ready to start section -->
  <div class="row bg-secondary secondary-cta px-md-5">
    <div class="col col-md-5 px-md-5">
      <h1 class="mb-0">Ready To Start?</h1>
      <p class="my-3">lets have a chat about your dream home</p>
      <button class="my-btn">Enquire Now</button>
    </div>
  </div>
  <!-- container fluid ends -->
    </div>




<!-- Container Fluid Ends -->


<?php get_footer(); ?>
