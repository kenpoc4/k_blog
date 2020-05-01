<?php

function agregar_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');

    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array ('jquery'), '1.16', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array ('popper'), '4.4.1', true);

    //js personalizado
    wp_enqueue_script('app-js', get_template_directory_uri().'/js/app.js', array('bootstrap-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'agregar_css_js');

// Imagenes destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );

 }

 //Agragando sidebar
 function k_widgets(){
    register_sidebar( array(
        'id'    =>  'k-widgets',
        'name'          => __( 'Widget derecha' ),
        'description'   => __( 'Arrastrar lo que sea' ),
        'before_widget' => '<div class="card-body ken">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4><hr>',
    ));
 }
 add_action( 'widgets_init', 'k_widgets');