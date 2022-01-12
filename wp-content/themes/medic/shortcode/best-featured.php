<?php

add_shortcode('best_featured','best_featured_functions');
function best_featured_functions($atts, $content){
   extract(shortcode_atts(array(
      'title' => 'Best Features <span> of Our Hospital</span>',
      'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis
      nam error officia vero tempora alias? Sunt?'
   ), $atts));
   ob_start();?>
   <section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3><?php echo $title; ?></h3>
						<p><?php echo $desc; ?></p>
					</div>
					<div class="row">

                  <?php 

                     $best = new WP_Query(array(
                        'post_type' => 'best_featured',
                        'posts_per_page' => -1
                     ));
                  
                  while($best->have_posts()): $best->the_post(); ?>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									</figure>
								</div>
								<h6><?php the_title(); ?></h6>
								<p><?php the_content(); ?></p>
							</div>
						</div>
                  <?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
   return ob_get_clean();
}



