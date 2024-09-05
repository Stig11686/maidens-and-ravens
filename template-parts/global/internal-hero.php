<?php

$title = is_archive() ? get_the_archive_title() : the_title();
?>

<div class="bg-transparent">
  <div class="homepage-hero relative isolate h-[70vh] bg-cover bg-fixed bg-no-repeat flex items-center justify-center" style="background-image: url('<?php echo wp_get_attachment_url( 242 ); ?>');">
    <div id="background-overlay"></div> 
    <div class="w-full z-50">
      <div class="flex flex-col gap-2 md:flex-row md:items-center pt-8 lg:pt-0">
        <div class="mx-auto flex flex-col items-center gap-4 z-10 px-4">
          <div class="max-w-xl mx-auto flex flex-col items-start text-white text-center">
            <h1 id="tagline" class="mb-0 leading-snug max-w-2xl text-4xl font-bold tracking-tight sm:text-6xl xl:col-auto"><?php echo $title; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




