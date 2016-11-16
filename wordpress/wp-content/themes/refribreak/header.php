<!DOCTYPE html>
<html lang="en">
<head>

    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Page title -->
    <title> REFRIBREAK es una empresa dedicada a la elaboración, distribución y comercialización de productos alimenticios. </title>
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url') ?>/js/respond.js"></script>
    <![endif]-->
    <!-- Bootstrap Core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Icon fonts -->
    <link href="<?php bloginfo('template_url') ?>/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="<?php bloginfo('template_url') ?>/fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url') ?>/fonts/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' rel='stylesheet'
          type='text/css'>
    <!-- Theme CSS -->
    <link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet">
    <!-- Color Style CSS -->
    <link href="<?php bloginfo('template_url') ?>/styles/orangejuice.css" rel="stylesheet">
    <!-- Owl Slider & Prettyphoto -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/prettyPhoto.css">
    <!-- Date time picker -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/datetimepicker.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">
    <!-- Favicons-->

    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/img/favicon-96x96.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>
<body id="page-top" class="full" data-spy="scroll" data-target=".navbar-custom">
<!-- Preloader -->
<div id="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!-- Navbar -->
<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-brand navbar-brand-centered page-scroll"><a href="#page-top"><img
                        src="<?php bloginfo('template_url') ?>/img/logo-refribreak.png" alt=""></a></div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav page-scroll">

                <li><a href="#service">Servicios</a></li>
                <li><a href="#testimonial">Testimonios</a></li>
                <li><a href="#brand">Marcas</a></li>
            </ul>
            <ul class="nav navbar-nav  page-scroll navbar-right">

                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#point">Puntos</a></li>
                <li><a href="#contact">Contáctanos</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Full Page Image Background Slider -->
<div class="slider-container">
    <!-- Controls -->
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>


    <!--Slider -->
    <div class="slider">
        <?php
        $i = 0;
        $my_query = new WP_Query('category_name=slider'); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <!-- Slide 1 -->
            <div class="slide slide-<?php echo $i ?> active"
                 style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <div class="slide__overlay">
                    </div>
                    <!-- slide text-->
                    <div class="slide__text">
                        <h1 class="slide__text-heading"><?php echo get_post_meta($post->ID, "titulo-slider", $single = true) ?></h1>
                        <div class="hidden-sm hidden-xs">
                            <p class="lead"><?php echo get_post_meta($post->ID, "texto1-slider", $single = true) ?></p>
                            <div class="page-scroll">
                                <?php $boton = get_post_meta($post->ID, "boton-slider", $single = true);
                                    if(!empty($boton)){
                                ?>
                                <a href="<?php echo get_post_meta($post->ID, "url-boton-slider", $single = true)?>" class="btn btn-default"><?php echo $boton?></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; endwhile;
        wp_reset_postdata(); ?>
    </div>
</div>

<!--/ Slider ends -->
