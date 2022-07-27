<div class="container mb-5">
    <div class="row post-columns g-2">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="col-sm-8 col-md-6 col-lg-4 card card-project text-white">
            <img src="<?php the_post_thumbnail_url('blog-small');?>" class="card-img"/>
            <div class="card-img-overlay">
                <h2 class="card-title"><?php the_title();?></h2>
                <p class="card-text"><?php the_excerpt();?> </p>
                <a class="btn btn-outline-light"
                    href="<?php the_permalink();?>">Read More..</a>
                
            </div>

        </div>

        <?php endwhile; else: endif; ?>
    </div>
</div>
