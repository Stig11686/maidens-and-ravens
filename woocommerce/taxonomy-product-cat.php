<?php

    include(get_template_directory() . '/template-parts/global/header.php');
    include(get_template_directory() . '/woocommerce/template-parts/archive-hero.php');

?>
    <div class="max-w-7xl mx-auto py-16 px-6">
        <div class="flex flex-col items-start gap-4 mb-6">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h2 class="text-3xl lg:text-5xl"><?php woocommerce_page_title(); ?></h2>
            <?php endif; ?>

            <?php
            do_action( 'woocommerce_archive_description' );
            echo do_shortcode('[tf_product_filter id="filters"]');
            ?>
        </div>

        <?php

// Display product categories in place of the product loop
$categories = get_terms([
    'taxonomy'   => 'product_cat',
    'hide_empty' => true,
]);

if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
    echo '<div class="product-categories grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">';

    foreach ( $categories as $category ) {
        $category_link = get_term_link( $category );
        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
        $image = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : wc_placeholder_img_src();
        ?>
        
        <div class="product-category-card">
            <a href="<?php echo esc_url( $category_link ); ?>">
                <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $category->name ); ?>" class="w-full h-64 object-cover mb-4 rounded-lg" />
                <h2 class="text-2xl font-bold text-center"><?php echo esc_html( $category->name ); ?></h2>
            </a>
            <p class="text-center"><?php echo esc_html( $category->description ); ?></p>
        </div>

        <?php
    }

    echo '</div>';
    //woocommerce_pagination();

    do_action( 'woocommerce_after_shop_loop' );
} else {
    /**
     * Hook: woocommerce_no_products_found.
     */
    do_action( 'woocommerce_no_products_found' );
}
?>
</div>

<?php

//get_footer( 'shop' );
include(get_template_directory(  ) . '/template-parts/global/footer.php');
?>
