<div class="px-6 flex flex-col gap-8">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2">
            <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover">
        </div>
        <div class="w-full md:w-1/2">product details go here</div>
    </div>
    <div class="w-full flex">
        you might also like
    </div>
    <div class="w-full flex">
        Testimonials
    </div>
</div>