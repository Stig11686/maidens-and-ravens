<?php
// Get the current product's ID
$current_product_id = $product->get_id();

// Get the product categories
$product_cats = wp_get_post_terms( $current_product_id, 'product_cat' );

if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) {
    // Get the first category of the product
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
        <div class="w-full flex flex-col">
            <h2>You might also like</h2>

            <div class="related-products grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                while ( $related_products->have_posts() ) {
                    $related_products->the_post();
                    global $product;
                    ?>
                    <div class="product-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo $product->get_price_html(); ?></p>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php
    }
}
?>
