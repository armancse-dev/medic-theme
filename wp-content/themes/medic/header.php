<?php
    global $medic;
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('title')?></title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="<?php echo get_template_directory_uri()?>/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri()?>/images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Opening Hours : <?php echo $medic['op_hr']; ?></h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                      <?php if($medic['fb_url'] !=''): ?>
                        <li>
                              <a href="<?php echo $medic['fb_url'];?>">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <?php endif;?>

                        <?php if($medic['twitter_url'] !=''): ?>
                        <li>
                              <a href="<?php echo $medic['twitter_url'];?>">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <?php endif;?>

                        <?php if($medic['google_url'] !=''): ?>
                        <li>
                              <a href="<?php echo $medic['google_url'];?>">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <?php endif;?>

                        <?php if($medic['ins_url'] !=''): ?>
                        <li>
                              <a href="<?php echo $medic['ins_url'];?>">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <?php endif;?>

                        <?php if($medic['pen_url'] !=''): ?>
                        <li>
                              <a href="<?php echo $medic['pen_url'];?>">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                        <?php endif;?>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                            <?php if($medic['logo_upload']['url'] == ''): ?>
                            <h3><?php echo $medic['logo_text']; ?></h3>

                            <?php else: ?>
                             <img src="<?php echo $medic['logo_upload']['url'];?>" alt="" width="130">

                            <?php endif; ?>
                            
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <strong>Email</strong>
                              <br>
                              <a href="mailto:<?php echo $medic['header_email']; ?>">
                                <span><?php echo $medic['header_email']; ?></span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span><?php echo $medic['header_phone']; ?></span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="<?php echo $medic['header_link']; ?>" class="btn-style-one"><?php echo $medic['header_button']; ?></a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <?php
                        wp_nav_menu(
                              array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav navbar-nav',
                                'walker' => new medic_Nav_Menu()
                              )
                        );
                  
                  ?>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->