<?php get_header(); 
    global $medic;
?>

<!--Page Title-->
<?php var_dump($medic['page_bg']); ?>
<section class="page-title text-center" style="
background-color: <?php echo $medic['page_bg']['background-color']; ?>;
background-repeat: <?php echo $medic['page_bg']['background-repeat']; ?>;
background-size: <?php echo $medic['page_bg']['background-size']; ?>;
background-attachment: <?php echo $medic['page_bg']['background-attachment']; ?>;
background-position: <?php echo $medic['page_bg']['background-position']; ?>;
background-image: url(<?php echo $medic['page_bg']['background-image']; ?>)
">
    <div class="container">
        <div class="title-text">
            <h1><?php wp_title(" "); ?></h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="<?php echo home_url(); ?>">home &nbsp;/</a>
                </li>
                <li><?php wp_title(" "); ?></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section style-four section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="left-side">

                    <?php while(have_posts()): the_post(); ?>
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </figure>
                        </div>
                        <div class="content-text">
                            <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                            <span>By <?php the_author(); ?> / <?php the_date('d F Y'); ?></span>
                            <p><?php echo wp_trim_words(get_the_content(),30,' '); ?></p>
                            <div class="link-btn">
                                <a href="<?php the_permalink(); ?>" class="btn-style-one">read more</a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="right-side">
                    <div class="text-title">
                        <h6>Search</h6>
                    </div>
                    <div class="search-box">
                        <form method="post" action="index.html">
                            <input type="search" name="search" placeholder="Enter to Search" required="">
                        </form>
                    </div>
                    <div class="categorise-menu">
                        <div class="text-title">
                            <h6>Categories</h6>
                        </div>
                        <ul class="categorise-list">
                            <li><a href="#">Alumni <span>(20)</span></a></li>
                            <li><a href="#">Psycology <span>(4)</span></a></li>
                            <li><a href="#">Sonogram <span>(2)</span></a></li>
                            <li><a href="#">x-ray <span>(9)</span></a></li>
                            <li><a href="#">Dental <span>(2)</span></a></li>
                        </ul>                           
                    </div>
                    <div class="tag-list">
                        <div class="text-title">
                            <h6>Tags</h6>
                        </div>
                        <a href="#">ray</a><a href="#">dental</a>
                        <a href="#">Clean</a><a href="#">hospitality</a>
                        <a href="#">Dormamu</a><a href="#">Medical</a><a href="#">hospitality</a>
                    </div>
                </div>
            </div>
        </div>  
        
      
        <div class="styled-pagination">
        <?php the_posts_pagination( array(
            'class'  => '',
            'screen_reader_test' => '&nbsp',
            'prev_text' => '<span class="fa fa-angle-left" aria-hidden = "true"></span>',
            'next_text' => '<span class="fa fa-angle-right" aria-hidden="true">',
        ) ); ?>

            <ul>
                <li><a class="prev" href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a class="next" href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
            </ul>
        </div>                  
    </div>
</section>
<!-- End Contact Section -->

<?php get_footer(); ?>