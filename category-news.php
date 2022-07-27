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
    <?php
    global $wp_query;

    $big = 9999999999;

    echo paginate_links( array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link( $big ))) ,
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages ,
    ));
    ?>
</div>
</section>
</div>
<?php get_footer(); ?>