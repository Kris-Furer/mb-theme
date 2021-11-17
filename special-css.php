<?php
function generate_customization_css() {


  if ( get_theme_mod( 'hero_image' ) ) {
  				$hero_image = get_theme_mod( 'hero_image' );
  			} else {
  				$hero_image = get_stylesheet_directory_uri().'images/hero.png';
  			}

  ?>
    <style type="text/css" class="tim2">

    :root {
      --my-background:#<?php echo get_theme_mod('background_color'); ?>;
      --btn-color:<?php echo get_theme_mod('button_color'); ?>;
      --btn-text:<?php echo get_theme_mod('button_text_color'); ?>;
      --footer_color:<?php echo get_theme_mod('footer_color'); ?>;
      --text_color:<?php echo get_theme_mod('text_color'); ?>;

    }





    </style>
<?php  }
add_action('wp_head', 'generate_customization_css');

?>
