<?php
define('VERSION', '1.0.0');
function cenoel_scripts()
{
    wp_enqueue_style('cenoelstyle', get_template_directory_uri() . '/style.css', array(), VERSION, 'all');
    wp_enqueue_style('bootstrapstyle', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), VERSION, 'all');
    wp_enqueue_style('3wschool', 'https://www.w3schools.com/w3css/4/w3.css', array(), VERSION, 'all');
    wp_enqueue_style('awesonstyle', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), VERSION, 'all');
    wp_enqueue_script('jqueryscript', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), VERSION, true);
    wp_enqueue_script('bootstrapscript', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), VERSION, true);
}

add_action('wp_enqueue_scripts', 'cenoel_scripts');

function cenoel_setup()
{
    add_theme_support('post-thumbnails');
    remove_action('wp_head', 'wp_generator');
    add_theme_support('title-tag');
    require_once('includes/wp-bootstrap-navwalker.php');
    register_nav_menus(array('primary' => 'principal', 'secondary' => 'deuxieme'));
}

add_action('after_setup_theme', 'cenoel_setup');

function get_date_and_category($date1, $date2, $cat, $tag)
{
    $chaine = 'publié le <time class="entry-date" datetime="';
    $chaine .= $date1;
    $chaine .= '">';
    $chaine .= $date2;
    $chaine .= '</time> dans la categorie ';
    $chaine .= $cat;
    $chaine .= ' avec l\'etiquette ';
    $chaine .= $tag;

    return $chaine;
}


function new_excerpt_more($more)
{
    return '<a class="more-link" href="' . get_permalink() . '">' . ' [lire la suite]' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');