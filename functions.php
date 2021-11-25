<?php
include 'special-css.php';
include 'theme-customizations.php';
// Theme Supporters// turn on theme support
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_theme_support( 'custom-logo' );

// Menus
register_nav_menus(['primary'=> 'primary']);
register_nav_menus(['footer'=> 'footer']);

function custom_theme_assets() {
  wp_enqueue_style('my-custom-style', get_stylesheet_uri());

  }
  add_action('wp_enqueue_scripts', 'custom_theme_assets');


// Add custom js file
function add_custom_js() {
  wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/custom.js',
  array(), false, true);

  wp_enqueue_script('mb-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js",
  array(), true);




  }
add_action('wp_enqueue_scripts', 'add_custom_js');



  // Add custom post type for team members:::::::::::::::::::::::::::::::::::::
function create_team_posttype() {
// set up the arguments
  $args = array(
        'labels' => array(
        //name of the post type
        'name' => 'Team', // name shown is the dashboard
        'singular_name' => 'post'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail')
      );
    // Within our function, we need to register the post type
    register_post_type('team', $args);
  }
add_action('init','create_team_posttype');


  // Add metabox:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
  function add_team_metabox(){
    add_meta_box(
      'team_metabox', // id in dashboard
      'Enter Team Member Details', // title seen in the dashboard
      'team_metabox_callback', // callback function to run and render the elements
      'team', // custom post type to attach it //
      'normal' // position (normal, or side)
    );
  }

  function team_metabox_callback($post){
    $name_data = get_post_meta($post->ID, 'name_input', true);
    $title_data = get_post_meta($post->ID, 'title_input', true);

        // Name Input
    echo '<label for "Name">Name</label>' .
         '<input text="text" id="name_input" class="metabox_input" name="name_input" value="'. $name_data .'" size="50"><br>';

          // Job Title
    echo '<br><label for "Job Title">Job Title</label>' .
          '<input text="text" id="title_input" class="metabox_input" name="title_input" value="'. $title_data .'" size="50">';
  }

  // run our metabox function during the admin_menu WP function
  add_action('admin_menu','add_team_metabox');

  // save the team metabox
  function team_save_metabox_data($post_id, $post){
    // check current permissions of the user
    $post_type = get_post_type_object($post->post_type);
    if(! current_user_can($post_type->cap->edit_post, $post_id)){
      return $post_id;
    }
    // do not save the data if WP is autosaving
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $post_id;
    }
    if ($post->post_type != 'team'){
      return $post_id;
    }
    if(isset($_POST['name_input'])){
      update_post_meta($post_id, 'name_input', sanitize_text_field($_POST['name_input']));
    }else {
      delete_post_meta($post_id, 'name_input');
    }
    if(isset($_POST['title_input'])){
      update_post_meta($post_id, 'title_input', sanitize_text_field($_POST['title_input']));
    }else {
      delete_post_meta($post_id, 'title_input');
    }

    return $post_id;
  }

  add_action('save_post', 'team_save_metabox_data', 10, 2);




 ?>
