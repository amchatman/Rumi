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

     <div class="footer-widget-column-2">
         <?php
            if(is_active_sidebar('footer-column-2')){
            dynamic_sidebar('footer-column-2');
            }
          ?>
     </div>

     <div class="footer-widget-column-3">
         <?php
            if(is_active_sidebar('footer-column-3')){
            dynamic_sidebar('footer-column-3');
            }
          ?>
     </div>

  </div>

    <div class="copyright">
      <p> Copyright 2021 <a href="#">Terms and Private Policy</a></p>
      <p>Theme Created by:<a href="https://github.com/amchatman">amchatman</a></p> 
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
