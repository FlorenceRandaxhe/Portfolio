<?php
// activate Wordpress components 
add_theme_support( 'post-thumbnails' );
 
// register main menu
register_nav_menu('main', 'main navigation');

// Page title
add_filter('wp_title', 'custom_wp_title');
function custom_wp_title($title) {
    if(empty($title)) {
        $title = 'Accueil';
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
	
function portfolio_getMenu($location){
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
        'label' => 'Projects',
        'labels' => [
            'singular_name' => 'Project',
            'add_new_item' => 'Add new project'
        ],
        'description' => 'Add the projects on the homepage',
        'hierarchical' => true,
        'supports' => array('title', 'thumbnail', 'custom-fields', 'excerpt', 'revisions'),
        'public' => true,
        'menu_position'=> 5,

    ]);
}

add_action('init', 'fr_register_post_types');


// remove unused post from side-bar

function remove_menus() {
    remove_menu_page( 'edit.php' );   //Posts
}

add_action( 'admin_menu', 'remove_menus' );



function asset_path ($path){
    return get_template_directory_uri() . $path;
}