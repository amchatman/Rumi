
<?php if( have_posts()): while( have_posts()): the_post();?>

  <div class="blog-post">
    <?php
        $fname  = get_the_author_meta('first_name');
        $lname  = get_the_author_meta('last_name');
      ?>


      <span class="date">
        <span class="material-icons-outlined calendar-today">calendar_today</span>
        <?php echo get_the_date()?>
      </span>

      <p class="author">Posted by:
        <span class="author-name">
        <?php echo $fname;?> <?php echo $lname;?>
        </span>
    </p>

      <div class="blog-content"><?php the_content(); ?></div>

      <div class="tag-content">
      <?php
      $tags = get_the_tags();
      foreach((array)$tags as $tag):?>

          <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge bg-success">
              <?php echo $tag->name; ?>
          </a>

      <?php endforeach ?>



    <?php
      $categories = get_the_category();
      foreach($categories as $cat):?>

      <a href="<?php echo get_category_link($cat->term_id);?>" class="badge bg-success">
      <?php echo $cat->name;?>
      </a>
    <?php endforeach; ?>
    </div>
  </div>

  <?php comments_template();?>






<?php endwhile; else: endif;?>
