<section id="gallery" class="pattern">
    <div class="container">
        <!-- Section heading -->
        <div class="section-heading">
            <h2>Our Gallery</h2>
        </div>
        <!-- Navigation -->
        <div class="nav-gallery col-md-12">
            <ul class="nav nav-tabs cat text-center" role="tablist" id="tabgallery">
                <li class="active"><a href="#" data-filter="*">Todas</a>
                <li><a href="#" data-filter=".puntos">Puntos</a></li>
                <li><a href="#" data-filter=".refrigerios">Refrigerios</a></li>
            </ul>
        </div>
        <!-- Gallery -->
        <div class="row">
            <div class="col-md-12">
                <div id="lightbox">
                    <?php $gallery = new WP_Query('category_name=$gallery');
                    while ($gallery->have_posts()) : $gallery->the_post(); ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                            foreach($posttags as $tag) {
                                echo $tag->name . ' ';
                            }
                        }
                        ?>">
                            <div class="portfolio-item">
                                <div class="gallery-thumb">
                                    <img class="img-responsive" src="<?php the_post_thumbnail_url( 'large' );?>"
                                         alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="<?php the_post_thumbnail_url( 'large' );?>"
                                       data-gal="prettyPhoto[gallery]" class="link centered"
                                       title="<?php the_content()?>">
                                        <i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php  endwhile;
                    wp_reset_postdata(); ?>

                </div>
                <!-- /lightbox-->
            </div>
            <!-- /col-md-12-->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>