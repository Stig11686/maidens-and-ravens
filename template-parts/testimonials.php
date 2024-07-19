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
  <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
    <div class="mx-auto mt-16 sm:mt-20 lg:mx-0 w-full">
      <div class="flex flex-col gap-8">
        <div class="testimonial-slider">
          <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
          <div class="pt-8 sm:px-4">
              <div class="flex flex-col gap-8">
                <div class="text-white text-2xl lg:text-3xl leading-normal lg:leading-loose"><?php the_content(); ?></div>
              </div>
          </div>
          <?php endwhile; ?>
        </div>
        <div class="slider-arrows text-white flex items-start justify-start gap-4">
            <div class="prev h-8 w-8 text-white cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M16.62 2.99a1.25 1.25 0 0 0-1.77 0L6.54 11.3a.996.996 0 0 0 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z"></path>
                </svg>
            </div>
            <div class="next h-8 w-8 text-white cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M7.38 21.01c.49.49 1.28.49 1.77 0l8.31-8.31a.996.996 0 0 0 0-1.41L9.15 2.98c-.49-.49-1.28-.49-1.77 0s-.49 1.28 0 1.77L14.62 12l-7.25 7.25c-.48.48-.48 1.28.01 1.76z"></path>
                </svg>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>