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
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl">Our Journey</h2>
        <p class="leading-200 text-md">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia perferendis eos voluptatem dolorem natus non nisi commodi unde temporibus dicta inventore hic ea vitae beatae accusamus amet, impedit modi. Officiis?</p>
        <ul class="text-lg leading-7 ml-4">
          <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda sunt necessitatibus pariatur perferendis mollitia velit.</li>
          <li>Sunt repellat quaerat hic eum, provident dolore nesciunt dolorum ex! Itaque necessitatibus commodi sint quidem!</li>
          <li>Blanditiis odio fugiat natus, soluta nesciunt corrupti hic repudiandae? Voluptatem corporis assumenda obcaecati officia itaque.</li>
        </ul>
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
        <h2 class="mb-0 leading-120">Lorem ipsum dolor sit amet.</h2>
        <p class="text-wrap leading-200 text-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum earum non et, possimus accusantium autem fugit veritatis molestias modi, repellat ex ea tenetur, aperiam minus suscipit architecto libero distinctio sunt.</p>
        <ul class="text-lg leading-7 ml-4">
          <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, aut.</li>
          <li>Delectus similique provident quasi ratione ducimus recusandae aperiam illum sequi.</li>
          <li>Molestias error illum officia nobis doloribus vitae inventore illo quia.</li>
        </ul>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_html($image1); ?>" alt="lorem10" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  
  <!-- testimonial -->
  
  <p>to do testimonials global slider to insert here</p>

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
