<?php

$hero_image = get_theme_mod('hero_image');

?>

<header class="fixed inset-x-0 top-0 z-50 bg-black">
    <?php include(get_template_directory() . '/template-parts/nav.php');?>
</header>

<div class="relative">
  <div id="header" class="relative min-h-screen flex flex-col md:flex-row isolate overflow-hidden pt-14 rounded-b-[100px]">
    <div class="maidens relative flex-1 flex items-center justify-center bg-white" style="background-image: url('<?php get_template_directory(  ) . '/img/raven.svg';?>'); background-position: bottom; background-repeat: no-repeat; background-size: cover;">
      <span class="absolute right-0 text-3xl lg:text-9xl" style="-webkit-text-fill-color: transparent; -webkit-text-stroke: 1px #000; top: 25%;">Maidens</span>
    </div>
    <div class=""><span class="absolute text-3xl lg:text-9xl" style="-webkit-text-fill-color: transparent; -webkit-text-stroke: 1px #9e7e07; top: 50%; left: 50%; transform: translate(-50%, -25%);">&</span></div>
    <div class="ravens relative flex-1 flex items-center justify-center bg-black">
      <span class="absolute left-0 text-3xl lg:text-9xl" style="-webkit-text-fill-color: transparent; -webkit-text-stroke: 1px #fff; bottom: 25%;">Ravens</span>
    </div>
    <!-- <img src="<?php echo $hero_image; ?>" alt="" class="absolute inset-0 h-full w-full object-cover"> -->
    <!-- <div class="absolute inset-x-0 inset-y-0 overflow-hidden bg-overlay-color" aria-hidden="true">
    </div> -->
    <!-- <div class="mx-auto flex flex-col items-center justify-center gap-8 max-w-2xl py-32 sm:py-48 lg:py-40">
      <div class="text-center z-50">
        <!-- <h1 class="text-4xl lg:text-5xl font-bold tracking-tight text-white sm:text-6xl">Welcome to<br> Maidens and Ravens</h1> 
        <h1 class="m-0 text-4xl/normal lg:text-5xl/normal font-semibold text-gray-300">Discover the magic at Maidens & Ravens,
          a unique, sustainable and inclusive bridal boutique in the heart of York.</h1>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-purple-900 px-3.5 py-2.5 text-sm md:text-lg lg:text-xl font-semibold text-white shadow-sm hover:bg-purple-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-400">Book an Appointment</a>
          <a href="/products/all/" class="text-sm md:text-lg lg:text-xl font-semibold leading-6 text-white">View Our Dresses <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div> -->
  </div>
</div>
