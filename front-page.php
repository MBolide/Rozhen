<?php get_header(); ?>

<div class="main-wrapper ">
    <!-- homepage-top Start -->
    <section class="homepage-top">
        <div class="container">
            <div class="block heading">
                <h1 class="animated fadeInUp mb-1">Solar and Space Weather Research</h1>
                <span class="d-block mb-3 text-white subtitle">Institute of Astronomy and National Astronomical
                    Observatory - Bulgarian Academy of Sciences</span>
            </div>
        </div>
    </section>
    <!-- homepage-top End -->

    <!-- Section News Start -->

    <?php
    $args = array(
        'post_type' => 'post', //news
        'posts_per_page' => 3,
        'category_name' => 'news',
        'orderby' => 'date',
        'order' => 'desc',

    );
    $_posts = new WP_Query($args);
    if($_posts->have_posts()):?>
    <section>
        <div class="container px-5" id="publications">
            <?php $first_post = true;
                while($_posts->have_posts()):
                $_posts->the_post();
                if($first_post):?>
            <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4">Latest News</h1>
                    <h3 class="text-white"><?php the_title();?></h3>
                    <strong class="d-inline-block mb-2"><?php the_tags();?></strong>
                    <p class="lead my-3"><?php the_excerpt();?></p>
                    <p class="lead mb-0"><a href="<?php the_permalink();?>"
                            class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
                <div class="col-md-6" style="position: relative; overflow: hidden;">
                    <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('small_image'); ?>" id="main_bg_img" class="img-fluid">
                    <?php else:?>
                    <img src="<?php bloginfo('template_directory');?>/images/front-page/leadingNews.png"
                        id="main_bg_img">
                    <?php endif; ?>
                </div>
            </div>
            <?php $first_post = false;?>
            <div class="row">
                <?php else: ?>
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0"><?php the_title();?></h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto"><?php the_excerpt();?></p>
                            <a href="<?php the_permalink();?>" class="stretched-link">Continue reading...</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- Section News End -->


    <!-- Section Almanac and coordinates START-->
    <section class="coordinates">
        <div class="container px-5 py-5 ">
            <div class="row">
                <div class="col-6">
                    <p><i class="far fa-clock"></i></p>
                    <h4>Almanac</h4>
                    <hr>
                    <a href="https://time.is/Rozhen,_Smolyan" id="time_is_link" rel="nofollow">Time in Rozhen:</a>
                    <span id="Rozhen__Smolyan_z729"></span>
                    <script src="//widget.time.is/en.js"></script>
                    <script>
                    time_is_widget.init({
                        Rozhen__Smolyan_z729: {
                            template: "TIME<br>DATE<br>SUN",
                            date_format: "dayname, monthname dnum, year, week",
                            sun_format: "Sunrise: srhour:srminute Sunset: sshour:ssminute<br>Day length: dlhoursh dlminutesm",
                            coords: "41.6666700,24.7333300"
                        }
                    });
                    </script>
                </div>
                <div class="col-6">
                    <p><i class="far fa-compass"></i></p>
                    <h4 class="card-title">Coordinates</h4>
                    <hr>
                    <p>41°41'48''N 24°44'18''E</p>
                    <p> Elevation: 1745</p>
                </div>
            </div>

        </div>
    </section>
    <!--  Section Almanac and coordinates End-->

    <!--Cards with images-->
    <div class="container margin-auto" id="section3">
        <section>
            <div class="row row-cols-1 row-cols-md-3 g-4 align-items-stretch px-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header">Image of the Day</div>
                        <div class="card-body" id="card-img">
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">
                                <script>
                                document.write(new Date().toLocaleDateString());
                                </script>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Latest Project</div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer. Lor</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <a href="http://195.96.236.3:3007/images/snapshot.jpg">
                            <div class="card-header">Webcam</div>
                            <div class="card-body" id="card-webcam">
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!--About Us section-->
        <section>
            <div class="container-flex pt-5">
                <div class="row text-justify">
                    <div class="col-md-8 col-xs-12 pt-5 px-5">
                        <h1>About us</h1>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati explicabo quibusdam
                            alias
                            similique ex eaque molestias. Fuga tempore sapiente fugiat quam, perferendis cum harum, odit
                            iusto, cumque consequuntur natus? Sapiente.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni delectus, qui modi,
                            laboriosam,
                            molestiae doloremque nihil aliquid ad excepturi ut distinctio iusto odio veritatis? Quisquam
                            modi corrupti ipsam eius aspernatur.
                        </p>

                    </div>
                    <div class="col-md-4 col-xs-12">
                        <img src="<?php bloginfo('template_directory');?>/images/front-page/mountains.png" id="drawing" style="height: 450px;">
                    </div>
                </div>
            </div>
        </section>
    </div>


    <?php get_footer(); ?>