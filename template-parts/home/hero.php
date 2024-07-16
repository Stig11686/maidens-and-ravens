<?php

$hero_image = get_theme_mod('hero_image');

?>

<div class="relative h-screen">
  <header class="absolute inset-x-0 top-0 z-50">
    <?php include(get_template_directory() . '/template-parts/nav.php');?>
  </header>

  <div id="header" class="relative isolate overflow-hidden pt-14">
    <img src="<?php echo $hero_image; ?>" alt="" class="absolute inset-0 h-full w-full object-cover">
    <div class="absolute inset-x-0 inset-y-0 overflow-hidden bg-slate-950/90" aria-hidden="true">
    </div>
    <div class="mx-auto flex flex-col items-center justify-center gap-8 max-w-2xl py-32 sm:py-48 lg:py-40">
      <div class="text-center z-50">
        <h1 class="text-4xl lg:text-5xl font-bold tracking-tight text-white sm:text-6xl">Welcome to<br> Maidens and Ravens</h1>
        <p class="mt-6 text-2xl font-semibold leading-8 text-gray-300">Discover the magic at Maidens & Ravens,
          a unique bridal boutique in the heart of York.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-purple-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-purple-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-400">Book an Appointment</a>
          <a href="/products/all/" class="text-sm font-semibold leading-6 text-white">View Our Dresses <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
