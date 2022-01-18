<?php

add_shortcode('service-tab','service_tab_functions');
function service_tab_functions(){
   global $medic;
   ob_start();?>
   <section class="service-tab-section section">
      <div class="outer-box clearfix">
         <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!-- Nav tabs -->
                     <div class="tabs">
                           <ul class="nav nav-tabs" role="tablist">
                              <?php
                                 $service_links = new WP_query(array(
                                    'post_type' => 'services',
                                    'Posts_per_page' => -1
                                 ));
                                 while ($service_links->have_posts()) : $service_links->the_post()
                              ?>
                              <li role="presentation">
                                 <a href="#<?php echo get_post_meta(get_the_ID(), 's_tab_id', true); ?>" data-toggle="tab"><?php the_title(); ?></a>
                              </li>
                              <?php endwhile;?>

                           </ul>
                     </div>
                     <!--Start single tab content-->
                     <div class="tab-content">
                        <?php
                           $service_links = new WP_query(array(
                              'post_type' => 'services',
                              'Posts_per_page' => -1
                           ));
                           while ($service_links->have_posts()) : $service_links->the_post()
                        ?>

                        <div class="service-box tab-pane fade in row" id="<?php echo get_post_meta(get_the_ID(), 's_tab_id', true); ?>">
                           <div class="col-md-6">
                              <img class="img-responsive" src="<?php echo get_post_meta(get_the_ID(), 's_img', true); ?>" alt="service-image">
                           </div>
                           <div class="col-md-6">
                              <div class="contents">
                                    <div class="section-title">
                                       <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div class="text">
                                       <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a
                                          dental prosthetic is added.then a dental pros- thetic is added.</p>
                                          <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a dental
                                                prosthetic is added.then a dental pros- thetic is added.</p>
                                    </div>
                                    <?php echo get_post_meta(get_the_ID(), 's_description', true); ?>
                                    <a href="<?php echo get_post_meta(get_the_ID(), 's_btn', true); ?>" class="btn btn-style-one">Read more</a>
                              </div>
                           </div>
                        </div>
                        <?php endwhile;?>
                          
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
<?php
   return ob_get_clean();
}
