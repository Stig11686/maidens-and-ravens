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
<?php include(get_template_directory(  ) . '/template-parts/faqs.php'); ?>

  <!-- Getting Started -->
  <section class="lg:px-24 xl:px-48 px-6 py-20">
    <div class="max-w-screen-xl mx-auto flex flex-col relative gap-8">
      <div class="flex flex-col items-center gap-8">
        <h2 class="mb-0 leading-112">Lorem, ipsum.</h2>
        <p class="text-lg leading-7 text-center text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit.:</p>
      </div>
      <div class="flex flex-col gap-y-12 md:flex-row items-start justify-between">
        <div class="flex flex-col flex-0 items-center items-start gap-4 w-full md:w-6/12 lg:w-2/12">
          <img class="h-12 w-12" src="../images/icons/Conversation.svg" alt="get in touch">
          <div class="flex flex-col text-center gap-4">
            <h3 class="text-md leading-lg mb-0">1. Get in Touch</h3>
            <p class="text-sm leading-5">Use our chat feature or fill out the contact form.</p>
          </div>
        </div>
        <div class="flex flex-col flex-0 items-center items-start gap-4 w-full md:w-6/12 lg:w-2/12">
          <img class="h-12 w-12" src="../images/icons/session_icon.svg" alt="schedule a consultation (BELOW)">
          <div class="flex flex-col text-center gap-4">
            <h3 class="text-md leading-lg mb-0">2. Schedule a Consulatation</h3>
            <p class="text-sm leading-5">Book your free consultancy session</p>
          </div>
        </div>
        <div class="flex flex-col flex-0 items-center items-start gap-4 w-full md:w-6/12 lg:w-2/12">
          <img class="h-12 w-12" src="../images/icons/plan.svg" alt="Receive Your Training Plan">
          <div class="flex flex-col text-center gap-4">
            <h3 class="text-md leading-lg mb-0">3. Receive Your Training Plan</h3>
            <p class="text-sm leading-5 mb-0">We'll handle the paperwork and setup.</p>
          </div>
        </div>
        <div class="flex flex-col flex-0 items-center items-start gap-4 w-full md:w-6/12 lg:w-2/12">
          <img class="h-12 w-12" src="../images/icons/part_time_icon.svg" alt="Start training with The Coders Guild">
          <div class="flex flex-col text-center gap-4">
            <h3 class="text-md leading-lg mb-0">4. Start Training</h3>
            <p class="text-sm leading-5">Begin your tailored training program and watch your business grow.</p>
          </div>
        </div>
      </div>

    </div>
  </section>



<?php include(get_template_directory(  ) . '/template-parts/global/footer.php'); ?>
