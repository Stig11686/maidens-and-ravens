<?php
/*
Template Name: Elizabeth's Story
*/
include(get_template_directory() . '/template-parts/global/header.php');
 ?>
  <!--Our Approach -->
  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl text-primary">Elizabeths Story</h2>
        <p class="text-2xl">Hello my Queens!</p>
        <p class="text-wrap text-lg">I am Elizabeth and I am the founder, owner and bridal mavern at Maidens and Ravens, here in the historic city of York. </p>
        <p class="text-wrap text-lg">Did you know that a mavern is someone who is experienced and knowledgeable? Seemed like a fitting name for me.</p>
        <p class="text-wrap text-lg">I started my journey into Bridalwear in 2019 but before that I always had a love for art, making things, sewing, knitting and vintage clothing. Growing up in Edinburgh, I enjoyed charity shop snooping and loved buying dresses from the 60s and 70s which I would get tailored to me. Like all of my friends, my prom dress was a 1980s bridesmaid dress - mint green with puff sleeves and lace! I wanted to look like Sarah from Labyrinth in the ballroom scene with David Bowie, complete with ribbons in my hair! I still love that look.</p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_url(get_theme_mod('elizabeth_image_1')); ?>" alt="lorem10" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <p class="text-wrap text-lg">Believe it or not I am a practising family lawyer and since 2003 I have been helping people with their divorces, financial arrangements and children matters. All very rewarding but over the years I missed a creative outlet.</p>
        <p class="text-wrap text-lg">Like many of you, I became an avid watcher of Don't tell the Bride (I loved when the groom had to choose the dress) and Say Yes to the Dress. I started imagining how wonderful it would be to own my own bridal boutique and help brides find their perfect dresses.</p>
        <p class="text-wrap text-lg">I opened my original Reloved boutique in 2019 and after winning the Best Bridal Boutique in Yorkshire in 2022, 2023 ... I became fully independent in 2024 choosing to better adapt my boutique to my brides.</p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_url(get_theme_mod('elizabeth_image_2')); ?>" alt="lorem10" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:order-2 lg:w-5/12">
        <p class="text-wrap text-lg">I have a real passion for helping all of my brides. I am a people person and am genuinely committed to helping you find a dress which makes you feel beautiful and meets your dreams! I firmly believe there is a dress for every bride (and a bride for every dress!). I love brides of every age, shape, size and colour. I pride myself in being fully inclusive and making your appointments as relaxed and enjoyable as possible.</p>
        <p class="text-wrap text-lg">I love quirky, interesting dresses - vintage inspired, colour and alternative styles especially dark and gothic. That said, I also adore classic looks, beautiful princess ballgowns and clean contemporary styles. I have a real eye for what suits you and will suggest different options to adapt a dress to work better for you. I will often pick out a wild card dress for you (sometimes it comes to me as soon as I meet you!) and many of my brides have actually found that it is the one.</p>
        <p class="text-wrap text-lg">Basically, whatever is your dream dress, I want to help you achieve it and if you have no idea, then that's absolutely fine too.  We will find it.</p>
        <?php include(get_template_directory(  ) . '/template-parts/global/book-appointment-btn.php'); ?>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_url(get_theme_mod('elizabeth_image_3')); ?>" alt="lorem10" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  
  <!-- testimonial -->
  
  <p>to do testimonials global slider to insert here</p>

  <!-- Getting Started -->
  <!-- <section class="lg:px-24 xl:px-48 px-6 py-20">
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
  </section> -->


  <!-- CTA Section -->
  <section class="bg-gradient-to-r from-red-1000 to-purple-1000 flex items-start self-stretch gap-4 px-6 lg:px-24 xl:px-48 py-8 lg:py-32">
    <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start flex-1 gap-10">
      <div class="w-full lg:w-5/12 flex flex-col items-start gap-10 lg:gap-14 text-white decorated-list white">
        <h2 class="mb-0 text-white text-5xl lg:text-6xl font-bold leading-112">Book Your Appointment</h2>
        <p class="text-white text-md leading-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consequatur et id iste quis temporibus soluta, ut doloremque corporis laudantium a culpa commodi assumenda eaque facilis. Esse, sed voluptatibus natus quaerat laudantium accusantium omnis repellendus praesentium, quibusdam iusto odio magni!</p>
        <ul class="flex flex-col items-start gap-2 text-md leading-lg xl:text-xl">
          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore autem quia totam cum iusto adipisci dolore veniam alias dolorem modi!</li>
          <li>Molestias numquam ab nam placeat magni explicabo voluptas facere, consequuntur, odit repudiandae facilis exercitationem nihil blanditiis odio similique, doloremque velit!</li>
          <li>Dolor ratione repellat tempore. Atque harum amet quos repudiandae placeat exercitationem consequuntur dicta alias quibusdam. Consectetur laboriosam voluptate rerum ex?</li>
        </ul>
      </div>
      <div class="w-full lg:w-6-12">
        <?php echo do_shortcode('[contact-form-7 id="080a418" title="Enquiry Form"]'); ?>
      </div>
    </div>
  </section>

<?php include(get_template_directory(  ) . '/template-parts/global/footer.php'); ?>
