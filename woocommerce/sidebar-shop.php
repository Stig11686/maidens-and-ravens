<?php
if ( is_active_sidebar( 'woocommerce-sidebar' ) ) {
    dynamic_sidebar( 'woocommerce-sidebar' );
} else {
    echo do_shortcode('[tf_product_filter id="filters"]');
}
?>