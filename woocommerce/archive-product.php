
<div class="bg-gray-100">
<?php
    $args = array(
        'taxonomy'   => 'product_cat',
        'orderby'    => 'name',
        'order'      => 'ASC',
        'hide_empty' => true, // Only show categories with products
    );
    
    $product_categories = get_terms($args);

    include(get_template_directory(  ) . '/template-parts/global/header.php');
    include(get_template_directory(  ) . '/template-parts/nav.php');
?>

    <div class="flex flex-col items-start gap-4 max-w-2xl lg:ml-11 px-4 py-24">
        <h1 class="mb-0 text-3xl md:text-4xl lg:text-5xl text-black font-bold">Get Inspired</h1>
        <p class="text-xl lg:text-2xl font-bold">Decide whether you are a maiden or a raven! Browse your dream dresses, and get in touch to see them in person!</p>
    </div>

    <!-- to do  - filters? -->

    <div class="flex flex-col md:flex-row flex-wrap gap-4 max-w-7xl mx-auto">
        <?php
            if (!empty($product_categories)):
                foreach($product_categories as $category):
                    $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                    $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        ?>
        <div class="product-category-container lg:w-1/4 flex flex-col items-start">
            <div class="product-category-image bg-white">
                <img class="mix-blend-multiply" src="<?php echo $thumbnail_url; ?>" alt="<?php echo esc_html($category->name); ?>">
            </div>  
            <p><a href="<?php echo $category->link; ?>"><?php echo $category->name; ?></a></p>
            
        </div>

    <?php
        endforeach;
        endif;
    ?>
            

    </div>


<?php
    include(get_template_directory(  ) . '/template-parts/global/footer.php');
?>

</div>