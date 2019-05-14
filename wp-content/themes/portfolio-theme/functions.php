<?php
// activate Wordpress components 
add_theme_support( 'post-thumbnails' );
 
// register main menu
register_nav_menu('main', 'main navigation');

// Page title
add_filter('wp_title', 'custom_wp_title');
function custom_wp_title($title) {
    if(empty($title)) {
        if (get_locale() == 'en_GB') {
            $title = 'Home';
        } else {
            $title = 'Accueil';
        }
    }
    $title .= ' | ' . get_bloginfo('name');
    return trim($title);
}

// page url

function fr_get_page_id_from_template($templateName) {
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-parts/' . $templateName,
        'hierarchical' => 0
    ));
    foreach($pages as $page){
        return $page->ID;
    }
}

function fr_get_page_url($templateName) {
    return get_page_link(fr_get_page_id_from_template($templateName));
}


// get menu structure as array

function fr_getMenu($location){
    $menu = [];
    $locations = get_nav_menu_locations();
    foreach (wp_get_nav_menu_items ($locations[$location]) as $post)
    {
        $item = new stdClass();
        $item->url = $post->url;
        $item->label = $post->title;
        $item->children = [];
        if (!$post->menu_item_parent) {
            $menu[$post->ID] = $item;
        } else{
            $menu[$post->nemu_item_parent]->children[$post->ID] = $item;
        }
    }
    return $menu;
}

// create a custom post
function fr_register_post_types(){
    register_post_type('projects', [
        'label' => 'Projets',
        'labels' => [
            'singular_name' => 'Projet',
            'add_new_item' => 'Ajouter un projet'
        ],
        'description' => 'Ajouter un projet sur la page d\'accueil',
        'hierarchical' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields', 'excerpt', 'revisions'),
        'public' => true,
        'menu_position'=> 5,

    ]);
}

add_action('init', 'fr_register_post_types');


// remove unused menu from side-bar

function remove_menus() {
remove_menu_page( 'edit.php' );                    //Posts
remove_menu_page( 'edit-comments.php' );           //Comments
}

add_action( 'admin_menu', 'remove_menus' );


// path for assets
function asset_path ($path){
    return get_template_directory_uri() . $path;
}

// remove text area on page template

add_action('admin_init', 'remove_textarea');

function remove_textarea() {
    remove_post_type_support( 'page', 'editor' );
}

// Register custom translation

function my_theme_setup(){
    load_theme_textdomain( 'fr', get_template_directory() . '/lang' );
}

add_action('init', 'my_theme_setup');