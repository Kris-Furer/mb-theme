<?php
/*

Template Name: Contact Page Template

*/

 ?>

<?php get_header(); ?>
<div class="container-fluid">
<!-- Hero Section -->
  <div class="row">
    <div class="col-12 text-center contact-hero">
      <h1 class="display-2"><?php echo get_theme_mod('contact_heading') ?></h1>
      <p class="lead w-100"><?php echo get_theme_mod('contact_subhead')?></p>
    </div>
  </div>
<!-- Page Body -->
  <div class="row my-5">
    <div class="col-12 col-lg-5 d-flex justify-content-lg-center align-items-lg-center">
      <div class="d-flex flex-column flex-md-row justify-content-around d-lg-block col-12 col-lg-5 text-lg-start align-items-center text-center pt-5">
        <div class="mb-lg-5">
          <h2 class='serif text-nowrap'>Flick Us An Email</h4>
          <p><?php echo get_theme_mod('contact_email')?></p>
        </div>
        <div class="phone text-nowrap">
          <h2 class='serif'>Give Us A Bell</h2>
          <p><?php echo get_theme_mod('contact_phone')?></p>
        </div>
      </div>
    </div>

    <!-- Form Column -->
    <div class="col-10 col-lg-5 my-lg-5 mx-auto my-5">
        <h2 class="serif text-center my-3 d-none d-lg-block">Send Us a Message</h2>
        <form id="contact-form" name="myForm" class="form " action="#" onsubmit="return validateForm()" method="POST" role="form">

            <div class="form-group">
                <label class="form-label" id="nameLabel" for="name"></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
            </div>

            <div class="form-group">
                <label class="form-label" id="emailLabel" for="email"></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
            </div>

            <div class="form-group">
                <label class="form-label" id="messageLabel" for="message"></label>
                <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>
            </div>

            <div class="text-center margin-top-25">
                <button type="submit" class="my-btn red-fill my-3">Send Message</button>
            </div>

          </form><!-- End form -->

        </div><!-- End col -->

    </div><!-- End row -->
</div>

<?php get_footer(); ?>
