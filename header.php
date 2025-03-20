<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name');?></title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="style.css">
</head>

<body <?php body_class(); ?>>


  <?php wp_head(); ?>

<!-- Nav Starts -->
<nav class="navbar navbar-expand">
  
    <!-- logo -->
    <?php the_custom_logo(); ?>

    <i class="fas fa-bars mob-button"></i>
    <ul class="navbar-nav desktop-nav">
      <!-- Take Menu pages from WordPress -->
      <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "navbar-nav"]; ?>
      <?php wp_nav_menu($menu_args); ?>
    </ul>
</nav>


<div class="my-mob-overlay">

<div class="mob-inner">
    <i id="closeMob" class="fas fa-close mob-close"></i>
  <h1 class="display-1">Menu</h1>
  <?php
  $menu_args = ['theme_location' => 'footer', 'menu_class' => "mob-menu"];
  wp_nav_menu($menu_args);
    ?>
</div>
</div>