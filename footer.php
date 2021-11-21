<?php wp_footer(); ?>




    <!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
              <div class="col-lg-4 col-md-6">
                <a class="footer-heading" href="<?php echo home_url();?>">
                  <span class= "fw-bold">Masterton</span>Builders
                </a>
              </div>


                <div class="col-lg-4 col-md-6 footer-left">
                    <h5 class="text-white mb-3 footer-heading">Quick links</h5>

                      <?php
                      $menu_args = ['theme_location' => 'footer', 'menu_class' => "footer-nav"];
                      wp_nav_menu($menu_args);
                        ?>
                </div>

                <div class="col-lg-4 col-md-6 text-white">
                    <h5 class="mb-3 footer-heading">Contact</h5>
                    <p>Masterton Builders</p>
                    <p>171 Teapapa Rd, Masterton, 2159</p>
                    <p>Phone: 021 618 922</p>
                    <p>Email: info@mastertonbuilders.com</p>
                </div>
            </div>
        </div>
    </footer>






    <div class="my-mob-overlay">
        <i class="fas fa-close mob-close"></i>
      <div class="mob-inner">

        <h1 class="display-1">Menu</h1>
        <?php
        $menu_args = ['theme_location' => 'footer', 'menu_class' => "mob-menu"];
        wp_nav_menu($menu_args);
          ?>


      </div>
    </div>















<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
