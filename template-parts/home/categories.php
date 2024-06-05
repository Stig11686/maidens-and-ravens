<?php
$categories = get_terms( 'product_cat', array(
    'hide_empty' => false,
) );

if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
    echo '<div class="flex flex-wrap -mx-2">';
    foreach ( $categories as $category ) {
        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        $category_link = get_term_link( $category );
        ?>
        <div class="w-full md:w-1/2 lg:w-1/4 px-2 mb-4">
            <div class="bg-white p-4 rounded shadow">
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $category->name ); ?>" class="w-full h-48 object-cover mb-4">
                <?php endif; ?>
                <h2 class="text-xl font-bold mb-2"><a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $category->name ); ?></a></h2>
                <p><?php echo esc_html( $category->description ); ?></p>
            </div>
        </div>
        <?php
    }
    echo '</div>';
}
?>
