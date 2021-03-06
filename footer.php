<?php wp_footer(); ?>




    <!-- FOOTER -->
    <footer class="w-100 py-4">
        <div class="container text-center text-md-start py-4">
            <div class="row gy-4 gx-5">

              <div class="col-12 col-md-4">
                <a class="footer-heading" href="<?php echo home_url();?>">
                  <p class="fs-2 mb-3 footer-logo"><span class="fw-bold">Masterton</span>Builders</p>

                </a>
              </div>


                <div class="col-12 col-md-4  footer-left">
                    <h5 class="mb-3 footer-heading">Quick links</h5>

                      <?php
                      $menu_args = ['theme_location' => 'footer', 'menu_class' => "footer-nav"];
                      wp_nav_menu($menu_args);
                        ?>
                </div>

                <div class="col-12 col-md-4">
                    <h5 class="mb-3 footer-heading">Contact</h5>
                    <p>Masterton Builders</p>
                    <p>171 Teapapa Rd, Masterton, 2159</p>
                    <p><?php echo get_theme_mod('contact_phone') ?></p>
                    <p><?php echo get_theme_mod('contact_email') ?></p>
                </div>
            </div>
        </div>
    </footer>






















<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
