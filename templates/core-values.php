<?php
/*
Template Name: core values
*/
include(get_template_directory() . '/template-parts/global/header.php');
include(get_template_directory() . '/template-parts/global/internal-hero.php');

 ?>

  <section class="flex pt-12 lg:pt-36 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl text-primary">Caring for the Planet</h2>
        <h3 class="text-xl lg:text-2xl font-bold">Wedding dresses that won’t cost the earth.</h3>
        <p class="text-wrap text-lg">I am passionate in doing what I can to offer brides a truly sustainable choice. My treasure trove dresses are brand new, sample dresses that are already in existence and deserve the opportunity of being worn! They are my most eco-friendly option and are the most budget friendly too. By choosing one of these dresses, you are able to purchase a dress off the peg with no environmental impact at all.</p>
        <p class="text-wrap text-lg">My commissioned for you collection is exactly that. I understand that sample dresses are not everyone’s cup of tea, and that some of you may prefer to purchase a new dress for many different reasons. I therefore made a conscious decision to only stock two designers that hold similar values to myself. Both aim to be as sustainable as possible and they do not mass produce but simply make dresses to order to a bride’s requirements. They enable Maidens & Ravens to be fully inclusive by being available to order in any size and with custom features.</p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_url(get_theme_mod('core_values_image_1')); ?>" alt="picture of a sustainable, affordable wedding dress" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_url(get_theme_mod('core_values_elizabeth_image_2')); ?>" alt="picture of a wedding dress that makes the wearer feel fabulous!" class="w-full h-full object-cover">
      </div>
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl text-primary">Affordable Dresses that make you feel like a Queen!</h2>
        <h3 class="text-xl lg:text-2xl font-bold">Affordable dresses that don’t compromise on style or quality!</h3>
        <p class="text-wrap text-lg">Getting married can be a very expensive affair and costs can quickly mount! I wanted to focus my collection on dresses that didn’t compromise on style or quality but also didn’t break the bank! I cater to budgets starting from £200 to £2000 max, helping everyone to feel like a queen on their wedding day! </p>
        <p class="text-wrap text-lg">I love quirky, interesting dresses - vintage inspired, colour and alternative styles especially dark and gothic. That said, I also adore classic looks, beautiful princess ballgowns and clean contemporary styles. I have a real eye for what suits you and will suggest different options to adapt a dress to work better for you. </p>
      </div>
    </div>
  </section>

  <section class="py-32">
    <?php
    include(get_template_directory(  ) . '/template-parts/global/values-banner.php');

    ?>
  </section>

  <section class="flex pt-4 pb-16 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl text-primary">Creating your Dream Dress - Whatever your Style</h2>
        <h3 class="text-xl lg:text-2xl font-bold">Bespoke designed dresses at affordable prices. </h3>
        <p class="text-wrap text-lg">The commissioned for you collection is exactly that. I have deliberately selected designers who are as sustainable as possible. They do not mass produce and only make dresses, by hand, to order. These designers enable me to offer customisable dresses and to be fully inclusive by being available to order in every size without restrictions.  </p>
      </div>
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_url(get_theme_mod('core_values_image_3')); ?>" alt="picture of a wedding dress that been created and customised" class="w-full h-full object-cover">
      </div>
    </div>
  </section>

  <section class="flex pt-4 pb-8 px-6 xl:px-48 lg:px-24 mx-auto ">
    <div class="flex flex-col lg:flex-row lg:justify-between  items-start gap-10 max-w-7xl mx-auto">
      <div class="bg-grey-2000 h-full w-full lg:w-6/12">
        <img src="<?php echo esc_url(get_theme_mod('core_values_image_4')); ?>" alt="a picture of a bride enjoying their time at maidens and ravens" class="w-full h-full object-cover">
      </div>
      <div class="flex flex-col items-start gap-8 decorated-list lg:w-5/12">
        <h2 class="mb-0 leading-120 text-3xl lg:text-5xl text-primary">A Welcoming, Personal Experience You'll Never Forget</h2>
        <h3 class="text-xl lg:text-2xl font-bold">Everyone is welcome at Maidens and Ravens</h3>
        <p class="text-wrap text-lg">I have a real passion for helping all of my brides. I am a people person and am genuinely committed to helping you find a dress which makes you feel beautiful and meets your dreams! I firmly believe there is a dress for every bride (and a bride for every dress!). I love brides of every age, shape, size and colour. I pride myself in being fully inclusive and making your appointments as relaxed and enjoyable as possible.</p>
      </div>
    </div>
  </section>
  

<?php 
  
  include(get_template_directory() . '/template-parts/testimonials.php');
  include(get_template_directory(  ) . '/template-parts/global/footer.php'); 
?>
