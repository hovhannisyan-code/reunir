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

