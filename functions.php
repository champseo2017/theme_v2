<?php
/**
 * art_theme_by_champ_V_2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package art_theme_by_champ_V_2
 */

if ( ! function_exists( 'art_theme_by_champ_v_2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function art_theme_by_champ_v_2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on art_theme_by_champ_V_2, use a find and replace
		 * to change 'art_theme_by_champ_v_2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'art_theme_by_champ_v_2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'art_theme_by_champ_v_2' ),
			'menu-2' => esc_html__( 'footermenu', 'art_theme_by_champ_v_2' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'art_theme_by_champ_v_2_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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
add_action( 'after_setup_theme', 'art_theme_by_champ_v_2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function art_theme_by_champ_v_2_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'art_theme_by_champ_v_2_content_width', 640 );
}
add_action( 'after_setup_theme', 'art_theme_by_champ_v_2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function art_theme_by_champ_v_2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'footer-1', 'art_theme_by_champ_v_2' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'footer-2', 'art_theme_by_champ_v_2' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'footer-3', 'art_theme_by_champ_v_2' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	register_sidebar( array(
		'name'          => esc_html__( 'footer-4', 'art_theme_by_champ_v_2' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'sidebar-01', 'art_theme_by_champ_v_2' ),
		'id'            => 'sidebar-01',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'sidebar-02', 'art_theme_by_champ_v_2' ),
		'id'            => 'sidebar-02',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'sidebar-03', 'art_theme_by_champ_v_2' ),
		'id'            => 'sidebar-03',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'sidebar-04', 'art_theme_by_champ_v_2' ),
		'id'            => 'sidebar-05',
		'description'   => esc_html__( 'Add widgets here.', 'art_theme_by_champ_v_2' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
	
}
add_action( 'widgets_init', 'art_theme_by_champ_v_2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function art_theme_by_champ_v_2_scripts() {
	wp_enqueue_style( 'art_theme_by_champ_v_2-style', get_stylesheet_uri() );
	wp_enqueue_style('groundwork', get_template_directory_uri() . '/layouts/groundwork.css', array(), '1.0.0', 'all');
	wp_enqueue_style('custome_css', get_template_directory_uri() . '/layouts/custome.css', array(), '1.0.0', 'all');

	wp_enqueue_script('modernizr-2.6.2', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), '1.0.0', true);
	wp_enqueue_script('jquery_1.10.2', get_template_directory_uri() . '/js/jquery-1.10.2.min.js', array(), '1.0.0', true);
	wp_enqueue_script('groundwork_all_js', get_template_directory_uri() . '/js/groundwork.all.js', array(), '1.0.0', true);

	wp_enqueue_script( 'art_theme_by_champ_v_2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'art_theme_by_champ_v_2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'art_theme_by_champ_v_2_scripts' );

/*Remove version */
// Remove query string from static files
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
   }
   add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
   add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
   
   remove_action('wp_head', 'print_emoji_detection_script', 7);
   remove_action('wp_print_styles', 'print_emoji_styles');
   
   remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
   remove_action( 'admin_print_styles', 'print_emoji_styles' );


   add_filter('nav_menu_css_class', 'discard_menu_classes', 10, 2);


function discard_menu_classes($classes, $item) {
    $classes = array_filter( 
        $classes, 
        create_function( '$class', 
                 'return in_array( $class, 
                      array( "current-menu-item", "current-menu-parent" ) );' )
        );
    return array_merge(
        $classes,
        (array)get_post_meta( $item->ID, '_menu_item_classes', true )
        );
	}
	
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 300;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
 // Replaces the excerpt "Read More" text by a link
 function new_excerpt_more($more) {
    global $post;
 return '<p><button class="asphalt" id="post-'.$post->ID.'"><a style="color:#ffffff" href="'. get_permalink($post->ID) . '" target="_blank"> Read More</a></button></p>';
}

add_filter('excerpt_more', 'new_excerpt_more');

add_filter('acf/settings/remove_wp_meta_box', '__return_false');



/**
 * Just adds a column without content
 *
 * @param array $columns Array of all the current columns IDs and titles
 */
function misha_add_column( $columns ){
	$columns['misha_post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'misha_add_column', 5);
//add_filter('manage_pages_columns', 'misha_add_column', 5); // for Pages
 
 
/**
 * Fills the column content
 *
 * @param string $column ID of the column
 * @param integer $id Post ID
 */
function misha_column_content( $column, $id ){
	if( $column === 'misha_post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'misha_column_content', 5, 2);
//add_action('manage_pages_custom_column', 'misha_column_content', 5, 2); // for Pages

