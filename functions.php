<?php
if ( ! function_exists( 'travel_theme_support' ) ) :

            /**
             * Sets up theme defaults and registers support for various WordPress features.
             *
             * @since My theme name 1.0
             *
             * @return void
             */
                function travel_theme_support() {
                   

                        // Add support for block styles.
                        add_theme_support( 'wp-block-styles' );

                        // Enqueue editor styles.
                        add_editor_style( 'style.css' );
                }

endif;
add_action('after_setup_theme', 'travel_theme_support');

/*-----------------------------------------------------------------

Enqueue Stylesl
-----------------------------------------------------------------*/

if ( ! function_exists( 'travel_styles' ) ) :

    function travel_styles() {
      // Register Stylesheet
      wp_enqueue_style('travel-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
      wp_enqueue_style('travel-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
    }
  
  endif;
  
  add_action( 'wp_enqueue_scripts', 'travel_styles' );

/*-----------------------------------------------------------------
Customizing The Excerpt Length

-----------------------------------------------------------------*/

function custom_excerpt_length($length){
    return 20;
}
add_filter ('excerpt_length','custom_excerpt_length');

