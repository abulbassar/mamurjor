<?php
/**
 * mamusrc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mamusrc
 */

if ( ! function_exists( 'mamusrc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mamusrc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mamusrc, use a find and replace
		 * to change 'mamusrc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mamusrc', get_template_directory() . '/languages' );

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
			'primary-menu' => esc_html__( 'Primary', 'mamusrc' ),
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
		add_theme_support( 'custom-background', apply_filters( 'mamusrc_custom_background_args', array(
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
add_action( 'after_setup_theme', 'mamusrc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mamusrc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mamusrc_content_width', 640 );
}
add_action( 'after_setup_theme', 'mamusrc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mamusrc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Address', 'mamusrc' ),
		'id'            => 'address',
		'description'   => esc_html__( 'Add address here.', 'mamusrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'footer text', 'mamusrc' ),
		'id'            => 'footer_text',
		'description'   => esc_html__( 'Add copyright here here.', 'mamusrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Mamurjor Rules', 'mamusrc' ),
		'id'            => 'rules',
		'description'   => esc_html__( 'Add rules here here.', 'mamusrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Mamurjor Goolgle Map', 'mamusrc' ),
		'id'            => 'maps',
		'description'   => esc_html__( 'Add Map Here.', 'mamusrc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mamusrc_widgets_init' );

/*
function dynamic_favicon() {
echo '<link rel=icon href="<?php echo get_template_directory_uri();?>/assets/img/favicon_2002x2001.png" size="48x48" type="image/png">';
}
add_action('wp_head', 'dynamic_favicon');
*/
/**
 * Enqueue scripts and styles.
 */
function mamusrc_scripts() {
	wp_enqueue_style( 'mamusrc-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'kalpurush','//fonts.maateen.me/kalpurush/font.css' ); 
	wp_enqueue_style( 'googleapis-family','//fonts.googleapis.com/css?family=Poppins:300,400&display=swap' ); 
	
	
	wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'slicknav.min.css', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'owl.carousel.min.css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.1', 'all');
	
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '20151215', true );
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array(), '20151215', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '20151215', true );
	
	
	wp_enqueue_script( 'mamusrc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mamusrc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mamusrc_scripts' );

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
	for menu
**/

class Description_Walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $classes = empty($item->classes) ? array () : (array) $item->classes;
    $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
    !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
    $output .= "";
    $attributes  = '';
    !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
    !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
    !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
    !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
    $title = apply_filters( 'the_title', $item->title, $item->ID );
    $item_output = $args->before
    . "<a $attributes $class_names>"
    . $args->link_before
    . $title
    . '</a>'
    . $args->link_after
    . $args->after;
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}

/*
	custom post type
*/
require get_template_directory() . '/inc/custom-post.php';

/*custom widget */
require get_template_directory() . '/inc/custom-widget.php';

/* template part call */

require get_template_directory() . '/template-parts/content-rules.php';
require get_template_directory() . '/template-parts/content-about.php';
require get_template_directory() . '/template-parts/content-testimonial.php';
require get_template_directory() . '/template-parts/content-team.php';
require get_template_directory() . '/template-parts/content-course.php';
require get_template_directory() . '/template-parts/content-services.php';
require get_template_directory() . '/template-parts/content-contact.php';




?>