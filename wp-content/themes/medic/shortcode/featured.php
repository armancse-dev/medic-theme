<?php

add_shortcode('featured','featured_functions');
function featured_functions(){
   global $medic;
   ob_start();?>
   <section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fa <?php echo $medic['e_icon_name'];?>"></i>
                        <h2><?php echo $medic['e_title'];?></h2>
                        <a href="te:<?php echo $medic['e_phone'];?>"><?php echo $medic['e_phone'];?></a>
                        <p><?php echo $medic['e_desc'];?></p>
                    </div>
                    <div class="top-doctor item">
                        <i class="fa <?php echo $medic['h_icon_name'];?>"></i>
                        <h2><?php echo $medic['h_title'];?></h2>
                        <p><?php echo $medic['h_desc'];?></p>
                        <a href="<?php echo $medic['h_btn'];?>" class="btn btn-main">Read more</a>
                    </div>
                    <div class="working-time item">
                        <i class="fa <?php echo $medic['w_icon_name'];?>"></i>
                        <h2><?php echo $medic['w_title'];?></h2>
                        <?php echo $medic['h_w_table'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   <?php
   return ob_get_clean();
}





