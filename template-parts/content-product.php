<div class="group relative flex flex-col items-start self-stretch shadow-lg rounded-lg overflow-hidden pb-6 bg-card-bg">
    <div class="image-frame-container">
        <div class="flex flex-col">
            <div>
                <img src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ? wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) : 'https://images.unsplash.com/photo-1622277430358-f4d134452e2e?q=80&w=2147&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; ?>" alt="<?php the_title(); ?>" class="content-image object-cover aspect-square" loading="lazy">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . '/img/frame.png'; ?>" alt="Frame Image" class="frame-image" aria-hidden="true">
            </div>
        </div>
    </div>
    <div class="image-frame-content px-8 flex flex-col items-start justify-between gap-4">
        <h3 class="text-xl font-semibold">
            <a href="<?php the_permalink(); ?>">
                <span class="absolute inset-0"></span>
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="text-base text-md leading-normal"><?php echo get_the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="rounded-md bg-primary px-3.5 py-2.5 text-sm md:text-lg lg:text-xl font-semibold text-white shadow-sm hover:bg-purple-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-400">View Dress</a>
    </div>
</div>
