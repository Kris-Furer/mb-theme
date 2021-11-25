<?php /*
Template Name: About Page Template
*/ ?>

<?php get_header(); ?>
<div class="container-fluid">

  <div class="row">
    <div class="col-12 col-md-6 p-md-0 order-md-2">
      <img class='hero-img' src="<?php if (get_theme_mod( 'about_image' )) : echo get_theme_mod( 'about_image');
      else: echo get_template_directory_uri().'/images/drill.png'; endif; ?>" alt="">
    </div>

    <div class="col col-md-6 d-flex px-md-5 py-3 align-items-center">
      <div class="">
        <h1 class="display-3"><?php echo get_theme_mod('about_heading') ?></h1>
        <p class="max-text"><?php echo get_theme_mod('about_paragraph') ?></p>
      </div>
    </div>

    <!-- Row ends -->
  </div>




<div class="team-section my-5">
    <div class="row p-0">
      <h2 class='display-5 text-center my-5'>
        Our Team
      </h2>
    </div>



<div class="row my-5 mx-md-5  d-flex align-items-center justify-content-center ">
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
                  <div class="col-6 col-md-3 team-member">
                       <div class="profile-img">
                          <?php the_post_thumbnail("large", ['class'=>'profile-pic']); ?>
                       </div>
                              <p class="fw-bold mb-0"><?php the_title() ?></p>
                              <p class="font-italic"><?php   echo $title_input; ?></p>
                       </div>

              <?php endwhile;
                  else : echo '<p>There are no posts!</p>';
              endif; ?>

</div>
</div>

<!-- Our process section -->
  <div class="row my-5">
    <div class="col-12 col-md-6 d-flex align-items-center px-md-5">
      <div class="">
        <h2 class="display-5 my-3"><?php echo get_theme_mod('about_heading_2') ?></h2>
        <p class="max-text">
          <?php echo get_theme_mod('about_paragraph_2') ?>
        </p>
      </div>

    </div>

    <div class="col col-md-6 pe-sm-0">
      <img class="about-img" src="<?php echo get_theme_mod('about_image_2') ?>" alt="image here">
    </div>
  </div>


  <!-- Ready to start section -->
  <div class="row bg-secondary secondary-cta">
    <div class="col col-md-5 px-md-5">
      <h1 class="mb-0">Ready To Start?</h1>
      <p class="my-3">lets have a chat about your dream home</p>
      <a href="contact">
          <button class="my-btn">Enquire Now</button>
      </a>

    </div>
  </div>
  <!-- container fluid ends -->
    </div>




<!-- Container Fluid Ends -->


<?php get_footer(); ?>
