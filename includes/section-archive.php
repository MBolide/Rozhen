<div class="container">
    <div class="row post-columns">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="post">
                <div class="post-thumbnail">
                    <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('blog-small');?>" class="img-fluid img-thumbnail news-card-img">
                    <?php else: ?>
                        <img src="<?php bloginfo('template_directory');?>/images/Oops.png" class="img-fluid img-thumbnail news-card-img">
                    <?php endif;?>
                </div>
                <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#"><?php the_title();?></a></h2>
                    <div class="post-meta"><?php the_date();?>
                    </div>
                </div>
                <div class="post-entry">
                    <p><?php the_excerpt();?></p>
                </div>
                <div class="post-more"><a href="<?php the_permalink();?>">Read more</a></div>
            </div>
        </div>

        <?php endwhile; else: endif; ?>
    </div>
</div>