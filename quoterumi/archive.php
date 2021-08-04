<?php get_header(); ?>
<section class="page-wrap">
<div class="container">

  <section class="row">

    <div class="col-lg-3">

          <?php if(is_active_sidebar('blog-sidebar')):?>

              <?php dynamic_sidebar('blog-sidebar');?>

          <?php endif;?>

    </div>

    <div class="col-lg-9">
          

          <?php get_template_part('includes/section','archive');?>

          <span class="previous"><?php previous_posts_link();?></span>
          <span class="next"><?php next_posts_link();?><span>
      </div>
    </section>

</div>
</section>

<?php get_footer(); ?>
