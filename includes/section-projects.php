<?php if(have_posts()): while(have_posts()): the_post();?>
    <div class="card">
        <img class="card-img-top" src="<?php the_post_thumbnail_url('blog-small');?>" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title"><?php the_title();?></h5>
        <p class="card-text"><?php the_excerpt();?></p>
        </div>
        <div class="card-footer">
        <small class="text-muted"><?php the_date();?></small>
        </div>
    </div>
<?php endwhile; else: endif; ?>