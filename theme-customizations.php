
<?php
  // ::::::::::::::::::  SITE COLOURS :::::::::::::::::::::::::::::
  // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
  function customise_colors($wp_customize) {
    $wp_customize->add_section("site_colors", array(
      "title" => "Site Colors",
      "priority" => 0
    ));

    // ### Background Color
    $wp_customize->add_setting("background_color", array(
    "default" => ""
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
      'label' => 'Background Colour',
      'section' => 'site_colors',
      'settings' => 'background_color'
    )));

    // ### Footer Background Color
    $wp_customize->add_setting("footer_color", array(
    "default" => ""
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
      'label' => 'Footer background color',
      'section' => 'site_colors',
      'settings' => 'footer_color'
    )));

    // ### Text Color
    $wp_customize->add_setting("text_color", array(
      "default" => ""
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'text_color', array(
      'label' => 'Text Colour',
      'section' => 'site_colors',
      'settings' => 'text_color'
    )));

    // ### Buttons ------------------------------------------------------

    // Button Background
    $wp_customize->add_setting("button_color", array(
      "default" => "#3284A7"
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'button_color', array(
      'label' => 'Button Color',
      'section' => 'site_colors',
      'settings' => 'button_color'
    )));
    //  Button Text
    $wp_customize->add_setting("button_text_color", array(
      "default" => "#ffffff"
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'button_text_color', array(
      'label' => 'Button Text Color',
      'section' => 'site_colors',
      'settings' => 'button_text_color'
    )));

  }
  add_action("customize_register", "customise_colors");



  // :::::::::::::::::: LANDING PAGE SETTINGS :::::::::::::::::::::
  // ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


function customise_landing ($wp_customize) {
  $wp_customize->add_section("landing_settings", array(
    "title" => "Landing Page Settings",
    "priority" => 0
  ));

  // add a new image upload setting
  $wp_customize->add_setting("hero_image", array(
    "default" => ""
  ));
  // Hero Image
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, 'hero_image', array(
      'label' => 'Upload A Hero Image',
      'settings' => 'hero_image',
      'section' => 'landing_settings',
      'priority' => 2000
)));
    // Call to action Text
    $wp_customize->add_setting("call_to_action", array(
    "default" => "Building for your future"
    ));

    $wp_customize->add_control("call_to_action", array(
      "label" => "Enter call to action text",
      "section" => "landing_settings",
      "settings" => "call_to_action",
      "type" => "text"
    ));



}
add_action("customize_register", "customise_landing");
