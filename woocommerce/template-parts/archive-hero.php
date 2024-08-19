<?php

if(is_shop()){
  $shop_id = wc_get_page_id('shop');
  $archive_image = get_field('shop_archive_image', $shop_id);
} else {
  $archive_image = get_the_archive_thumbnail();
}



?>


<div class="relative">
    <?php include(get_template_directory() . '/template-parts/nav.php');?>
  <div id="header" class="relative isolate overflow-hidden pt-14 rounded-b-[100px]">
    <img src="<?php echo $archive_image; ?>" alt="" class="absolute inset-0 h-full w-full object-cover">
    <div class="absolute inset-x-0 inset-y-0 overflow-hidden bg-overlay-color" aria-hidden="true">
    </div>
    <div class="mx-auto flex flex-col items-center justify-center gap-4 max-w-2xl py-32 sm:py-48 lg:py-40 px-6">
      <div class="text-center z-50">
        <h1 class="mt-6 text-4xl/normal lg:text-5xl/normal font-semibold text-white"><?php woocommerce_page_title(); ?></h1>
        <div class="text-white"> <?php
            do_action( 'woocommerce_archive_description' );
            ?>
        </div>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-primary px-3.5 py-2.5 text-sm md:text-lg lg:text-xl font-semibold text-white shadow-sm hover:bg-purple-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-400">Book an Appointment</a>
        </div>
      </div>
    </div>
  </div>
</div>
