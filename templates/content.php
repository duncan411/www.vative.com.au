
<div class="card card-horizontal">
  <div class="row">
    <div class="col-md-5">
      <div class="image" style="background-image: url(file:///C:/wamp/www/x_get_shit_done_pro_html_1.2/x_get_shit_done_pro_html_1.2/HTML/assets/img/blog_1.png); background-size: cover; background-position: 50% 50%;">
        <?php the_post_thumbnail('project-archive', array('class' => 'alignleft')); ?>
        <div class="filter filter-azure">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="color:white;" class="btn btn-neutral btn-round">
          <i class="fa fa-link"></i> Read Article
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-7 padding-left-none">
      <div class="content">
        <i class="fa fa-link"></i><p class="category"><?php the_category(' '); ?></p>
        <a href="<?php the_permalink(); ?>">
          <h4 class="title"><?php the_title(); ?></h4>
        </a>
        <!-- <a href="#"></a> -->
        <div class="description"><?php the_excerpt(); ?></div>
        <div class="meta">
          <?php get_template_part('templates/entry-meta'); ?>
          <div class="stats">
            <a href="#">
              <i class="fa fa-comments"></i> 23 Comments
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>