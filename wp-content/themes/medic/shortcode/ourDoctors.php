<?php

add_shortcode('doctors','doctor_functions');
function doctor_functions($atts, $content){
   $dc_atts = shortcode_atts(array(
      'title' => 'Our Expert
      <span>Doctors</span>',
      'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum 
      <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?',
      'limit' => 3
   ),$atts);
   extract ($dc_atts);
   ob_start();?>
   <section class="team-section section">
      <div class="container">
         <div class="section-title text-center">
               <h3><?php echo $title; ?></h3>
               <p><?php echo $desc; ?></p>
         </div>
         <div class="row">
            
            <?php
               $doctors = new WP_query(array(
                  'post_type' => 'doctors',
                  'Posts_per_page' => $limit
               ));
               while ($doctors->have_posts()) : $doctors->the_post()
            ?>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="team-member">
                     <img src="<?php echo get_post_meta(get_the_ID(),'d_img', true); ?>" alt="doctor" class="img-responsive">
                     <div class="contents text-center">
                           <h4><?php echo get_post_meta(get_the_ID(),'d_name', true); ?></h4>
                           <p><?php echo get_post_meta(get_the_ID(),'d_desc', true); ?></p>
                           <a href="<?php echo get_post_meta(get_the_ID(),'d_button', true); ?>" class="btn btn-main">read more</a>
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
