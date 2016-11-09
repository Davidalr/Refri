<section id="service">
    <div class="container text-center">
        <!-- Section Heading -->
        <div class="section-heading">
            <h2>Servicios</h2>
        </div>
        <!--Navigation -->
        <ul class="nav nav-tabs text-center" role="tablist" id="myTab">
            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Refrigerios</a></li>
            <li><a href="#tab2" role="tab" data-toggle="tab">Cafeterías</a></li>
            <li><a href="#tab3" role="tab" data-toggle="tab">Montaje y alimentación de eventos</a></li>
        </ul>
        <div class="tab-content col-md-11 col-centered  white_block">
            <!--Tab Content 1 -->
            <div class="tab-pane active in fade" id="tab1">
                <div class="row">

                    <h3>Refrigerios</h3>
            <?php $refresh = new WP_Query('category_name=refresh');
            while ($refresh->have_posts()) : $refresh->the_post(); ?>


                <div class="col-md-6  " style="margin:20px 0">
                    <div class="col-lg-12">
                        <div class="team">
                            <img src="<?php the_post_thumbnail_url( 'large' );?>" alt=""/>
                            <!-- Caption-->
                            <div class="teamcaption">

                                <?php the_content()?>
                            </div>
                            <div class="teamname"><h5><?php the_title();?></h5></div>
                        </div>
                    </div>

                </div>
                <?php $i++; endwhile;
            wp_reset_postdata(); ?>
        </div>
        <!-- /.row -->
    </div>



            <!--TabContent 2 -->
            <div class="tab-pane  in fade" id="tab2">
                <div class="row">

                    <h3>Refrigerios</h3>
                    <?php $coffee = new WP_Query('category_name=coffee');
                    while ($coffee->have_posts()) : $coffee->the_post(); ?>


                        <div class="col-md-6 " style="margin:20px 0">
                            <div class="col-lg-12">
                                <div class="team">
                                    <img src="<?php the_post_thumbnail_url( 'large' );?>" alt=""/>
                                    <!-- Caption-->
                                    <div class="teamcaption">

                                        <?php the_content()?>
                                    </div>
                                    <div class="teamname"><h5><?php the_title();?></h5></div>
                                </div>
                            </div>

                        </div>
                        <?php $i++; endwhile;
                    wp_reset_postdata(); ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab2 -->
            <!--Tab Content 3 -->
            <div class="tab-pane  in fade" id="tab3">
                <div class="row">

                    <h3>Refrigerios</h3>
                    <?php $mounting = new WP_Query('category_name=mounting');
                    while ($mounting->have_posts()) : $mounting->the_post(); ?>


                        <div class="col-md-6" style="margin: 20px 0">
                            <div class="col-lg-12">
                                <div class="team">
                                    <img src="<?php the_post_thumbnail_url( 'large' );?>" alt=""/>
                                    <!-- Caption-->
                                    <div class="teamcaption">

                                        <?php the_content()?>
                                    </div>
                                    <div class="teamname"><h5><?php the_title();?></h5></div>
                                </div>
                            </div>

                        </div>
                        <?php $i++; endwhile;
                    wp_reset_postdata(); ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab3 -->

        </div>
        <!--tab-content-->
    </div>
    <!-- /container -->
</section>
