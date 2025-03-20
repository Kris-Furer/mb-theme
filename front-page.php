<?php get_header(); ?>

  <div class="container-fluid">
    <!-- Landing Section -->
    <div class="landing-section section section-2">

      <!-- Landing Image -->
      <div class="image-section">
          <?php if (get_theme_mod( 'hero_image' )) { ?>
              <img class="hero-img" src="<?php echo get_theme_mod( 'hero_image')?>" alt=""> <?php } else { ?>
              <img class="hero-img" src="<?php echo get_template_directory_uri().'/images/hero.png'?>" alt="">
          <?php } ?>
      </div>

      <!-- Landing Text -->
      
        <div class="text-section">
          <h1 class=""><?php echo get_theme_mod('call_to_action')?></span> </h1>
          <p class=""><?php echo get_theme_mod('subhead_text')?></p>
          <a href="contact">
            <span class='my-btn'>Enquire now</span>
          </a>
        </div>

    </div>

    <!-- Section 2 --------------------------------------------->

    <div class="row section my-5">
      <div class="image-section">
        <img class="section-img" src="<?php if (get_theme_mod( 'section_2_image' )) : echo get_theme_mod( 'section_2_image');
        else: echo get_template_directory_uri().'/images/picture2.png'; endif; ?>" alt="">
      </div>
      <div class="text-section">
        <div class="">
          <h2>Building<span class="font-italic"> your</span> dream house</h2>
          <p><?php echo get_theme_mod('section2_text') ?>
          </p>
        </div>
      </div>
    </div>


<!-- Section 3 Starts  -->
<div class="section section-3 ">
  <!-- Section 3 Image -->
  <div class="col-sm-12 col-md-6 pe-md-0 image-section order-md-2">
    <img class="section-img" src="<?php if (get_theme_mod( 'section_3_image' )) : echo get_theme_mod( 'section_3_image');
  else: echo get_template_directory_uri().'/images/picture-3.png'; endif; ?>" alt="">
  </div>

  <!-- Section 3 Text -->
  <div class="text-section">
    <div class="">
      <h2>Quality builders, quality<span class="font-italic"> homes</span></h2>
      <p><?php echo get_theme_mod('section3_text') ?></p>
      <a class='my-btn' href="contact">Enquire now</a>
    </div>
  </div>

</div>
<!-- 
<div class="row px-md-5 justify-content-center testimonial-section">
  <div class="col-12">
    <h2 class='display-5 text-center py-5'>
      Testimonials
    </h2>
  </div>
</div> -->

<div class="row bg-secondary secondary-cta">
  <div class="col col-md-5 px-md-5">
    <h2 class="mb-0">Ready To Start?</h2>
    <p class="my-3">lets have a chat about your dream home</p>
    <a href="contact">
      <button class="my-btn">Enquire Now</button>
    </a>

  </div>
</div>

    <!-- Container Fluid Ends -->
  </div>




<?php get_footer(); ?>
