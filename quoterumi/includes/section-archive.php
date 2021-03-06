<?php if( have_posts()): while( have_posts()): the_post();?>

  <div class="card">
    <div class="card-body">

      <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>"
        class="">

      <?php endif;?>

      <?php
          $fname  = get_the_author_meta('first_name');
          $lname  = get_the_author_meta('last_name');
        ?>

      <div class="blog-content">

        <h3><?php the_title();?></h3>
        <div class="date">
          <span class="material-icons-outlined calendar-today">calendar_today</span>
            <?php echo get_the_date()?>
        </div>

        <p>Posted by:
          <span class="author-name">
            <?php echo $fname;?> <?php echo $lname;?>
          </span>
        </p>

        <?php the_excerpt(); ?>
        <hr>

        <div class="blog-btn-section">
          <p class="comment-number">
            <span class="material-icons-outlined question-anwser-icon">question_answer</span>
            <?php comments_number( 'No Comments', 'one Comments', '(%) Comments' ); ?>
          </p>

          <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
      </div>
    </div>
  </div>
</div>

<?php endwhile; else: endif;?>
