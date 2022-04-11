<?php if(have_posts()): while(have_posts()): the_post();?>
    <div
        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative my-2">
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0"><?php the_title();?></h3>
            <div class="mb-1 text-muted"><?php the_date();?></div>
            <p class="card-text mb-auto"><?php the_excerpt();?></p>
            <a href="<?php the_permalink();?>" class="stretched-link">Continue reading...</a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('blog-small');?>" width="300" class="img-fluid mb-3 img-thumbnail">
            <?php else: ?>
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em">Thumbnail</text>
            </svg>
            <?php endif;?>

        </div>
    </div>
<?php endwhile; else: endif; ?>