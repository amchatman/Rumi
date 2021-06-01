<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


    <?php wp_head();?>

  </head>

  <body>
  <header>

  </header>
  <nav>
    <?php
        wp_nav_menu(

          array(

            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar'
          )

        );
     ?>
  </nav>
