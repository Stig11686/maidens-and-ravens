<?php

    include(get_template_directory() . '/template-parts/global/header.php');
    include(get_template_directory() . '/template-parts/home/hero.php');

?>
    <div class="max-w-3xl mx-auto">
        <div class="woocommerce-products-header">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
            <?php endif; ?>

            <?php
            do_action( 'woocommerce_archive_description' );
            ?>
        </div>

<?php
if ( woocommerce_product_loop() ) {

    do_action( 'woocommerce_before_shop_loop' );

    woocommerce_product_loop_start();

    if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action( 'woocommerce_shop_loop' );

            get_template_part( 'content', 'product' );
        }
    }

    woocommerce_product_loop_end();

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
