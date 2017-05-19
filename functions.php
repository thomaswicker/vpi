<?php

// BEGIN - Load jQuery for visionaryplanningandinvestment.com

if ( !is_admin() ) {
   wp_deregister_script('jquery');
    wp_register_script( 'jqueryJS', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js',array('jquery') );
    wp_enqueue_script('jqueryJS');
}
// END - Load jQuery for visionaryplanningandinvestment.com


// BEGIN LOAD THEME CSS
function theme_styles() {
  wp_enqueue_style( 'main1', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/components-font-awesome/css/font-awesome.min.css' );
  wp_enqueue_style( 'foundation-motion', get_template_directory_uri() . '/bower_components/motion-ui/dist/motion-ui.min.css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/application.min.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// END LOAD THEME CSS


// BEGIN - LOAD THEME JS

add_action( 'wp_enqueue_scripts', 'theme_js' );

function theme_js() {
    wp_register_script( 'foundationjs', get_template_directory_uri() . '/js/foundation.min.js',array('jquery') );
    wp_register_script( 'motion-ui', get_template_directory_uri() . '/bower_components/motion-ui/dist/motion-ui.min.js',array('jquery') );
    wp_register_script( 'appjs', get_template_directory_uri() . '/js/application.min.js',array('jquery') );

    wp_enqueue_script( 'foundationjs' );
    wp_enqueue_script( 'motion-ui' );
    wp_enqueue_script( 'appjs' );
}

// END - LOAD THEME JS

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }
}

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );


if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'excerpt-thumb', 0, 100, false );
    // define excerpt-thumb size here
    // in the example: 100px wide, height adjusts automatically, no cropping
}


// Changing excerpt length for posts on home page...
function new_excerpt_length($length) {
  return 150;
    // define length of excerpt in number of words
}
add_filter('excerpt_length', 'new_excerpt_length');




// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'post-page-sidebar',
    'id'   => 'post-page-sidebar',
    'description'   => 'This is a widgetized area.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}

// add google analytics to footer
// function add_google_analytics() {
// 	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
// 	echo '<script type="text/javascript">';
// 	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
// 	echo 'pageTracker._trackPageview();';
// 	echo '</script>';
// }
// add_action('wp_footer', 'add_google_analytics');

?>
