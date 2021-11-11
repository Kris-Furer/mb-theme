<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name');?></title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;1,100&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

  <!-- Boostrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Style Sheets -->


  <link rel="stylesheet" href="style.css">
</head>

<body <?php body_class(); ?>>


  <?php wp_head(); ?>


    <!-- Nav Starts -->

    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
    <!-- logo -->
        <a class="navbar-brand" href="<?php echo home_url();?>">
          <span class= "fw-bold">Masterton</span>Builders
        </a>

          <i class="fas fa-bars mob-button"></i>
            <ul class="navbar-nav gap-2 desktop-nav">
              <!-- Take Menu pages from Worpress -->
              <?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "navbar-nav  ms-md-auto gap-2"]; ?>
              <?php wp_nav_menu($menu_args); ?>
            </ul>
          </div>
        </nav>
