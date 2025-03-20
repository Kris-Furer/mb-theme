<?php wp_footer(); ?>




    <!-- FOOTER -->
    <footer>
       <div class="contain">
       <div class="footer-col">
                <a href="<?php echo home_url();?>">
                  <p class="footer-logo"><span class="bold">Masterton</span>Builders</p>

                </a>
                <div class="socials">
                <a target="_blank" href="https://www.linkedin.com/in/kris-furer/"><i class="fa-brands fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/kris-furer/"><i class="fa-brands fa-linkedin"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/kris-furer/"><i class="fa-brands fa-instagram"></i></a>


                </div>
              </div>


              <!-- <div class="footer-col">
    <?php
    $menu_args = ['theme_location' => 'footer', 'menu_class' => "footer-nav"];
    wp_nav_menu($menu_args);
    ?>
</div> -->


                <div class="footer-col">
                    <p>Masterton Builders</p>
                    <p>171 Teapapa Rd, Masterton, 2159</p>
                    <p><?php echo get_theme_mod('contact_phone') ?></p>
                    <p><?php echo get_theme_mod('contact_email') ?></p>
                </div>
       </div>

            
    </footer>























</body>

</html>
