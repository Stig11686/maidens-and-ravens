<?php
/**
 * maidens and ravens functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maidens_and_ravens
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function maidens_and_ravens_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on maidens and ravens, use a find and replace
		* to change 'maidens-and-ravens' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'maidens-and-ravens', get_template_directory() . '/languages' );

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

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'maidens-and-ravens' ),
			'second-hero' => esc_html__( 'Second Hero', 'maidens-and-ravens' ),
			'policies' => esc_html__( 'Policies', 'maidens-and-ravens' ),
			'footer' => esc_html__( 'Footer', 'maidens-and-ravens' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'maidens_and_ravens_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'wc-product-gallery-lightbox' );
	
}
add_action( 'after_setup_theme', 'maidens_and_ravens_setup' );

function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maidens_and_ravens_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'maidens_and_ravens_content_width', 640 );
}
add_action( 'after_setup_theme', 'maidens_and_ravens_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maidens_and_ravens_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'maidens-and-ravens' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'maidens-and-ravens' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'maidens_and_ravens_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function maidens_and_ravens_scripts() {

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Alice&family=Quintessential&display=swap');
	wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style( 'maidens-and-ravens-style', get_template_directory_uri() . '/output.css', array(), null );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/js/slick/slick.css', array(), null);
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css', array(), null );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'maidens-and-ravens-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'maidens_and_ravens_scripts' );

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


/** get the category image for a woocommerce category */
function get_woocommerce_category_image($category_id) {
    // Get the category object
    $category = get_term($category_id, 'product_cat');

    // Get the thumbnail ID
    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);

    // Get the image URL
    $image_url = esc_url(wp_get_attachment_url($thumbnail_id));

    // Display the image
    if ($image_url) {
         return $image_url;
    } else {
        return '';
    }
}

function add_custom_post_types(){
	register_post_type( 'testimonials', array(
		'labels' => array(
			'name' => 'Testimonials',
			'singular_name' => 'Testimonial',
			'add_new' => 'Add New Testimonial',
			'add_new_item' => 'Add New Testimonial',
			'edit_item' => 'Edit Testimonial',
			'new_item' => 'New Test'
			) ,
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);

	register_post_type( 'faqs', array(
		'labels' => array(
			'name' => 'FAQs',
			'singular_name' => 'FAQ',
			'add_new' => 'Add New FAQ',
			'add_new_item' => 'Add New FAQ',
			'edit_item' => 'Edit FAQ',
			'new_item' => 'New FAQ'
			) ,
			'public' => true,
			'has_archive' => true,
		)
	);
}
add_action('init', 'add_custom_post_types');

add_filter( 'woocommerce_is_purchasable', '__return_false' );

function get_the_archive_thumbnail() {
    $term = get_queried_object();
    if ($term && !is_wp_error($term)) {
        $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
        if ($thumbnail_id) {
            return wp_get_attachment_image_url($thumbnail_id, 'full');
        }
    }
    return '';
}


function load_more_posts() {
	$offset = intval($_POST['offset']);
	$posts_per_page = 9;
	
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => $posts_per_page,
		'offset' => $offset,
	);
	
	$posts_query = new WP_Query($args);
	
	if ($posts_query->have_posts()) {
		ob_start();
		while ($posts_query->have_posts()) {
			$posts_query->the_post();
			
			get_template_part('/template-parts/content-posts'); // adjust as per your theme structure
		}
		$posts_html = ob_get_clean();
		wp_reset_postdata();
		wp_send_json_success($posts_html);
	} else {
		// No more posts to load
		wp_send_json_error('No more posts');
	}
	
	wp_die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function remove_archive_prefix($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_author() ) {
        $title = get_the_author();
    } elseif ( is_date() ) {
        $title = get_the_date();
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'remove_archive_prefix' );


function add_custom_product_class($classes) {
    if (is_product() || (is_singular('post') && !is_page())) {
        $classes[] = 'mx-auto max-w-7xl px-4 my-16'; // Add your class here
    }
    return $classes;
}
add_filter('post_class', 'add_custom_product_class');
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


add_action( 'pre_get_posts', 'filter_products_query' );
function filter_products_query($query) {
    if (is_admin() || !$query->is_main_query() || !$query->is_tax('product_cat')) {
        return;
    }

    // Begin building meta query
    $meta_query = ['relation' => 'AND'];

    // Get the list of ACF fields we want to filter by
    $acf_fields = acf_get_fields(183);
	; // Replace these with your actual ACF field names

    foreach ($acf_fields as $field) {
        // Check if the field is present in the GET request and not empty
		$field_name = $field['name'];
        if (!empty($_GET[$field_name])) {
            // Add the field to the meta query
            $meta_query[] = [
                'key' => $field_name,
                'value' => sanitize_text_field($_GET[$field_name]),
                'compare' => '='
            ];
        }
    }

    // Apply the meta query if there are filters
    if (count($meta_query) > 1) {
        $query->set('meta_query', $meta_query);
    }

    // Adjust sorting if desired (optional)
    $query->set('orderby', 'meta_value');  // Replace with desired ordering key or custom criteria
    $query->set('order', 'ASC');           // Set order direction if needed
}
add_action('pre_get_posts', 'filter_products_query');


