<div class="card">
                            <div class="image" style="background-image: url(); background-size: cover; background-position: 50% 50%;">
                                 <?php the_post_thumbnail('thumbnail', array('class' => '')); ?>   
                                <div class="filter">
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-bookmark-o"></i> Bookmark
                                    </button>
                                    <button type="button" class="btn btn-neutral btn-simple">
                                        <i class="fa fa-align-left"></i> Read article
                                    </button>
                                </div>
                            </div> <!-- end card image -->
                            <div class="content">
                                <p class="category"><?php the_category(' '); ?></p>
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="title"><?php the_title(); ?></h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a href="#">
                                           <i class="fa fa-female"></i> <p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
                                        </a>
                                    </div>
                                    <div class="stats pull-right">
                                        <i class="fa fa-clock-o"></i>  <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
                                    </div>
                                </div> <!-- end card footer -->
                            </div>
                        </div> <!-- end card -->