<!DOCTYPE html>
<html lang="en" style="margin-top:0px !important">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <title><?php bloginfo('name'); ?></title>
    
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <?php wp_head(); ?>
    </head>

    <body>

    <nav class="brown" style="margin-top:0px">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><?php  wp_nav_menu(); ?></li>
        </ul>
      </div>
    </div>
  </nav>