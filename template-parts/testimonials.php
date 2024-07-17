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
        <div class="pt-8 sm:px-4">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="flex flex-col gap-8">
              <img class="h-28 w-28 rounded-full" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="testimonial image">
              <div class="text-white text-3xl"><?php the_content(); ?></div>
              <cite class="text-white font-bold"><?php echo get_the_title(); ?></cite>
            </div>
            <div class="flex flex-col p-8">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="h-full w-full object-cover rounded-lg" alt="testimonial image">
            </div>
          </div>
        </div>
            <?php endwhile; ?>
      
      </div>
    </div>
  </div>
</div>
<?php endif; ?>