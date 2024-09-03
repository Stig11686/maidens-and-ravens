<?php
/*
Template Name: The Boutique
*/

$image1 = get_theme_mod('boutique_image_1');
$image2 = get_theme_mod('boutique_image_2');
$image3 = get_theme_mod('boutique_image_3');
include(get_template_directory() . '/template-parts/global/header.php');
include(get_template_directory() . '/template-parts/global/internal-hero.php');

 ?>

<section class="flex pt-80 md:pt-48 px-6 xl:px-48 lg:px-24 mx-auto pb-8">
    <div class="flex flex-col lg:flex-row lg:justify-between  gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl">The Boutique</h2>
        <p class="leading-200 text-md">Our pretty little boutique is situated on historic Micklegate, through the bar walls, which is the traditional entrance to the city of York.</p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_html($image1) ?>" alt="Maidens and Ravens wedding dress boutique in York" class="w-full h-full object-cover">
      </div>
    </div>
  </section>
  

  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:order-2 lg:w-5/12">
        <h2 class="mb-0 text-3xl lg:text-5xl">Maidens and Ravens, Micklegate, York</h2>
        <p class="text-wrap text-md">The street is described as one of the most handsome in York and is home to beautiful book shops and lovely places to eat.  It has been used as a location for many period dramas due to the Georgian building and cobbles.</p>
        <p>Small but perfectly formed, we are definitely not your traditional grey and white bridal shop! Our vibe is colourful and pretty, a bit vintage, with a little darkness and lots of curious details. We do not do minimalist style here! </p>
        <p>When you book in with us you will have this beautiful space completely to yourself and our aim is to give you an experience to remember.
        Like our dresses, we love to be unique, and this is definitely reflected in our choice of everything from our wallpaper to our lighting.
        Look out for the ravens...</p>

      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_html($image2) ?>" alt="lorem10" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto"> 
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
          <h2 class="mb-0 text-3xl lg:text-5xl">Information and Accessibility</h2>
          <p class="text-wrap text-md">Our nearest carpark is Nunnery Lane, and we are about 5 minutes’ walk from the train station.
              If driving from out of York, the park and ride is advisable.
          </p>
          <h3 class="mb-0 text-2xl lg:text-3xl">Accessibility</h2>

          <p>As with much of York, our building is old, and the entrance to the shop is a little narrow. There is one very low step to get inside which is still accessible by wheelchair and with a buggy. We are situated on Micklegate which does have some limited paid parking outside for up to 2 hours on a first come first served basis. We will always do whatever we can to help so please feel free to ask if you need any specific assistance.
          </p>
          <p>When you book in with us you will have this beautiful space completely to yourself and our aim is to give you an experience to remember.
          Like our dresses, we love to be unique, and this is definitely reflected in our choice of everything from our wallpaper to our lighting.
          Look out for the ravens...</p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_html($image3) ?>" alt="lorem10" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

<!-- Faqs -->
<?php include(get_template_directory(  ) . '/template-parts/faqs.php');
      include(get_template_directory(  ) . '/template-parts/global/footer.php'); 
?>
