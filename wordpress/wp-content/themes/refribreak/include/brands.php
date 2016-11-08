<section id="brands" style="background: url('<?php echo get_the_post_thumbnail_url(21); ?>')" class="text-light">
    <div class="container text-center">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Marcas aliadas</h2>
            </div>
        </div>
        <div class="col-md-10 col-sm-10 col-centered">
            <!-- brands -->
            <div id="owl-brands" class="owl-carousel">
                <?php $brands = new WP_Query('category_name=brands');
                while ($brands->have_posts()) : $brands->the_post(); ?>
                    <div class="item">
                        <a href="#"><img src="<?php the_post_thumbnail_url( 'large' );?>" alt="Brands"></a>
                    </div>
                    <?php $i++; endwhile;
                wp_reset_postdata(); ?>
            </div>
            <!-- /owl-brands -->
        </div>
        <!-- /col-md-10 -->
    </div>
    <!-- /container -->
</section>