<footer>
  <div class="container">

    <a href="#" class="site-name"><?php echo get_bloginfo('name'); ?></a>

  <?php
      wp_nav_menu(

        array(

          'theme_location' => 'footer-menu',
          'menu_class' => 'footer-bar'
        )

      );
   ?>

   <div class="footer-widget-column-1">
   <?php
      if(is_active_sidebar('footer-column-1')){
      dynamic_sidebar('footer-column-1');
      }
    ?>
   </div>
  </div>
    <div class="copyright"> Copyright 2021 <a href="#">Terms and Private Policy</a></div>
</footer>
<?php wp_footer();?>
</body>
</html>
