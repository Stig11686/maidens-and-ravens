<?php

$hero_image = get_theme_mod('hero_image');

?>

<div>
  <header class="absolute inset-x-0 top-0 z-50">
    <?php include(get_template_directory() . '/template-parts/nav.php');?>
  </header>

  <div class="relative isolate overflow-hidden pt-14">
    <img src="<?php echo $hero_image; ?>" alt="" class="absolute inset-0 h-full w-full object-cover">
    <div class="absolute inset-x-0 inset-y-0 overflow-hidden blur-3xl bg-gray-900/75" aria-hidden="true">
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
          Announcing our next round of funding. <a href="#" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Data to enrich your online business</h1>
        <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Get started</a>
          <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
