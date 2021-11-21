
<?php
  // --------------------------------------------------------------
  //                         SITE COLOURS
  // --------------------------------------------------------------
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
    "default" => "#1b1b1b"
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
      'label' => 'Footer background color',
      'section' => 'site_colors',
      'settings' => 'footer_color'
    )));

    // ### Text Color
    $wp_customize->add_setting("text_color", array(
      "default" => "black"
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'text_color', array(
      'label' => 'Text Colour',
      'section' => 'site_colors',
      'settings' => 'text_color'
    )));

    // ### Buttons ------------------------------------------------------

    // Button Background
    $wp_customize->add_setting("button_color", array(
      "default" => "#3284A7;"
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


  // --------------------------------------------------------------
  //                   Landing Page Settings
  // --------------------------------------------------------------


function customise_landing ($wp_customize) {
  $wp_customize->add_section("landing_settings", array(
    "title" => "Landing Page Settings",
    "priority" => 0
  ));

  // Section 1 --------------------------------------------
  // add a new hero image setting
  $wp_customize->add_setting("hero_image", array(
    "default" => "/images/hero.png"
  ));

  // Hero Image
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, 'hero_image', array(
      'label' => 'Upload A Hero Image',
      'settings' => 'hero_image',
      'section' => 'landing_settings',
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

    // Subheading Text
    $wp_customize->add_setting("subhead_text", array(
    "default" => "local builders you can trust, no job to big or to small"
    ));

    $wp_customize->add_control("subhead_text", array(
      "label" => "Enter a subheading",
      "section" => "landing_settings",
      "settings" => "subhead_text",
      "type" => "text"
    ));


      // Section 2 -------------------------------------------

      // Section 2 Image Setting
      $wp_customize->add_setting("section_2_image", array(
        "default" => ""
      ));

      // Section 2 Image Control
      $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'section_2_image', array(
          'label' => 'Upload an image for section 2',
          'settings' => 'section_2_image',
          'section' => 'landing_settings',
      )));

      // Section 2 Text
      $wp_customize->add_setting("section2_text", array(
      "default" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate."
      ));

      $wp_customize->add_control("section2_text", array(
        "label" => "Enter text for section 2",
        "section" => "landing_settings",
        "settings" => "section2_text",
        "type" => "textarea"
      ));

      // Section 3 -------------------------------------------

      // Section 3 Image Setting
      $wp_customize->add_setting("section_3_image", array(
        "default" => ""
      ));

      // Section 3 Image Control
      $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'section_3_image', array(
          'label' => 'Upload an image for section 3',
          'settings' => 'section_3_image',
          'section' => 'landing_settings',
      )));

      // Section 3 Text
      $wp_customize->add_setting("section3_text", array(
      "default" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate."
      ));

      $wp_customize->add_control("section3_text", array(
        "label" => "Enter text for section 3",
        "section" => "landing_settings",
        "settings" => "section3_text",
        "type" => "textarea"
      ));
}

add_action("customize_register", "customise_landing");

// --------------------------------------------------------
//                 Contact Page Settings
// --------------------------------------------------------

function customise_contact_page ($wp_customize) {
  $wp_customize->add_section("contact_settings", array(
    "title" => "Contact Settings",
    "priority" => 0
  ));

  // Add a hero to contact page - setting
  $wp_customize->add_setting("contact_image", array(
    "default" => ""
  ));

  // Add a hero to contact page - control
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, 'contact_image', array(
      'label' => 'Upload main image on contact page',
      'settings' => 'contact_image',
      'section' => 'contact_settings',
    )));

    // Change image text contact page
    $wp_customize->add_setting("contact_heading", array(
    "default" => "Get in Touch"
    ));

    $wp_customize->add_control("contact_heading", array(
      "label" => "Enter Contact Heading",
      "section" => "contact_settings",
      "settings" => "contact_heading",
      "type" => "text"
    ));

    // Subheading Text
    $wp_customize->add_setting("contact_subhead", array(
    "default" => "Lets plan your dream home"
    ));

    $wp_customize->add_control("contact_subhead", array(
      "label" => "Enter a subheading",
      "section" => "contact_settings",
      "settings" => "contact_subhead",
      "type" => "text"
    ));


    // Contact Details
    // email
    $wp_customize->add_setting("contact_email", array(
    "default" => "info@mastertonbuilders.com"
    ));

    $wp_customize->add_control("contact_email", array(
      "label" => "Enter Your Company Email Address",
      "section" => "contact_settings",
      "settings" => "contact_email",
      "type" => "text"
    ));

    // Subheading Text
    $wp_customize->add_setting("contact_phone", array(
    "default" => "0272531625"
    ));

    $wp_customize->add_control("contact_phone", array(
      "label" => "Enter Company Phone Number",
      "section" => "contact_settings",
      "settings" => "contact_phone",
      "type" => "text"
    ));

}

add_action("customize_register", "customise_contact_page");



// --------------------------------------------------------
//                 About Page Settings
// --------------------------------------------------------

function customise_about_page ($wp_customize) {
  $wp_customize->add_section("about_page_settings", array(
    "title" => "About Page Settings",
    "priority" => 0
  ));

  // Add a hero image to about page - setting
  $wp_customize->add_setting("about_image", array(
    "default" => ""
  ));

  // Add a hero to about page - control
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize, 'about_image', array(
      'label' => 'Upload main image on about page',
      'settings' => 'about_image',
      'section' => 'about_page_settings',
    )));

    // Change About Page Heading
    $wp_customize->add_setting("about_heading", array(
    "default" => "About Us"
    ));

    $wp_customize->add_control("about_heading", array(
      "label" => "Enter about heading",
      "section" => "about_page_settings",
      "settings" => "about_heading",
      "type" => "text"
    ));

    // Change About Us Paragraph
    $wp_customize->add_setting("about_paragraph", array(
    "default" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. "
    ));

    $wp_customize->add_control("about_paragraph", array(
      "label" => "Enter About Us Paragraph",
      "section" => "about_page_settings",
      "settings" => "about_paragraph",
      "type" => "textarea"
    ));


    // Change About Part 2 Heading
    $wp_customize->add_setting("about_heading_2", array(
    "default" => "Our Process"
    ));

    $wp_customize->add_control("about_heading_2", array(
      "label" => "Enter A Heading For the second text section",
      "section" => "about_page_settings",
      "settings" => "about_heading_2",
      "type" => "text"
    ));

    // Change About Part 2 Paragraph
    $wp_customize->add_setting("about_paragraph_2", array(
    "default" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beata"
    ));

    $wp_customize->add_control("about_paragraph_2", array(
      "label" => "Enter Paragraph for second text section",
      "section" => "about_page_settings",
      "settings" => "about_paragraph_2",
      "type" => "textarea"
    ));

    // Add a hero image to about page - setting
    $wp_customize->add_setting("about_image_2", array(
      "default" => ""
    ));

    // Add a hero to about page - control
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize, 'about_image_2', array(
        'label' => 'Upload second image on about page',
        'settings' => 'about_image_2',
        'section' => 'about_page_settings',
      )));

}

add_action("customize_register", "customise_about_page");
