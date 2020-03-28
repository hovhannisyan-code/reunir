<?php
define('SKYR_TEMPLATE_DIR_URI', get_template_directory_uri());
define('SKYR_ASSETS_DIR_URI', SKYR_TEMPLATE_DIR_URI . '/assets');
define('SKYR_TEMPLATE_DIR' , get_template_directory());
define('SKYR_LANG' , 'sky-text-domain');

if ( ! function_exists( 'skyr_setup' ) ) :

    function skyr_setup() {

        if ( ! isset( $content_width ) ) {
            $content_width = 1280;
        }

        load_theme_textdomain( SKYR_LANG, SKYR_TEMPLATE_DIR . '/languages' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'post-thumbnails' );

        //add_image_size( 'homepage-thumb', 287, 387 );
        //add_image_size( 'spec-thumbnail', 270, 175, true );
        register_nav_menus( array(
            'skyr-primary' => esc_html__( 'Main Menu', SKYR_LANG ),
        ) );

        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'gallery',
            'caption',
        ) );

    }

endif;

add_action( 'after_setup_theme', 'skyr_setup' );

function skyr_scripts() {

    /* === CSS ==== */

    wp_enqueue_style( 'skyr-style', get_stylesheet_uri() );
    wp_enqueue_style( 'skyr-app', SKYR_ASSETS_DIR_URI . '/css/app.css', array(), FALSE );
    wp_enqueue_style( 'skyr-popup', SKYR_ASSETS_DIR_URI . '/css/magnific-popup.css', array(), FALSE );
    wp_enqueue_style( 'skyr-icofont', SKYR_ASSETS_DIR_URI . '/css/icofont.min.css', array(), FALSE );

    
    /* === JS ==== */
   // wp_deregister_script( 'jquery' );
    //wp_register_script( 'jquery',  SKYR_ASSETS_DIR_URI . '/vendors/jquery/jquery-3.4.1.min.js', false, null, true );
    // wp_enqueue_script( 'jquery' );
    wp_register_script( 'skyr-main', SKYR_ASSETS_DIR_URI . '/js/app.js',array(), '1.0', TRUE );
    wp_localize_script('skyr-main', 'sky_ajax_vars',
        array(
            'sky_ajax_url' => admin_url('admin-ajax.php'),
            'sky_nonce' => wp_create_nonce('sky-nonce')

        )
    );
    wp_enqueue_script('skyr-main');

    
}
add_action( 'wp_enqueue_scripts', 'skyr_scripts' );



/*// add custom css class li element
add_filter( 'nav_menu_css_class', 'skyr_nav_menu_class', 10, 4 );
function skyr_nav_menu_class( $classes, $item, $args, $depth ){
    $classes[] = 'nav-item';

    return $classes;
}
// add custom css class a element
add_filter( 'nav_menu_link_attributes', 'skyr_nav_menu_link_attributes', 10, 4 );
function skyr_nav_menu_link_attributes( $atts, $item, $args, $depth ) { 
    
    $atts['class'] .= ' nav-link';

    return $atts;
}

add_filter( 'excerpt_length', 'skyr_excerpt_length' );
function skyr_excerpt_length( $number ){
    // filter...

    return 25;
}*/

$testimonial_labels = array(
    'name'                  => _x( 'Testimonials', 'Post type general name', SKYR_LANG ),
    'singular_name'         => _x( 'Testimonial', 'Post type singular name', SKYR_LANG ),
    'menu_name'             => _x( 'Testimonials', 'Admin Menu text', SKYR_LANG ),
    'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', SKYR_LANG ),
    'add_new'               => __( 'Add New', SKYR_LANG ),
    'add_new_item'          => __( 'Add New Testimonial', SKYR_LANG ),
    'new_item'              => __( 'New Testimonial', SKYR_LANG ),
    'edit_item'             => __( 'Edit Testimonial', SKYR_LANG ),
    'view_item'             => __( 'View Testimonial', SKYR_LANG ),
    'all_items'             => __( 'All Testimonials', SKYR_LANG ),
    'search_items'          => __( 'Search Testimonials', SKYR_LANG ),
    'parent_item_colon'     => __( 'Parent Testimonials:', SKYR_LANG ),
    'not_found'             => __( 'No clients found.', SKYR_LANG ),
    'not_found_in_trash'    => __( 'No clients found in Trash.', SKYR_LANG ),
    'featured_image'        => _x( 'Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', SKYR_LANG ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', SKYR_LANG ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', SKYR_LANG ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', SKYR_LANG ),
    'archives'              => _x( 'Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”.', SKYR_LANG ),
    'insert_into_item'      => _x( 'Insert into client', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post).', SKYR_LANG ),
    'uploaded_to_this_item' => _x( 'Uploaded to this client', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post).', SKYR_LANG ),
    'filter_items_list'     => _x( 'Filter clients list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”.', SKYR_LANG ),
    'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”.', SKYR_LANG ),
    'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”.', SKYR_LANG ),
);

$testimonial_args = array(
    'labels'             => $testimonial_labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array(
                              'with_front' => false
                            ),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'menu_icon'          => 'dashicons-money',
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
);

register_post_type( 'testimonials', $testimonial_args );