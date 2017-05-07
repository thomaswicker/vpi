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

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

// BEGIN CUSTOM ADMIN DASHBOARD HEADER LOGO
function custom_admin_logo() {
    echo '
        <style type="text/css">
            #header-logo { background-image: url('.get_bloginfo('stylesheet_directory').'/images/login_logo.png) !important; }
        </style>
    ';
}
add_action('admin_head', 'custom_admin_logo');
// END CUSTOM ADMIN DASHBOARD HEADER LOGO



// BEGIN EDIT FOOTER TEXT
 function remove_footer_admin () {
    echo '<span id="footer-thankyou">Site by <a href="http://www.xiri.io" target="_blank">XIRI Media, LLC</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
// END EDIT FOOTER TEXT



/* BEGIN ENABLE CUSTOM MENUS */

add_theme_support( 'menus' );

// Function for creating Widgets
function create_widget($name, $id, $description) {
  register_sidebar(array(
      'name' => __( $name ),
      'id' => $id,
      'description' => __( $description ),
      'before_widget' => ' ',
      'after_widget' => ' ',
      'before_title' => '<h5>',
      'after_title' => '</h5>'
  ));
}

/* END ENABLE CUSTOM MENUS */


// Create widgets in the footer
create_widget("Left Footer", "footer_left", "Displays in the left of the footer");
create_widget("Middle Footer", "footer_middle", "Displays in the middle of the footer");
create_widget("Right Footer", "footer_right", "Displays in the right of the footer");


?>
