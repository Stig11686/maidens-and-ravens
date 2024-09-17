<?php
global $product;
$product_id = $product->get_id();
$fields = get_fields($product_id);
?>

<div class="max-w-7xl mx-auto py-16">
    <div class="px-6 flex flex-col gap-8">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/2">
                <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ? wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) : 'https://images.unsplash.com/photo-1622277430358-f4d134452e2e?q=80&w=2147&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
            </div>
            <div class="w-full md:w-1/2 flex flex-col gap-8 p-6">
                <h2 class="text-4xl lg:text-5xl text-center"><?php the_title(); ?></h2>
                <p class="text-5xl lg:text-6xl font-bold text-center"><?php echo $product->get_price_html(); ?></p>
                <?php
                if($fields):
                ?>
                
                    <ul>
                        <?php
                            foreach ($fields as $field_name => $value) :
                                if($value):
                        ?>
                                <li class=""><span class="font-bold"><?php echo ucwords(str_replace('_', ' ', $field_name)); ?> :</span> <?php echo $value; ?></li>
                                    
                                    
                        <?php
                        endif;
                        endforeach;
                        endif;
                        ?>
                
                    <a href="#contact" class="relative button button--wayra border border-1 rounded border-primary px-4 py-5 outline outline-1 -outline-offset-2 outline-primary uppercase m-0" data-text="Click to Book an Appointment">Click to Book an Appointment</a>
            </div>
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