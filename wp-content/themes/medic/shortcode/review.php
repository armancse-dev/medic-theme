<?php

add_shortcode('review','review_functions');
function review_functions($atts, $content){

   $review_atts = shortcode_atts(array(
      'title' => 'What Our
      <span>Patients Says</span>',
      'bg' => get_template_directory_uri().'/images/testimonials/1.jpg'
      
   ),$atts);
   extract ($review_atts);
   ob_start();?>
   <section class="testimonial-section" style="background: url(<?php echo $bg; ?>);">
      <div class="container">
         <div class="section-title text-center">
               <h3><?php echo $title; ?></h3>
         </div>
         <div class="testimonial-carousel">

            <?php
               $review = new WP_query(array(
                  'post_type' => 'review',
                  'Posts_per_page' => -1
               ));
               while ($review->have_posts()) : $review->the_post()
            ?>
               <!--Slide Item-->
               <div class="slide-item">
                  <div class="inner-box text-center">
                     <div class="image-box">
                           <figure>
                              <?php the_post_thumbnail(); ?>
                           </figure>
                     </div>
                     <h6><?php the_title(); ?></h6>
                     <p><?php the_content(); ?></p>
                  </div>
               </div>
            <?php endwhile; ?>
               
         </div>
      </div>
   </section>

   <?php
   return ob_get_clean();
}
