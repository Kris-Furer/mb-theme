<?php
function generate_customization_css() {


  if (get_theme_mod('hero_image')) {
  				$contact_hero_image = get_theme_mod('hero_image');
  			} else {
  				$contact_hero_image = get_stylesheet_directory_uri().'/images/contact.png';
  			}

  ?>
    <style type="text/css">

    :root {
      --my-background:#<?php echo get_theme_mod('background_color'); ?>;
      --btn-color:<?php echo get_theme_mod('button_color'); ?>;
      --btn-text:<?php echo get_theme_mod('button_text_color'); ?>;
      --footer_color:<?php echo get_theme_mod('footer_color'); ?>;
      --footer_text_color:<?php echo get_theme_mod('footer_text_color'); ?>;
      --text_color:<?php echo get_theme_mod('text_color'); ?>;


    }

    .contact-hero {
    background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url(<?php
  if (get_theme_mod('contact_image')) : echo get_theme_mod( 'contact_image');
  else: echo get_template_directory_uri().'/images/contact.png'; endif; ?> )
  }

  .secondary-cta {
  background-repeat: no-repeat;
  background-size:cover;
  background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url(<?php
  if (get_theme_mod('secondary_cta')) : echo get_theme_mod( 'secondary_cta');
  else: echo get_template_directory_uri().'/images/cta-2.png'; endif; ?> )
}



    </style>
<?php
}

add_action('wp_head', 'generate_customization_css');

?>
