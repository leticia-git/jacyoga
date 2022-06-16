<?php

function add_styles_and_scripts()
{
  $versao = '2.4.7';
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/dist/js/jquery.min.js', array(), $versao, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/src/js/app.js', array('jquery'), $versao, true);
  wp_enqueue_script('mask', get_template_directory_uri() . '/assets/src/js/app.js', array('jquery'), $versao, true);
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/style.css', array(), $versao, 'all');
}
add_action('wp_enqueue_scripts', 'add_styles_and_scripts');

add_theme_support( 'post-thumbnails' );
