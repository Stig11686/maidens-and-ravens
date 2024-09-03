<?php
    $faqs = new WP_Query(array(
        'post_type' => 'FAQs',
        'posts_per_page' => -1,
        'sort_order' => 'ASC',
    ));

if ($faqs->have_posts()) :
?>
<section id="faqs">
  <div class="py-24 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-3xl px-6 sm:py-16 lg:px-8">
      <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Frequently Asked Questions</h2>
        <dl class="mt-10 space-y-6 divide-y divide-gray-900/10 faqs-section">
          <div class="cursor-pointer flex flex-col items-center max-w-7xl mx-auto bg-white faq">
              <?php
              while ($faqs->have_posts()) : $faqs->the_post(); ?>
                  <div class="py-4 bg-primary shadow-lg border px-6 w-full">
                      <div class="flex justify-between items-center self-stretch faq-btn">
                          <div class="flex items-center gap-2">
                              <div class="flex flex-col justify-center text-sm font-bold text-white"><?php the_title(); ?></div>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <g clip-path="url(#clip0_85_3056)">
                                  <mask id="mask0_85_3056" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                                      <path d="M10.5714 10.5714V2H13.4286V10.5714H22V13.4286H13.4286V22H10.5714V13.4286H2V10.5714H10.5714Z" fill="black"/>
                                  </mask>
                                  <g mask="url(#mask0_85_3056)">
                                      <rect width="24" height="24" fill="rgb(42, 128, 85)"/>
                                  </g>
                                  </g>
                                  <defs>
                                  <clipPath id="clip0_85_3056">
                                      <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                  </defs>
                              </svg>
                          </div>
                      </div>
                      <div class="flex flex-col self-stretch gap-8 faq-content box-content bg-primary/10 text-white">
                          <?php the_content(); ?>
                      </div>
                  </div>
              <?php endwhile; ?>
          </div>
        </dl>
      </div>
    </div>
  </div>
</section>
<?php
    endif;
    wp_reset_postdata();
?>




