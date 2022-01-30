<?php

add_shortcode('faq','faq_functions');
function faq_functions(){
   $faq_atts = shortcode_atts(array(
      'title' => 'FAQ',
      
      
   ),$atts);
   extract ($faq_atts);
   ob_start();?>

<section class="appoinment-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
               <div class="accordion-section">
                  <div class="section-title">
                     <h3><?php echo $title; ?></h3>
                  </div>
                  <div class="accordion-holder">
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        
                        <?php
                           $faq = new WP_query(array(
                              'post_type' => 'faq',
                              'Posts_per_page' => -1
                           ));
                           $i=0;
                           while ($faq->have_posts()) : $faq->the_post();
                           $i++;
                        ?>

                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                              <h4 class="panel-title">
                                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                    <?php the_title();?>
                                 </a>
                              </h4>
                           </div>
                           <div id="collapse<?php echo $i; ?>" class="panel-collapse collaps" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                              <div class="panel-body">
                                   <?php the_content();?>
                              </div>
                           </div>
                        </div>
                        <?php endwhile; ?>

                  </div>
               </div>
            </div>
         </div>

         <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="contact-area">
               <div class="section-title">
                  <h3>Request
                     <span>Appointment</span>
                  </h3>
               </div>
               <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                  <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <input type="text" name="Name" placeholder="Name" required="">
                           </div>
                           <div class="form-group">
                              <input type="email" name="Email" placeholder="Email" required="">
                           </div>
                           <div class="form-group">
                              <select name="subject">
                                    <option>Departments</option>
                                    <option>Diagnostic</option>
                                    <option>Psychological</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <input type="text" name="Phone" placeholder="Phone" required="">
                           </div>
                           <div class="form-group">
                              <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                              <i class="fa fa-calendar" aria-hidden="true"></i>
                           </div>
                           <div class="form-group">
                              <select name="subject">
                                    <option>Doctor</option>
                                    <option>Diagnostic</option>
                                    <option>Psychological</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="form-group">
                              <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                           </div>
                           <div class="form-group text-center">
                              <button type="submit" class="btn-style-one">submit now</button>
                           </div>
                        </div>
                  </div>
               </form>
            </div>                        
         </div>
      </div>                    
   </div>
</section>

<?php
   return ob_get_clean();
}
