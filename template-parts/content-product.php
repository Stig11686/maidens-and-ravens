<div class="group relative flex flex-col items-start self-stretch shadow-lg rounded-lg overflow-hidden pb-6">
<div class="image-frame-container">
    <div class="flex flex-col">
        <div>
            <img src="<?php echo wp_get_attachment_image_url() ?>" alt="<?php the_title(); ?>" class="content-image">
        </div>
        <div>
            <img src=<?php echo get_template_directory_uri(  ) . "/img/frame.png" ?> alt="Frame Image" class="frame-image" aria-hidden="true">
        </div>
    </div>
</div>
<div class="image-frame-content px-8">
    <h3 class="my-6 text-xl text-gray-900 font-semibold">
        <a href="<?php echo esc_url( $category_link ); ?>">
        <span class="absolute inset-0"></span>
        <?php the_title(); ?>
        </a>
    </h3>
    <p class="text-base text-md text-gray-900"><?php  ?></p>
    <a href="<?php ?>" class="btn bg-purple-900  text-sm font-semibold text-white ">View Collection</a>
</div>
</div>  
