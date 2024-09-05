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
            <div class="w-full md:w-1/2 flex flex-col gap-8 p-6 text-center">
                <h2 class="text-4xl lg:text-5xl"><?php the_title(); ?></h2>
                <p class="text-5xl lg:text-6xl font-bold"><?php echo $product->get_price_html(); ?></p>
                <?php
                if($fields):
                ?>
                
                <div id="custom-product-info" class="">
                    <dl class="mt-10 space-y-6 divide-y divide-gray-900/10 product-details-section">
                        <div class="cursor-pointer flex flex-col items-center max-w-7xl mx-auto faq">
                        <?php
                            foreach ($fields as $field_name => $value) :
                                if($value):
                        ?>
                            <div class="py-4 shadow-lg px-6 w-full bg-neutral">
                                <div class="flex justify-between items-center self-stretch faq-btn">
                                    <div class="flex items-center gap-2">
                                        <div class="flex flex-col justify-center text-xl font-bold capitalize"><?php echo ucwords(str_replace('_', ' ', $field_name)); ?></div>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_85_3056)">
                                            <mask id="mask0_85_3056" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                                                <path d="M10.5714 10.5714V2H13.4286V10.5714H22V13.4286H13.4286V22H10.5714V13.4286H2V10.5714H10.5714Z" fill="black"/>
                                            </mask>
                                            <g mask="url(#mask0_85_3056)">
                                                <rect width="24" height="24" fill="#F9D6F7"/>
                                            </g>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_85_3056">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex flex-col items-start self-stretch gap-8 faq-content box-content capitalize text-lg">
                                    <?php echo $value; ?>
                                </div>
                            </div>
                        <?php
                        endif;
                        endforeach;
                        endif;
                        ?>
                        </div>
                    </dl>
                </div>
                
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