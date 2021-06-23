<?php

add_action( 'wp_enqueue_scripts', 'timber_style' );
// add_action( 'wp_enqueue_scripts', 'timber_scripts' );

function timber_style() {
  // if those two styles were not part of style.min.css they would be included as follows
  // wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
  // wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

// function timber_scripts() {
// rearrange jquery version for better compatibility
// 	wp_deregister_script( 'jquery' );
// 	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
// 	wp_enqueue_script( 'jquery' );

//   wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), null, true );
  
//   wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );

// }

?>