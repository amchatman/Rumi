<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <!--******** Navigation Bar Menu ********-->
    <div class="wrapper-navbar">
      <nav class="main-nav">

        <!-- Logo in main navigation bar -->
        <?php if ( ! has_custom_logo() ) { ?>

          <?php if ( is_front_page() && is_home() ) : ?>

            <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

          <?php else : ?>

            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

          <?php endif; ?>

          <?php
        } else {
          the_custom_logo();
        }
        ?>
        <!-- End of logo navigation -->
        <?php
        wp_nav_menu(
          array(
            'menu' => '',
            'menu_class'  => 'navbar-menu',
            )
          );
          ?>
      </nav>
    </div>

<header class="site-header">
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>
</header>
