<?php

define( 'JS_CSS_VERSION', function_exists( 'get_field' ) && get_field( 'js_css_version', 'option' ) ? get_field( 'js_css_version', 'option' ) : '1.0.0'  );

/**
 * razom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package razom
 */
if ( ! function_exists( 'razom_setup' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function razom_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on razom, use a find and replace
         * to change 'razom' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'razom', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );


        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */

        add_theme_support( 'title-tag' );

        /* add global options page */

        if ( function_exists( 'acf_add_options_page' ) ) {
            acf_add_options_page( 'Theme Settings' );
        }

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'menu-header'    => esc_html__( 'Header', 'razom' ),
            'menu-footer'    => esc_html__( 'Footer', 'razom' ),
            'menu-coryright' => esc_html__( 'Copyright', 'razom' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }

endif;
add_action( 'after_setup_theme', 'razom_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function razom_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'razom' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'razom' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'razom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function razom_scripts() {
    wp_enqueue_style( 'razom-base-css', get_theme_file_uri() . '/assets/css/base.css' );
    wp_enqueue_style( 'razom-main-css', get_theme_file_uri() . '/assets/css/main.css' );
    wp_enqueue_script( 'razom-main-js', get_theme_file_uri() . '/assets/js/main.js', array( 'jquery' ), false, true );
}

add_action( 'wp_enqueue_scripts', 'razom_scripts' );

add_filter( 'style_loader_src', 'raccoon_update_version', 10, 2 );
add_filter( 'script_loader_src', 'raccoon_update_version', 10, 2 );

function raccoon_update_version( $src, $handle ) {
    $src = add_query_arg( array( 'ver' => JS_CSS_VERSION ), $src );
    return $src;
}

add_filter( 'nav_menu_link_attributes', 'add_schema_to_menu', 10, 3 );

function add_schema_to_menu( $atts, $item, $args ) {
    $atts[ 'itemprop' ] = 'url';
    return $atts;
}

add_filter( 'wp_nav_menu', 'add_schema_to_menu_container', 10, 2 );

function add_schema_to_menu_container( $nav_menu, $args ) {
    $nav_menu = '<nav itemscope itemtype="https://schema.org/SiteNavigationElement">' . $nav_menu . '</nav>';
    return $nav_menu;
}

add_filter( 'post_thumbnail_html', 'default_post_thumbnail', 10, 5 );

function default_post_thumbnail( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
    if ( ! $html && ! has_post_thumbnail( $post_id ) ) {
        $default_thumbnail_url = get_template_directory_uri() . '/assets/img/default-thumbnail.svg';
        $html                  = '<img src="' . esc_url( $default_thumbnail_url ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '" />';
    }
    return $html;
}

add_action( 'pre_get_posts', 'show_all_posts' );

function show_all_posts( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', -1 );
    }
}
