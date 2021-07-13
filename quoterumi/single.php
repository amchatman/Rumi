<?php get_header(); ?>
<section class="page-wrap">
<div class="container">


        <?php if(has_post_thumbnail()):?>
          <div class="blog-card card">
            <div class="blog-img">
            <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid img-tumbnail">
            </div>
          <?php endif;?>

            <h1 class="blog-title"><?php the_title();?></h1>

            <?php get_template_part('includes/section','blogcontent');?>
        </div>
</div>
</section>

<?php get_footer(); ?>
