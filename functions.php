<?php
require_once('inc/acf/setup.php');
function addMyScript() {
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css', false,  'all' );
    // wp_register_script('censor-script', get_template_directory_uri() . '/script.min.js', false);
    wp_register_script('censor-script', get_template_directory_uri() . '/script.js', true);
    wp_enqueue_script('censor-script');
}
add_action('wp_footer', 'addMyScript');



// Register wordpress menu
register_nav_menu('primary', 'Primary');





//register fontawesome for icons
function wmpudev_enqueue_icon_stylesheet() {
    wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_footer', 'wmpudev_enqueue_icon_stylesheet' );





function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 288, 192, true );
/*
* Callback function to filter the MCE settings
*/
function my_mce_before_init_insert_formats( $init_array ) {
// Define the style_formats array
    $style_formats = array(
        /*
        * Each array child is a format with it's own settings
        * Notice that each array has title, block, classes, and wrapper arguments
        * Title is the label which will be visible in Formats menu
        * Block defines whether it is a span, div, selector, or inline style
        * Classes allows you to define CSS classes
        * Wrapper whether or not to add a new block-level element around any selected elements
        */
        array(
            'title' => 'Stycke 2',
            'block' => 'div',
            'classes' => 'stycke',
            'wrapper' => true,
        ),
        array(
            'title' => 'Ingress',
            'block' => 'span',
            'classes' => 'preamble',
            'wrapper' => true,
        ),
        array(
            'title' => 'Sliderubrik',
            'block' => 'span',
            'classes' => 'slide-caption',
            'wrapper' => true,
        ),
        array(
            'title' => 'Oboldad',
            'block' => 'div',
            'classes' => 'unbolded',
            'wrapper' => true,
        ),
        array(
            'title' => 'Ingen marginal',
            'block' => 'div',
            'classes' => 'un-margin',
            'wrapper' => true,
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;
}

//add options page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Footer inställningar',
        'menu_title'	=> 'Footer',
        'menu_slug' 	=> 'footer-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));


}


// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

function chosen_references() {
    $labels = array(
        'name'                => _x( 'Utvalda referenser', 'Post Type General Name', 'Censor' ),
        'singular_name'       => _x( 'Utvlad referens', 'Post Type Singular Name', 'Censor' ),
        'menu_name'           => __( 'Utvalda referenser', 'Censor' ),
        'all_items'           => __( 'Alla utvalda referenser', 'Censor' ),
        'view_item'           => __( 'Visa utvalda referens', 'Censor' ),
        'add_new_item'        => __( 'Lägg till ny utvald referens', 'Censor' ),
        'add_new'             => __( 'Lägg till ny utvald referens', 'Censor' ),
        'edit_item'           => __( 'Redigera utvlad referens', 'Censor' ),
        'update_item'         => __( 'Uppdatera utvald referens', 'Censor' ),
        'search_items'        => __( 'Sök ibland referenser', 'Censor' ),
        'not_found'           => __( 'Kunde ej hittas', 'Censor' ),
        'not_found_in_trash'  => __( 'Kunde ej hittas', 'Censor' ),
    );
    $args = array(
        'label'               => __( 'utvald_referens', 'Censor' ),
        'description'         => __( 'Alla referenser', 'Censor' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'			  => 'dashicons-groups'
    );
    register_post_type( 'utvald_referens', $args );
}
add_action( 'init', 'chosen_references', 0 );

function transactions() {
    $labels = array(
        'name'                => _x( 'Transaktioner', 'Post Type General Name', 'Censor' ),
        'singular_name'       => _x( 'Transaktion', 'Post Type Singular Name', 'Censor' ),
        'menu_name'           => __( 'Transaktioner', 'Censor' ),
        'all_items'           => __( 'Alla transaktion', 'Censor' ),
        'view_item'           => __( 'Visa transaktioner', 'Censor' ),
        'add_new_item'        => __( 'Lägg till ny transaktion', 'Censor' ),
        'add_new'             => __( 'Lägg till ny transaktion', 'Censor' ),
        'edit_item'           => __( 'Redigera transaktion', 'Censor' ),
        'update_item'         => __( 'Uppdatera transaktion', 'Censor' ),
        'search_items'        => __( 'Sök ibland transaktioner', 'Censor' ),
        'not_found'           => __( 'Kunde ej hittas', 'Censor' ),
        'not_found_in_trash'  => __( 'Kunde ej hittas', 'Censor' ),
    );
    $args = array(
        'label'               => __( 'transaction', 'Censor' ),
        'description'         => __( 'Alla transaktioner', 'Censor' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
        'taxonomies'          => array('category', 'all'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'			  => 'dashicons-groups'
    );
    register_post_type( 'transaktion', $args );
}
add_action( 'init', 'transactions', 0 );
function nyheter() {
    $labels = array(
        'name'                => _x( 'Nyheter', 'Post Type General Name', 'Censor' ),
        'singular_name'       => _x( 'Nyhet', 'Post Type Singular Name', 'Censor' ),
        'menu_name'           => __( 'Nyheter', 'Censor' ),
        'all_items'           => __( 'Alla nyheter', 'Censor' ),
        'view_item'           => __( 'Visa nyhet', 'Censor' ),
        'add_new_item'        => __( 'Lägg till ny nyhet', 'Censor' ),
        'add_new'             => __( 'Lägg till ny nyhet', 'Censor' ),
        'edit_item'           => __( 'Redigera nyhet', 'Censor' ),
        'update_item'         => __( 'Uppdatera nyhet', 'Censor' ),
        'search_items'        => __( 'Sök ibland nyheter', 'Censor' ),
        'not_found'           => __( 'Kunde ej hittas', 'Censor' ),
        'not_found_in_trash'  => __( 'Kunde ej hittas', 'Censor' ),
    );
    $args = array(
        'label'               => __( 'nyheter', 'Censor' ),
        'description'         => __( 'Alla nyheter', 'Censor' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'revisions', 'page-attributes' ),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'			  => 'dashicons-networking'
    );
    register_post_type( 'nyheter', $args );
}
add_action( 'init', 'nyheter', 0 );
