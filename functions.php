<?php

add_action('after_setup_theme','bval_setup');
function bval_setup(){
  add_image_size( 'entradas', 750, 490, true );
  //Allow dynamic titles
  add_theme_support( 'title-tag' );
  //Allow post thumbnails
  add_theme_support( 'post-thumbnails' );
  //Allow customize the logo whith a size
  add_theme_support( 'custom-logo',array('height'=>100,'width'=>500));
}

add_action('wp_enqueue_scripts', 'bval_styles');
function bval_styles(){
  wp_register_style( 'bootstrapCSS', get_template_directory_uri().'/css/bootstrap.css', array(), '4.1');
  wp_register_style( 'styles', get_template_directory_uri().'/style.css',  array('bootstrapCSS'), '1.0');

  wp_enqueue_style('bootstrapCSS');
  wp_enqueue_style('styles');

}

add_action( 'wp_enqueue_scripts','bval_scripts');
function bval_scripts(){
    wp_register_script('bootrstrapJS', get_template_directory_uri().'/js/bootstrap.js',  array('jquery'), '4.1', true );
    wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js',  array('jquery','bootstrap'), '1.0', true );
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootrstrapJS');
    wp_enqueue_script('scripts');
}


 ?>
