<figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
    <blockquote class="text-gray-900">
        <p><?php the_content(); ?></p>
    </blockquote>
    <figcaption class="mt-6 flex items-center gap-x-4">
        <img class="h-10 w-10 rounded-full bg-gray-50" src="<?php get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title() . ' testimonial of Maidens and Ravens bridal boutique in York'; ?>">
        <div>
        <div class="font-semibold text-gray-900"><?php the_title(); ?></div>
        </div>
</figcaption>