<?php
// Get the current product's ID
$current_product_id = $product->get_id();

// Get the product categories
$product_cats = wp_get_post_terms( $current_product_id, 'product_cat' );

if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) {
    // Get the category IDs of the product
    $cat_ids = wp_list_pluck( $product_cats, 'term_id' );

    // Query related products from the same category
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 3, // Limit to 3 products
        'post__not_in'   => array( $current_product_id ), // Exclude current product
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $cat_ids,
            ),
        ),
    );

    $related_products = new WP_Query( $args );

    // Only display the section if there are related products
    if ( $related_products->have_posts() ) {
        ?>
        <div class="w-full flex flex-col gap-4 py-16 px-4 lg:px-6">
            <h2 class="text-3xl lg:text-5xl">You might also like</h2>

            <div class="related-products grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                while ( $related_products->have_posts() ) {
                    $related_products->the_post();

                    // Use your existing product template part
                    get_template_part( 'template-parts/content', 'product' );
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php
    }
}
?>
