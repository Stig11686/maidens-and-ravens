<?php
global $post, $product;
$categories = get_terms( 'product_cat', array(
    'hide_empty' => false,
) );

if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) : 
?>
    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <h2 class="text-2xl font-bold text-gray-900">View our Dresses</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 gap-8 lg:space-y-0">
                    <?php
                        foreach ( $categories as $category ) :
                            $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            $category_link = get_term_link( $category );
                    ?>
                    <div class="group relative flex flex-col items-start self-stretch shadow-lg rounded-lg overflow-hidden pb-6">
                        <div class="image-frame-container">
                            <div class="flex flex-col">
                                <div>
                                    <img src="<?php echo $image; ?>" alt="<?php echo esc_html( $category->name ); ?>" class="content-image">
                                </div>
                                <div>
                                    <img src=<?php echo get_template_directory_uri(  ) . "/img/frame.png" ?> alt="Frame Image" class="frame-image" aria-hidden="true">
                                </div>
                            </div>
                        </div>
                        <div class="image-frame-content px-8">
                            <h3 class="my-6 text-xl text-gray-900 font-semibold">
                                <a href="<?php echo esc_url( $category_link ); ?>">
                                <span class="absolute inset-0"></span>
                                <?php echo esc_html( $category->name ); ?>
                                </a>
                            </h3>
                            <p class="text-base text-md text-gray-900"><?php echo esc_html( $category->description ); ?></p>
                            <a href="<?php echo esc_url( $category_link ); ?>" class="btn bg-purple-900  text-sm font-semibold text-white ">View Collection</a>
                        </div>
                    </div>  
                        

                        <?php
                        endforeach;
                        ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    endif;
?>
