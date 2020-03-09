<?php
function agregar_css_js()
{
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
p_enqueue_script( 'script', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

}
add_action('wp_enqueue_scripts', 'agregar_css_js');
?>
