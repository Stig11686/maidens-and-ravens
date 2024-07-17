<?php

    $testimonials = new WP_Query(
        array(
            'post_type' => 'testimonials',
            'posts_per_page' => 5,
            'sort_order' => 'ASC',
        )
    );

?>
<?php if ($testimonials->have_posts()) : ?>
<div class="bg-purple-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
      <div class="flex flex-wrap -mt-8 sm:-mx-4 sm:text-[0] testimonial-slider">
        <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
        <div class="pt-8 sm:inline-block w-full md:w-6/12 sm:px-4" data-theme="emerald">
            <figure class="rounded-2xl bg-primary p-8 text-sm leading-6">
                <blockquote class="text-white">
                    <p><?php the_content(); ?></p>
                </blockquote>
                <figcaption class="mt-6 flex items-center gap-x-4">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => 'h-10 w-10 rounded-full bg-gray-50')); ?>

                </figcaption>
            </figure>
        </div>
            <?php endwhile; ?>
      
      </div>
    </div>
  </div>
</div>
<?php endif; ?>