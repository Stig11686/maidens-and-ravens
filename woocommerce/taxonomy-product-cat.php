<?php

    include(get_template_directory() . '/template-parts/global/header.php');
    include(get_template_directory() . '/woocommerce/template-parts/archive-hero.php');

?>
    <div class="max-w-7xl mx-auto py-16 px-6 text-white">
        <div class="flex flex-col items-start gap-4 text-white mb-6">
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h2 class="text-3xl lg:text-5xl"><?php woocommerce_page_title(); ?></h2>
            <?php endif; ?>

            <?php
            do_action( 'woocommerce_archive_description' );
            ?>
        </div>

<?php
if ( woocommerce_product_loop() ) {

    woocommerce_product_loop_start();

    if ( wc_get_loop_prop( 'total' ) ) {
    ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <?php
        while ( have_posts() ) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action( 'woocommerce_shop_loop' );

            get_template_part( 'template-parts/content', 'product' );
        }
    ?>
    </div>
    <?php

    // Add pagination
    woocommerce_pagination();

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
