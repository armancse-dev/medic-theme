<?php

    
    if ( ! function_exists( 'medic_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function medic_theme_setup() {
    
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'medic', get_template_directory() . '/languages' );
    
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );
    
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
    
        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'main_menu' ),
            'secondary' => __('Secondary Menu', 'seconday_menu' )
        ) );

        //slider
        register_post_type('slider', array(
          'labels' => array(
              'name' => 'Slider',
              'add_new' => 'Add New Slide',
              'add_new_item' => 'Add new slide',
              'featured_image' => 'Slide Image'
          ),
          'public' => true,
          'menu_icon' => 'dashicons-images-alt2',
          'supports' => array('title', 'editor', 'thumbnail')
        ));

        //Best featured
        register_post_type('best_featured', array(
          'labels' => array(
              'name' => 'Best Featured',
              'add_new' => 'Add New Featured',
              'add_new_item' => 'Add new featured',
              'featured_image' => 'Featured Image'
          ),
          'public' => true,
          'menu_icon' => 'dashicons-images-alt2',
          'supports' => array('title', 'editor', 'thumbnail')
        ));

        //Services
        register_post_type('services', array(
          'labels' => array(
              'name' => 'Services',
              'add_new' => 'Add New Services',
              'add_new_item' => 'Add new Services'
          ),
          'public' => true,
          'menu_icon' => 'dashicons-images-alt2',
          'supports' => array('title')
        ));
    
        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif; // myfirsttheme_setup
    add_action( 'after_setup_theme', 'medic_theme_setup' );

  function medic_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer widget 1', 'medic' ),
        'id'            => 'footer-sidebar-1',
        'description'   => __( 'here set your footer widgets', 'medic' ),
        'before_widget' => '<div class="col-md-4 col-sm-6 col-xs-12">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ) );

    //blog sidebar
    register_sidebar(array(
      'name' => __( 'Blog Sidebar', 'medic' ),
      'id' => 'blog_sidebar',
      'description' => 'Add your blog widgets',
      'before_title'  => '<div class="text-title"><h6>',
      'after_title'   => '</h6></div>',
      'before_widget' => '<div class="sidebar_item">',
      'after_widget'  => '</div>'
    ));
  }
  add_action( 'widgets_init', 'medic_widgets_init' );




  // add_action( 'widgets_init', 'medic_widgets' );
 
  //   function medic_widgets(){

  //     register_sidebar(array(
  //       'name' => 'Footer 1 widget',
  //       'id' => 'footer_1_w',
  //       'desc' => 'here set your footer widgets',
  //       'before_title' => '<h6>',
  //       'after_title' => '</h6>'
  //     ));
  //   }



//footer recent shortcode
  add_shortcode('medic_recent_post','medic_recent_function');

    function medic_recent_function($atts,$content){
        $recent_atts = shortcode_atts(array(
            'count' => 2
        ),$atts);
        extract($recent_atts);
          ob_start();

        ?>
        <div class="social-links">
        <ul>
            <?php 
                $recent_post = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => $count,
                    'order' => 'ASC'
                ));
                while($recent_post->have_posts()) : $recent_post->the_post(); ?>
            
          <li class="item">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <?php
                    $thumb_url = wp_get_attachment_url(get_post_thumbnail_id());
                  ?>
                  <img class="media-object" src="<?php echo  $thumb_url;?>" alt="post-thumb">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="<?php the_parmalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </li>
          <?php endwhile;wp_reset_postdata(); ?>
        </ul>
      </div>

      <?php
      $output = ob_get_clean();
      return $output;
    }


    //shortcode
    require_once('shortcode/slider.php');
    require_once('shortcode/featured.php');
    require_once('shortcode/best-featured.php');
    require_once('shortcode/service-tab.php');
    require_once('shortcode/service-slide.php');

    //requires files
    require_once('medic-walker-navmenu.php');
    require_once('inc/redux/redux-core/framework.php');
    require_once('inc/redux/sample/config.php');
    require_once('inc/cmb2/init.php');
    require_once('inc/cmb2/functions.php');