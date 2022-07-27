<?php get_header(); ?>
<div class="main-wrapper ">
<section class="news-top">
        <div class="container">
            <div class="block heading bottom-right">
                <h1 class="animated fadeInUp mb-1">News</h1>
                <span class="d-block mb-3 text-white subtitle">Solar and Space Weather Research</span>
            </div>
        </div>
    </section>
<section class="page-wrap">
<div class="container">
    <?php get_template_part('includes/section','archive'); ?>
    <?php previous_posts_link();?>
    <?php next_posts_link();?>
</div>
</section>
</div>
<?php get_footer(); ?>