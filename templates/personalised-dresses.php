<?php
/*
Template Name: Personalised Dresses
*/

$image1 = get_theme_mod('personalised_dress_1');
$image2 = get_theme_mod('personalised_dress_2');
$image3 = get_theme_mod('personalised_dress_3');
include(get_template_directory() . '/template-parts/global/header.php');
include(get_template_directory() . '/template-parts/global/internal-hero.php');

 ?>

<section class="flex pt-80 md:pt-48 px-6 xl:px-48 lg:px-24 mx-auto pb-8">
    <div class="flex flex-col lg:flex-row lg:justify-between  gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl text-primary">Create your Dream Dress with Us</h2>
        <p class="text-md">Looking for something you just cannot find? Then let us help you create your dream dress! Whatever you want, we want to help you achieve it!</p>
        <p class="text-md">You may like to purchase a base dress from our Treasure Trove and together we can explore ways in which it could be adapted into your perfect dress.  Using my years of bridal expertise and creative imagination, I can show you how sleeves can be added or removed, necklines changed, and details altered or added to adapt your chosen dress into the look you have envisioned.  This is a cost-effective way of creating a completely unique dress without the nasty price tag!<p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_html($image1); ?>" alt="Maidens and Ravens wedding dress boutique in York" class="w-full h-full object-cover">
      </div>
    </div>
  </section>
  
  <!--Our Approach -->
  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:order-2 lg:w-5/12">
        <h2 class="mb-0 text-primary text-3xl lg:text-5xl ">Alternatively...</h2>
        <p class="text-wrap leading-200 text-md">Alternatively, many of our Commissioned for You dresses by Louisa Jackson can be made in different colours and with changes to sleeves, skirt type, trains or little details to create a dress that is as unique and individual as you would like and unlike a completely bespoke dress, these new to order dresses still sit comfortably below £2,000.</p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_html($image2); ?>" alt="lorem10" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  
  <?php
  include(get_template_directory() . '/template-parts/testimonials.php');
  include(get_template_directory(  ) . '/template-parts/global/footer.php'); 
  ?>
