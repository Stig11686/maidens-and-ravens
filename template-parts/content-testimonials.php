<div class="pt-8 sm:inline-block sm:w-full sm:px-4">
    <figure class="rounded-2xl bg-gray-50/4 p-8 text-sm/6">
        <blockquote class="text-gray-900 text-sm/6">
            <?php the_content(); ?>
        </blockquote>
        <figcaption class="mt-6 flex items-center gap-x-4">
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail', [
                        'class' => 'h-10 w-10 rounded-full bg-gray-50',
                        'alt' => get_the_title() . ' testimonial of Maidens and Ravens bridal boutique in York'
                    ]); 
                }
            ?>
            <div>
                <div class="font-semibold text-gray-900"><?php the_title(); ?></div>
            </div>
        </figcaption>
    </figure>
</div>
