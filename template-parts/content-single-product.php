<?php
global $product;
?>

<div class="max-w-7xl mx-auto py-16">
    <div class="px-6 flex flex-col gap-8">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/2">
                <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
            </div>
            <div class="w-full md:w-1/2 flex flex-col gap-8 p-12 text-center">
                <h2 class="text-4xl lg:text-5xl text-purple-900"><?php the_title(); ?></h2>
                <p class="text-5xl lg:text-6xl font-bold"><?php echo $product->get_price_html(); ?></p>
                <a href="#" class="relative button button--wayra border border-1 rounded border-purple-900 px-4 py-5 outline outline-1 -outline-offset-2 outline-purple-900 uppercase" data-text="Click to Book an Appointment">Click to Book an Appointment</a>
            </div>
        </div>
    </div>
</div>
<div class="flex flex-col gap-16 bg-purple-900">

    <div class="w-full flex">
        you might also like
    </div>
    <div class="w-full flex">
        Testimonials
    </div>
    <div class="w-full flex flex-col items-center">
        <?php 
            include(get_template_directory(  ) . '/template-parts/testimonials.php');
            include(get_template_directory(  ) . '/template-parts/faqs.php');
        ?>
    </div>

</div>