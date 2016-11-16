<?php get_header(); ?>

<!-- Section Opening Times -->
<?php get_template_part('include/offer'); ?>
<!-- / section ends-->

<!-- Section Menu -->
<?php get_template_part('include/menu'); ?>
<!-- /Section menu ends -->
<!-- Section Services --><!-- /Section ends -->

<!-- Section Newsletter -->
<?php get_template_part('include/newsletter'); ?>
<!-- Section Ends-->

<!-- Section Testimonials -->
<?php get_template_part('include/testimonials'); ?>
<!-- Section ends-->

<!-- Section Brands -->
<?php get_template_part('include/brands'); ?>
<!-- Section ends -->

<!-- Section About -->
<!--/ Section ends -->

<!-- Section Stats -->
<?php get_template_part('include/stats'); ?>
<!-- section ends -->


<!-- Section Gallery -->
<?php get_template_part('include/gallery'); ?>
<!-- Section ends -->

<!-- Section Call to Action -->
<?php get_template_part('include/call'); ?>
<!-- Section ends -->

<!-- Section Team -->    <!-- Section ends -->

<!-- Section Contact -->
<?php get_template_part('include/contact'); ?>
<!--Section ends -->

<!-- Section Opening Times -->
<?php get_template_part('include/times'); ?>
<!-- / section ends-->

<!-- Map -->
<div id="contact" class="wow fadeInTop" data-wow-delay="0.2s">
    <div id="map-canvas"></div>
</div>

<?php $location = new WP_Query('category_name=location');
while ($location->have_posts()) : $location->the_post(); ?>
    location
    <input type="hidden" class="location" data-title="<?php the_title() ?>" value="<?php the_content() ?>">
<?php endwhile;
wp_reset_postdata(); ?>

<!-- / Map ends-->

<?php get_footer(); ?>
