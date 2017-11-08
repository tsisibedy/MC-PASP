<?php
define('VERSION', '1.0.0');
function cenoel_scripts()
{
    wp_enqueue_style('cenoelstyle', get_template_directory_uri() . '/style.css', array(), VERSION, 'all');
    wp_enqueue_style('bootstrapstyle', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array('3wschool'), VERSION, 'all');
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
    add_image_size('front-slider', 700, 200);
    require_once('includes/wp-bootstrap-navwalker.php');
    register_nav_menus(array('primary' => 'principal', 'secondary' => 'deuxieme','Tertiary '=>'contact'));
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

function cenoel_widgets_init()
{
    register_sidebar(array(
        'name' => 'Menu right',
        'id' => 'widgetized-menu',
        'description' => 'Widgets a afficher dans footer: 4 au maximum',
        'before_widget' => '<div id="%1$s" class="panel-group %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div style="background-color: #be3631;padding: 5px;color: white;">',
        'after_title' => '</div><center><div style="width: 10px;height: 0px;border-bottom: 10px solid transparent;border-right: 10px solid transparent;border-top: 10px solid #be3631;"></div></center>',
    ));
}

add_action('widgets_init', 'cenoel_widgets_init');

function cenoel_widgets_footer()
{
    register_sidebar(array(
        'name' => 'footer',
        'id' => 'footer-menu',
        'description' => 'Widgets a afficher dans footer: 4 au maximum',
        'before_widget' => '<div id="%1$s" class="w3-third %2$s" style="border: none;">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2><hr>',
    ));
}

add_action('widgets_init', 'cenoel_widgets_footer');

function cenoel_widgets_contact()
{
    register_sidebar(array(
        'name' => 'contact',
        'id' => 'contact-menu',
        'description' => 'Widgets a afficher dans footer: 4 au maximum',
        'before_widget' => '<p id="%1$s" class="%2$s" style="border: none;">',
        'after_widget' => '</p>',
        'before_title' => '<h2>',
        'after_title' => '</h2><hr style="margin-right: 100px;">',
    ));
}

add_action('widgets_init', 'cenoel_widgets_contact');

function cenoel_widgets_logo()
{
    register_sidebar(array(
        'name' => 'logo',
        'id' => 'logo-menu',
        'description' => 'Widgets a afficher dans footer: 4 au maximum',
        'before_widget' => '<span id="%1$s" class="%2$s" style="border: none;"><br>',
        'after_widget' => '</span>',
        'before_title' => '',
        'after_title' => '',
    ));
}

add_action('widgets_init', 'cenoel_widgets_logo');


function wpdocs_codex_book_init()
{
    $labels = array(
        'name' => 'Image carousel accueil',
        'singular_name' => 'Image accueil',
        'menu_name' => 'Slider frontal',
        'add_new' => 'Ajouter une image',
        'add_new_item' => 'Ajouter une image accueil',
        'new_item' => 'Nouveau',
        'edit_item' => 'Modifier une image accueil',
        'view_item' => 'voire l\'element',
        'all_items' => 'voire la liste',
        'search_items' => 'chercher une image accueil',
        'not_found' => 'aucune element trouvé',
        'not_found_in_trash' => 'corbeille vide',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 10,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'supports' => array('title', 'page-attributes', 'thumbnail'),
    );

    register_post_type('cenoel', $args);
}

add_action('init', 'wpdocs_codex_book_init');

add_filter('manage_edit-cenoel_columns', 'cenoel_col_change');

function cenoel_col_change($columns)
{
    $columns['cenoel_image_order'] = "Ordre";
    $columns['cenoel_image'] = 'Images affichés';

    return $columns;
}

add_action('manage_cenoel_posts_custom_column', 'cenoel_content_show', 10, 2);

function cenoel_content_show($columns, $post_id)
{
    global $post;
    if ($columns == 'cenoel_image') {
        echo the_post_thumbnail(array(50, 50));
    }
    if ($columns == 'cenoel_image_order') {
        echo $post->menu_order;
    }
}

function cenoel_change_slide_order($query){
    global $post_type,$pagenow;
    if($pagenow == 'edit.php' && $post_type == 'cenoel'){
        $query->query_vars['orderby'] = 'menu_order';
        $query->query_vars['order']= 'asc';
    }
}

add_action('pre_get_posts','cenoel_change_slide_order');

/*add_filter('manage_edit-cenoel_sortable_columns', 'cenoel_function_sortable');

function cenoel_function_sortable($columns)
{
    $columns['cenoel_image_order'] = "menu_order";

    return $columns;
}*/