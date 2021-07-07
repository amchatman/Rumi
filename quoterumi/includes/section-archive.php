<?php if( have_posts()): while( have_posts()): the_post();?>

  <div class="card">
    <div class="card-body">

      <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>"
        class="">

      <?php endif;?>


      <div class="blog-content">

        <h3><?php the_title();?></h3>
        <span class="date"><?php echo get_the_date()?></span>

        <?php the_excerpt(); ?>
        <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>

    </div>
  </div>
</div>

<?php endwhile; else: endif;?>
