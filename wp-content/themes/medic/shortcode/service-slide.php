<?php

add_shortcode('service_slide','service_slide_functions');
function service_slide_functions(){
   global $medic;
   ob_start();?>
   <section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Provided
                <span>Services</span>
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
                fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
        </div>
        <div class="row items-container clearfix">

            <?php
               $service_links = new WP_query(array(
                  'post_type' => 'services',
                  'Posts_per_page' => -1
               ));
               while ($service_links->have_posts()) : $service_links->the_post()
            ?>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="<?php echo get_post_meta(get_the_ID(), 's_img', true); ?>" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span><?php echo get_post_meta(get_the_ID(), 's_sub_title', true); ?></span>
                        <a href="<?php the_permalink(); ?>">
                            <h6><?php the_title();?></h6>
                        </a>
                        <p><?php 
                        $content = get_post_meta(get_the_ID(), 's_description', true);
                        echo wp_trim_words($content,10, '') ?></p>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            
        </div>
      </div>
   </section>


<?php
   return ob_get_clean();
}
