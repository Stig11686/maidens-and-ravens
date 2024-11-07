<?php

include(get_template_directory() . '/template-parts/global/header.php');
include(get_template_directory() . '/woocommerce/template-parts/archive-hero.php');
do_action( 'woocommerce_before_main_content' );

?>
<div class="max-w-7xl mx-auto py-16 px-6">
    <div class="flex flex-col items-start gap-4 mb-6">
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
            <h2 class="text-3xl lg:text-5xl"><?php woocommerce_page_title(); ?></h2>
        <?php endif; ?>

        <?php
        do_action( 'woocommerce_archive_description' );
        do_action( 'woocommerce_before_shop_loop' );
        ?>
    </div>

    <div class="flex flex-col gap-6 md:flex-row">
        <div class="w-full md:w-3/12">
            <?php include(get_template_directory() . '/template-parts/filters.php'); ?>
        </div>

        <div class="w-full md:w-9/12">
            <?php
            if ( woocommerce_product_loop() ) {

                woocommerce_product_loop_start();

                if ( wc_get_loop_prop( 'total' ) ) {
                    echo '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">';
                    while ( have_posts() ) {
                        the_post();

                        /**
                         * Hook: woocommerce_shop_loop.
                         */
                        do_action( 'woocommerce_shop_loop' );

                        get_template_part( 'template-parts/content', 'product' );
                    }
                    echo '</div>';
                }

                woocommerce_product_loop_end();

                do_action( 'woocommerce_after_shop_loop' );

            } else {
                // No products found, display no-products message
                do_action( 'woocommerce_no_products_found' );
            }
            ?>
        </div>
    </div>
</div>

<?php

include(get_template_directory() . '/template-parts/global/footer.php');
?>
