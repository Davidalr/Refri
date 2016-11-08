<section id="menu">
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


                    <div class="col-md-6">
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

            <!--Tab Content 2 -->
            <div class="tab-pane fade" id="tab2">
                <div class="row">
                    <!-- Menu: Meals -->
                    <h3>Meals</h3>
                    <div class="col-md-6">
                        <!-- image -->
                        <img class="img-responsive center-block"
                             src="<?php bloginfo('template_url') ?>/img/meals.png" alt="">
                        <!-- menu body -->
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item featured">
                                    <div class="menu-item-name">
                                        Full English Breakfast
                                    </div>
                                    <div class="menu-item-price">
                                        $15
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet consectetuer adipiscing.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Homemade Burger
                                    </div>
                                    <div class="menu-item-price">
                                        $7
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        French Fries with salad
                                    </div>
                                    <div class="menu-item-price">
                                        $12
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                    <!-- second column -->
                    <div class="col-md-6">
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Ciabatta
                                    </div>
                                    <div class="menu-item-price">
                                        $5.5
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Homemade Burger
                                    </div>
                                    <div class="menu-item-price">
                                        $7
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        French Fries with salad
                                    </div>
                                    <div class="menu-item-price">
                                        $12
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Croissant with fruits
                                    </div>
                                    <div class="menu-item-price">
                                        $4
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Tuna salad
                                    </div>
                                    <div class="menu-item-price">
                                        $11
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Pastries
                                    </div>
                                    <div class="menu-item-price">
                                        $2
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab2 -->
            <!--Tab Content 3 -->
            <div class="tab-pane fade" id="tab3">
                <div class="row">
                    <!--  Menu: Drinks -->
                    <h3>Drinks</h3>
                    <div class="col-md-6">
                        <!-- image -->
                        <img class="img-responsive center-block"
                             src="<?php bloginfo('template_url') ?>/img/drinks.png" alt="">
                        <!-- menu body -->
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item featured">
                                    <div class="menu-item-name">
                                        Fruit Smoothies
                                    </div>
                                    <div class="menu-item-price">
                                        $3.5
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet consectetuer adipiscing.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Homemade Burger
                                    </div>
                                    <div class="menu-item-price">
                                        $7
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        French Fries with salad
                                    </div>
                                    <div class="menu-item-price">
                                        $12
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                    <!-- second column -->
                    <div class="col-md-6">
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Ciabatta
                                    </div>
                                    <div class="menu-item-price">
                                        $5.5
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Homemade Burger
                                    </div>
                                    <div class="menu-item-price">
                                        $7
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        French Fries with salad
                                    </div>
                                    <div class="menu-item-price">
                                        $12
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Croissant with fruits
                                    </div>
                                    <div class="menu-item-price">
                                        $4
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Tuna salad
                                    </div>
                                    <div class="menu-item-price">
                                        $11
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Pastries
                                    </div>
                                    <div class="menu-item-price">
                                        $2
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab3 -->
            <!--Tab Content 4 -->
            <div class="tab-pane fade" id="tab4">
                <div class="row">
                    <!-- Menu: Desserts -->
                    <h3>Desserts</h3>
                    <div class="col-md-6">
                        <!-- image -->
                        <img class="img-responsive center-block"
                             src="<?php bloginfo('template_url') ?>/img/desserts.png" alt="">
                        <!-- menu body -->
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item featured">
                                    <div class="menu-item-name">
                                        Cake of the day
                                    </div>
                                    <div class="menu-item-price">
                                        $4
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet consectetuer adipiscing.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Homemade Burger
                                    </div>
                                    <div class="menu-item-price">
                                        $7
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        French Fries with salad
                                    </div>
                                    <div class="menu-item-price">
                                        $12
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                    <!-- second column -->
                    <div class="col-md-6">
                        <div class="menu-body">
                            <div class="menu-section">
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Ciabatta
                                    </div>
                                    <div class="menu-item-price">
                                        $5.5
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Homemade Burger
                                    </div>
                                    <div class="menu-item-price">
                                        $7
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        French Fries with salad
                                    </div>
                                    <div class="menu-item-price">
                                        $12
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Croissant with fruits
                                    </div>
                                    <div class="menu-item-price">
                                        $4
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Tuna salad
                                    </div>
                                    <div class="menu-item-price">
                                        $11
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                                <!-- Item starts -->
                                <div class="menu-item">
                                    <div class="menu-item-name">
                                        Pastries
                                    </div>
                                    <div class="menu-item-price">
                                        $2
                                    </div>
                                    <div class="menu-item-description">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
                                    </div>
                                </div>
                                <!-- Item ends -->
                            </div>
                            <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#tab4 -->
        </div>
        <!--tab-content-->
    </div>
    <!-- /container -->
</section>