<?php
global $product;
?>

<div class="px-6 flex flex-col gap-8">
    <div class="flex flex-col md:flex-row gap-8">
        <div class="w-full md:w-1/2">
            <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
        </div>
        <div class="w-full md:w-1/2 flex flex-col gap-8 p-12">
            <h2 class="text-4xl lg:text-5xl text-primary"><?php the_title(); ?></h2>
            <p class="text-5xl lg:text-6xl font-bold"><?php echo $product->get_price_html(); ?></p>
        </div>
    </div>
    <div class="w-full flex">
        you might also like
    </div>
    <div class="w-full flex">
        Testimonials
    </div>
</div>