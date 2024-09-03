<div class="md:w-1/2 lg:w-1/3 md:px-3 w-full mb-8 sm:mb-10 md:mb-10" aria-hidden="true" data-post>
    <div class="flex flex-col rounded-lg shadow-grey overflow-hidden md:h-full">
      
        <div class="flex-shrink-0">
          <img class="h-56 w-full object-cover" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>" />
        </div>

        <div class="flex-1 bg-white px-4 md:px-6 py-6 flex flex-col justify-between items-start relative">
          <div class="flex-1 mt-2">
            <a href="<?php the_permalink( ); ?>" class="block">
              <a href="<?php the_permalink(); ?>" class="block"><h3 class="text-primary font-bold mb-4"><?php the_title(); ?></h3></a>
              <p class="mb-6 sm:mb-4 text-sm leading-md"><?php the_excerpt(  ); ?></p>
            </a>
          </div>
          <a href="<?php the_permalink(); ?>" class="px-4 py-2 text-white bg-primary rounded">Read More</a>
        </div>
    </div>
</div>