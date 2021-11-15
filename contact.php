<?php
/*

Template Name: Contact Page Template

*/

 ?>

<?php get_header(); ?>
<div class="container-fluid">

<div class="row">
          <div class="col-12 text-center contact-hero">
            <h1 class="form-title">Get in Touch</h1>
          </div>
      </div>

      <div class="row">
<div class="col-5 offset-1 d-flex align-items-center">
  <div class="">
    <div class="mb-5">
      <h4 class='serif'>Flick Us An Email</h4>
      <p>info@mastertonbuilders.com</p>
    </div>
    <div class="phone">
      <h4 class='serif'>Give Us A Bell</h4>
      <p>info@mastertonbuilders.com</p>
    </div>
  </div>


</div>




          <!-- Form Column -->
          <div class="col-5 my-5 mx-auto">

              <form id="contact-form" name="myForm" class="form " action="#" onsubmit="return validateForm()" method="POST" role="form">

                  <div class="form-group">
                      <label class="form-label" id="nameLabel" for="name"></label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="emailLabel" for="email"></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
                  </div>

                  <!-- <div class="form-group">
                      <label class="form-label" id="subjectLabel" for="sublect"></label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                  </div> -->

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
