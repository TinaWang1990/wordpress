<?php
function my_theme_enqueue_styles_and_scripts() {

    $parent_style = 'sydney-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        time()
    );

    wp_enqueue_style( 'lightslider_style', get_stylesheet_directory_uri().'/css/lightslider.css', array(), '1.0');
    wp_enqueue_script( 'lightslider_js', get_stylesheet_directory_uri().'/js/lightslider.js', array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles_and_scripts' );
?>