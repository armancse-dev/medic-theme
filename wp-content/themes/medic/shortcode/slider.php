<?php

add_shortcode('slider','slider_function');
function slider_function(){

   ob_start(); ?>
   <div class="hero-slider">

      <?php
         $slider = new WP_Query(array(
            'post_type' => 'slider',
            'posts_per_page' => -1
         ));
         while($slider->have_posts()) : $slider->the_post();
         $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id());
      ?>

    <div class="slider-item slide1" style="background-image:url(<?echo $thumbnail_url;?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2"><?php the_title(); ?></h2>
                        <p class="tag-text mb-5"><?php the_content(); ?></p>
                        <a href="#" class="btn btn-main btn-white">explore</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>

   <?php
   $output = ob_get_clean();
   return $output;
}