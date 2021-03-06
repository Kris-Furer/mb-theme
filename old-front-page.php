<?php get_header(); ?>

  <div class="container-fluid">
    <!-- Landing Section -->
    <div class="row section mb-5">

      <div class="col-sm-12 col-md-5 d-flex align-items-center">
        <div class="px-5 my-5">
          <h1 class="display-1 mb-0"><?php echo get_theme_mod('call_to_action')?></span> </h1>

          <p class="py-3 lead"><?php echo get_theme_mod('subhead_text')?></p>
          <a class='my-btn' href="#">Enquire now</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-7 p-0">
          <?php if (get_theme_mod( 'hero_image' )) { ?>
              <img class="hero-img" src="<?php echo get_theme_mod( 'hero_image')?>" alt=""> <?php } else { ?>

              <img class="section-img" src="<?php echo get_template_directory_uri().'/images/hero.png'?>" alt="">
              <?php } ?>
      </div>
    </div>


    <!-- Section 2 Starts -->
    <div class="row section my-5">
      <div class="col-sm-12 col-md-7 ps-0">

        <img src="<?php if (get_theme_mod( 'section_2_image' )) : echo get_theme_mod( 'section_2_image');
        else: echo get_template_directory_uri().'/images/picture2.png'; endif; ?>" alt="">

      </div>
      <div class="col-sm-12 col-md-4 d-flex align-items-center">
        <div class="ps-5">
          <h2 class="display-3">Building<span class="font-italic"> your</span> dream house</h2>
          <p><?php echo get_theme_mod('section2_text') ?>
          </p>
        </div>
      </div>
    </div>


<!-- Section 3 Starts  -->
<div class="row section mb-5">
  <div class="col-sm-12 col-md-6 d-flex align-items-center">
    <div class="px-5">
      <h2 class='display-3'>Quality builders, quality<span class="font-italic"> homes</span></h2>
      <p class='py-2'><?php echo get_theme_mod('section3_text') ?></p>
      <a class='my-btn' href="#">Enquire now</a>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 pe-0">
    <img src="<?php if (get_theme_mod( 'section_3_image' )) : echo get_theme_mod( 'section_3_image');
  else: echo get_template_directory_uri().'/images/picture-3.png'; endif; ?>" alt="">
  </div>
</div>


<div class="row mx-5 justify-content-center">
  <h2 class='display-5 text-center my-5'>
    Testimonials
  </h2>
<?php echo do_shortcode("[testimonial_view id='2']"); ?>

</div>


<!-- Testimonial Section  -->
<div class="row mx-5 my-5 justify-content-center">

  <div class="card col-3 testimonial-card p-3 m-3">
    <h5 class='card-title mb-0'>Julie Smith</h5>
    <div class="circle py-3">
        <img class="testimonial-pic" src="<?php echo get_template_directory_uri().'/images/profile1.jpg'?>" alt="">
    </div>
    <p class="card-text font-italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim."</p>
  </div>
  <div class="card col-3 testimonial-card p-3 m-3">
    <h5 class='card-title mb-0'>Julie Smith</h5>
    <div class="circle py-3">
        <img class="testimonial-pic" src="<?php echo get_template_directory_uri().'/images/profile1.jpg'?>" alt="">
    </div>
    <p class="card-text font-italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim."</p>
  </div>
  <div class="card col-3 testimonial-card p-3 m-3">
    <h5 class='card-title mb-0'>Julie Smith</h5>
    <div class="circle py-3">
        <img class="testimonial-pic" src="<?php echo get_template_directory_uri().'/images/profile1.jpg'?>" alt="">
    </div>

    <p class="card-text font-italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim."</p>
  </div>
</div>


    <!-- Container Fluid Ends -->
  </div>
<?php get_footer(); ?>
