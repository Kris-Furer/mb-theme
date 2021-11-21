<?php
/*

Template Name: About Page Template

*/

 ?>

<?php get_header(); ?>
<div class="container-fluid">
  <div class="row landing-section">
    <div class="col-md-6 col-sm-12 d-flex px-5 align-items-center">
      <div class="">
        <h1 class="display-3"><?php echo get_theme_mod('about_heading') ?></h1>
        <p><?php echo get_theme_mod('about_paragraph') ?></p>
      </div>

    </div>
    <div class="col-md-6 col-sm-12 p-md-0">
      <img src="<?php if (get_theme_mod( 'about_image' )) : echo get_theme_mod( 'about_image');
    else: echo get_template_directory_uri().'/images/drill.png'; endif; ?>" alt="">
    </div>
  </div>


<!-- Our Team Section -->
  <!-- <div class="row my-5 text-center">
    <div class="col-12">

    </div>
  </div> -->



  <div class="row m-5 team-section d-flex align-items-center">
    <div class="row">
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
                  <div class="col col-md-3 col-sm-6">
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
<!-- container fluid ends -->
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
  <div class="row my-5">
    <div class="col-8 px-5">
      <h2 class="display-5 my-3"><?php echo get_theme_mod('about_heading_2') ?></h2>
      <p>
        <?php echo get_theme_mod('about_paragraph_2') ?>
      </p>
    </div>
    <div class="col-4">
      <img src="<?php echo get_theme_mod('about_image_2') ?>" alt="image here">
    </div>
  </div>


  <!-- Ready to start section -->
  <div class="row bg-secondary secondary-cta px-5">
    <div class="col-5">
      <h1>Ready To Start?</h1>
      <p>lets have a chat about your dream home</p>
      <a class="my-btn">Enquire Now</a>
    </div>
  </div>





<!-- Container Fluid Ends -->
</div>

<?php get_footer(); ?>
