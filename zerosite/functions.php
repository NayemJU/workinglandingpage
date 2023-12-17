<?php
register_nav_menus(
    array('primary-menu'=>'SiteMenu')
);

// Slider Custom Post Type
function Slider_init() {
    // set up Slider labels
    $labels = array(
        'name' => 'Sliders',
        'singular_name' => 'Slider',
        'add_new' => 'Add New Slider',
        'add_new_item' => 'Add New Slider',
        'edit_item' => 'Edit Slider',
        'new_item' => 'New Slider',
        'all_items' => 'All Sliders',
        'view_item' => 'View Slider',
        'search_items' => 'Search Sliders',
        'not_found' =>  'No Sliders Found',
        'not_found_in_trash' => 'No Sliders found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Sliders',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Slider'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'Slider', $args );
    
    // register taxonomy
    register_taxonomy('Slider_category', 'Slider', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Slider-category' )));
}
add_action( 'init', 'Slider_init' );


// Slider Custom Post Type
function SecA_init() {
    // set up SecA labels
    $labels = array(
        'name' => 'SecAs',
        'singular_name' => 'SecA',
        'add_new' => 'Add New SecA',
        'add_new_item' => 'Add New SecA',
        'edit_item' => 'Edit SecA',
        'new_item' => 'New SecA',
        'all_items' => 'All SecAs',
        'view_item' => 'View SecA',
        'search_items' => 'Search SecAs',
        'not_found' =>  'No SecAs Found',
        'not_found_in_trash' => 'No SecAs found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'SecAs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'SecA'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'SecA', $args );
    
    // register taxonomy
    register_taxonomy('SecA_category', 'SecA', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'SecA-category' )));
}
add_action( 'init', 'SecA_init' );

// Slider Custom Post Type
function SecB_init() {
    // set up SecB labels
    $labels = array(
        'name' => 'SecBs',
        'singular_name' => 'SecB',
        'add_new' => 'Add New SecB',
        'add_new_item' => 'Add New SecB',
        'edit_item' => 'Edit SecB',
        'new_item' => 'New SecB',
        'all_items' => 'All SecBs',
        'view_item' => 'View SecB',
        'search_items' => 'Search SecBs',
        'not_found' =>  'No SecBs Found',
        'not_found_in_trash' => 'No SecBs found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'SecBs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'SecB'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'SecB', $args );
    
    // register taxonomy
    register_taxonomy('SecB_category', 'SecB', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'SecB-category' )));
}
add_action( 'init', 'SecB_init' );


// Slider Custom Post Type
function SecC_init() {
    // set up SecC labels
    $labels = array(
        'name' => 'SecCs',
        'singular_name' => 'SecC',
        'add_new' => 'Add New SecC',
        'add_new_item' => 'Add New SecC',
        'edit_item' => 'Edit SecC',
        'new_item' => 'New SecC',
        'all_items' => 'All SecCs',
        'view_item' => 'View SecC',
        'search_items' => 'Search SecCs',
        'not_found' =>  'No SecCs Found',
        'not_found_in_trash' => 'No SecCs found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'SecCs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'SecC'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'SecC', $args );
    
    // register taxonomy
    register_taxonomy('SecC_category', 'SecC', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'SecC-category' )));
}
add_action( 'init', 'SecC_init' );

// Slider Custom Post Type
function SecD_init() {
    // set up SecD labels
    $labels = array(
        'name' => 'SecDs',
        'singular_name' => 'SecD',
        'add_new' => 'Add New SecD',
        'add_new_item' => 'Add New SecD',
        'edit_item' => 'Edit SecD',
        'new_item' => 'New SecD',
        'all_items' => 'All SecDs',
        'view_item' => 'View SecD',
        'search_items' => 'Search SecDs',
        'not_found' =>  'No SecDs Found',
        'not_found_in_trash' => 'No SecDs found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'SecDs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'SecD'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'SecD', $args );
    
    // register taxonomy
    register_taxonomy('SecD_category', 'SecD', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'SecD-category' )));
}
add_action( 'init', 'SecD_init' );

// Slider Custom Post Type
function SecE_init() {
    // set up SecB labels
    $labels = array(
        'name' => 'SecEs',
        'singular_name' => 'SecE',
        'add_new' => 'Add New SecE',
        'add_new_item' => 'Add New SecE',
        'edit_item' => 'Edit SecE',
        'new_item' => 'New SecE',
        'all_items' => 'All SecEs',
        'view_item' => 'View SecE',
        'search_items' => 'Search SecEs',
        'not_found' =>  'No SecEs Found',
        'not_found_in_trash' => 'No SecEs found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'SecEs',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'SecE'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'SecE', $args );
    
    // register taxonomy
    register_taxonomy('SecE_category', 'SecE', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'SecE-category' )));
}
add_action( 'init', 'SecE_init' );

// Slider Custom Post Type
function Cont_init() {
    // set up SecB labels
    $labels = array(
        'name' => 'Conts',
        'singular_name' => 'Cont',
        'add_new' => 'Add New Cont',
        'add_new_item' => 'Add New Cont',
        'edit_item' => 'Edit Cont',
        'new_item' => 'New Cont',
        'all_items' => 'All Conts',
        'view_item' => 'View Cont',
        'search_items' => 'Search Conts',
        'not_found' =>  'No Conts Found',
        'not_found_in_trash' => 'No Conts found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Conts',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Cont'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'Cont', $args );
    
    // register taxonomy
    register_taxonomy('Cont_category', 'Cont', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'Cont-category' )));
}
add_action( 'init', 'Cont_init' );

function add_zerosite_style() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri());
    wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'ion', get_template_directory_uri().'/css/ionicons.min.css');
    wp_enqueue_script( 'min', get_template_directory_uri().'/js/jquery.min.js',array(), false, true);
    wp_enqueue_script( 'bootjs', get_template_directory_uri().'/js/bootstrap.min.js',array(), false, true);
    wp_enqueue_script( 'easing', get_template_directory_uri().'/js/jquery.easing.min.js',array(), false, true);
    wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.js',array(), false, true);
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/scripts.js',array(), false, true);
    
    
    
}

add_action( 'wp_enqueue_scripts', 'add_zerosite_style' );


require_once(dirname(__FILE__).'/inc/vc-elements.php');
