<section id="testimonial" data-0="background-position:82% 0%,82% 0%;" data-end="background-position:82% 100px,82% 0%">
    <div class="container">
        <div class="col-md-6 col-lg-7">
            <div class="col-md-12">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>Testimonios</h2>
                </div>
            </div>
            <div id="owl-testimonials" class="owl-carousel">
                <!-- testimonial 1-->
                <?php
                $i = 0;
                $testimonials = new WP_Query('category_name=testimonials'); ?>
                <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                    <blockquote>
                        <div class="col-md-4 col-lg-3 col-centered">
                            <!-- testimonial image-->
                            <img src="<?php the_post_thumbnail_url( 'large' );?>" alt=""
                                 class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1 quote-test">
                            <!-- quote -->
                            <p><?php the_content() ?></p>
                            <small><i class="fa fa-user"></i><?php the_title()?></small>
                        </div>
                    </blockquote>
                    <?php $i++; endwhile;
                wp_reset_postdata(); ?>

            </div>
            <!--owl testimonials-->
        </div>
        <!-- /col-md-7 -->
    </div>
    <!-- /container-->
</section>
