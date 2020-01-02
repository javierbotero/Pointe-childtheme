<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

//Inject the awesome fonts in the head section

function awesomeImport () {
  ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php
}
add_action("wp_head", "awesomeImport");

// inject html slider to the landing page

/*
function addsliderPointe () {

  if (is_page(7)) {
    ?>
    <div class='slider'>
      <div class="slider-item">
        <img src="http://localhost/Pointe/pointe1/wp-content/uploads/2019/12/Fotoportada-scaled.jpg" alt="picture-dancer">
      </div>
      <div class="slider-item">
        <video id=videoPointe>
          <source src= "http://localhost/Pointe/pointe1/wp-content/uploads/2019/12/PuntasExtasisVeroSinAudio.mp4" type="video/mp4">
        </video>
      </div>
    <?php
  }

}

add_action("wp_body_open","addsliderPointe");
*/

// link the js file script for the slider

/*

function addScript () {
  wp_enqueue_script(
    'sliderScript',
    get_stylesheet_directory_uri().'/js/sliderScript.js'
    );
}

add_action ('wp_footer', addScript);
