<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>


    <?php wp_head();?>

  </head>

  <body>
  <header>

  </header>
  <nav>
    <div class="container">

      <a href="#" class="site-name"><?php echo get_bloginfo('name'); ?></a>

      <?php get_search_form();?>

    <?php
        wp_nav_menu(

          array(

            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar'
          )

        );
     ?>
   </div>
  </nav>
  <div class="header-image">
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  </div>
