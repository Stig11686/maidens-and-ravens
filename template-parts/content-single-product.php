<?php
    while ( have_posts() ) :
        the_post();
        global $product;
        ?>
        <div class="single-product-page flex flex-col md:flex-row gap-8">
            <div class="main-image w-full md:w-2/3">
                <?php
                // Main product image
                $main_image_id = $product->get_image_id();
                if ( $main_image_id ) {
                    echo wp_get_attachment_image( $main_image_id, 'large', false, array( 'class' => 'w-full h-auto' ) );
                }
                ?>
            </div>
            <div class="product-details w-full md:w-1/3">
                <h1 class="text-3xl font-bold"><?php the_title(); ?></h1>
                <div class="price text-xl text-gray-800 mt-4"><?php echo $product->get_price_html(); ?></div>
                <div class="description mt-6">
                    <?php the_content(); ?>
                </div>
                <?php woocommerce_template_single_add_to_cart(); ?>
            </div>
        </div>

        <div class="product-gallery mt-8">
            <?php
            // Product gallery images
            $attachment_ids = $product->get_gallery_image_ids();
            if ( $attachment_ids ) {
                echo '<div class="gallery grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">';
                foreach ( $attachment_ids as $attachment_id ) {
                    echo '<div class="gallery-item">';
                    echo wp_get_attachment_image( $attachment_id, 'thumbnail', false, array( 'class' => 'w-full h-auto' ) );
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>

    <?php endwhile; // End of the loop. ?>
</div>
