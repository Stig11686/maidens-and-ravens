<?php
$hero_image_1 = get_theme_mod('hero_image_1');
$hero_image_2 = get_theme_mod('hero_image_2');
$arch_image = get_theme_mod('arch_image');
$box_image = get_theme_mod('box_image');
$tagline = get_bloginfo( 'description');
?>

<div class="bg-transparent">
  <!-- <header class="absolute inset-x-0 top-0 z-50 bg-neutral">
    <?php include(get_template_directory() . '/template-parts/nav.php');?>
  </header> -->
  <div id="homepage-hero" class="homepage-hero relative isolate h-screen bg-cover bg-fixed bg-no-repeat flex items-center justify-center">
    <div id="background-overlay"></div>
    <div class="w-full z-50">
      <div class="flex flex-col gap-2 md:flex-row md:items-center pt-8 lg:pt-0">
        <div class="mx-auto flex flex-col items-center gap-4 z-10 px-4">
          <div class="max-w-xl mx-auto flex flex-col items-start text-white text-center">
            <h1 id="tagline" class="mb-0 leading-snug max-w-2xl text-4xl font-bold tracking-tight sm:text-6xl xl:col-auto">Discover the Magic at Maidens and Ravens</h1>
            <p class="text-2xl leading-8">A unique, sustainable and inclusive bridal boutique in the heart of York</p>
            <div class="mt-10 w-full flex items-center justify-center gap-x-6 ctas">
                <a href="/shop" class="rounded-2xl bg-primary px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral">See our Dresses</a>
                <a href="/the-boutique" class="text-lg font-semibold leading-6 text-white">About our Boutique <span class="green-arrow"></span></a>
            </div>
          </div>
        </div>
        <div class="hidden lg:block lg:absolute left-7 bottom-[-7rem] rounded-t-full border-8 border-white h-[53%] w-[17%]">
          <img src="<?php echo esc_url($arch_image); ?>" alt="" class="object-cover h-full w-full rounded-t-full">
        </div>
        <div class="hidden lg:block lg:absolute rotate-12 right-20 bottom-[-4rem] border-2 border-l-8 border-white h-[33%] w-[17%]">
          <img src="<?php echo esc_url($box_image); ?>" alt="" class="object-cover h-full w-full">
        </div>
      </div>
    </div>
  </div>
</div>




