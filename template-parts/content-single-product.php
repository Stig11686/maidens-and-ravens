<?php
global $product;
$product_id = $product->get_id();
$fields = get_fields($product_id);
?>

<div class="max-w-7xl mx-auto py-16">
    <div class="px-6 flex flex-col gap-8">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/2">
            <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
            ?>
        </div>
    </div>
</div>
<div class="flex flex-col gap-16">

    <?php include(get_template_directory(  ) . '/woocommerce/template-parts/related-products.php'); ?>
    <div class="">
        <?php 
            include(get_template_directory(  ) . '/template-parts/testimonials.php');
            include(get_template_directory(  ) . '/template-parts/faqs.php');
        ?>
    </div>

</div>