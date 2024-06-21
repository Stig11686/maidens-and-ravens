<?php

$testimonials = new WP_Query([
    'post_type' => 'testimonials',
    'posts_per_page' => 5,
    'orderby' => 'rand',
]);

?>

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-xl text-center">
      <h2 class="text-lg font-semibold leading-8 tracking-tight">Testimonials</h2>
      <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We have worked with thousands of amazing people</p>
    </div>
    <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
      <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3 flex flex-col sm:flex-row">
        <?php while($testimonials->have_posts() ) : $testimonials->the_post(); ?>
          <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
            <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
              <blockquote class="text-gray-900">
                <p class="text-lg"><?php the_content(); ?></p>
              </blockquote>
              <figcaption class="mt-6 flex items-center gap-x-4">
                <div>
                  <div class="font-semibold text-gray-900 text-lg"><?php the_title();?></div>
                </div>
              </figcaption>
            </figure>
          </div>
        <?php
          endwhile;
        ?>

        <!-- More testimonials... -->
      </div>
    </div>
  </div>
</div>
