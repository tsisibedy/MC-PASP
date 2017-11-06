<?php
define('VERSION', '1.0.0');
function cenoel_scripts()
{
    wp_enqueue_style('cenoelstyle', get_template_directory_uri() . '/style.css', array(), VERSION, 'all');
    wp_enqueue_style('bootstrapstyle', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), VERSION, 'all');
    wp_enqueue_style('awesonstyle', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), VERSION, 'all');
    wp_enqueue_script('jqueryscript', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), VERSION, true);
    wp_enqueue_script('bootstrapscript', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), VERSION, true);
}

add_action('wp_enqueue_scripts', 'cenoel_scripts');

function cenoel_setup()
{
    add_theme_support('post-thumbnails');
    remove_action('wp_head','wp_generator');
    add_theme_support('title-tag');
    require_once('includes/wp-bootstrap-navwalker.php');
    register_nav_menus(array('primary'=>'principal'));
}

add_action('after_setup_theme','cenoel_setup');