<?php
// Theme Supporters// turn on theme support
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');

// Menus
register_nav_menus(['primary'=> 'primary']);
register_nav_menus(['footer'=> 'footer']);

  function custom_theme_assets() {
  wp_enqueue_style('my-custom-style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'custom_theme_assets');





 ?>
