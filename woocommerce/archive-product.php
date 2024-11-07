<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

include(get_template_directory(  ) . '/template-parts/global/header.php');
include(get_template_directory(  ) . '/woocommerce/template-parts/archive-hero.php');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>

<div class="flex flex-col items-start gap-4 max-w-7xl mx-auto px-4 py-24">
    <h1 class="mb-0 text-3xl md:text-4xl lg:text-5xl text-black font-bold">Get Inspired</h1>
    <p class="text-xl lg:text-2xl font-bold">Decide whether you are a maiden or a raven! Browse your dream dresses, and get in touch to see them in person!</p>
</div>

<div class="px-4 max-w-7xl mx-auto">

<?php

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
do_action( 'woocommerce_shop_loop_header' );

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );


// Display product categories in place of the product loop
$categories = get_terms([
    'taxonomy'   => 'product_cat',
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => true,
]);

if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
    echo '<div class="product-categories grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">';

    foreach ( $categories as $category ) {
        $category_link = get_term_link( $category );
        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
        $image = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : wc_placeholder_img_src();
        ?>
        
        <div class="product-category-container lg:w-1/4 px-4 flex flex-col gap-2 items-start">
            <div class="product-category-image bg-white">
                <img class="mix-blend-multiply" src="<?php echo $thumbnail_url; ?>" alt="<?php echo esc_html($category->name); ?>">
            </div>  
            <p><a href="<?php echo get_term_link( $category ); ?>"><?php echo $category->name; ?></a></p>
        </div>

        <?php
    }

    echo '</div>';

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
echo do_shortcode('[tf_product_filter id="filters"]');

?>
</div>

<?php

    include(get_template_directory(  ) . '/template-parts/global/footer.php');
?>
