<?php

    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');

?>

<footer class="bg-slate-950/90 relative" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
    <div class="xl:grid xl:grid-cols-2 xl:gap-8">
      <div class="space-y-8">
        <img class="object-cover max-h-28" src="<?php echo $logo_url; ?>" alt="maidens and ravens logo" /></a>
        <div class="flex space-x-6">
            <a href="https://www.facebook.com" target="_blank"><img class="h-8 w-8 object-cover text-white" src="<?php echo get_template_directory_uri();?>/img/socials/facebook.svg" alt="Visit the Maidens and Ravens Facebook page" /></a>    
            <a href="https://www.instagram.com" target="_blank"><img class="h-8 w-8 object-cover text-white" src="<?php echo get_template_directory_uri();?>/img/socials/instagram.svg" alt="Visit the Maidens and Ravens Instagram page" /></a>
        </div>
      </div>
      <div class="mt-16 grid grid-cols-1 gap-8 xl:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-white">About Us</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="/about" class="text-sm leading-6 text-gray-300 hover:text-white">About</a>
              </li>
              <li>
                <a href="/blog" class="text-sm leading-6 text-gray-300 hover:text-white">Blog</a>
              </li>
              <li>
                <a href="/shop" class="text-sm leading-6 text-gray-300 hover:text-white">Dresses</a>
              </li>
              <li>
                <a href="/testimonials" class="text-sm leading-6 text-gray-300 hover:text-white">Testimonials</a>
              </li>
              <li>
                <a href="/contact" class="text-sm leading-6 text-gray-300 hover:text-white">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="mt-10 md:mt-0">
            <h3 class="text-sm font-semibold leading-6 text-white">Legal</h3>
            <ul role="list" class="mt-6 space-y-4">
              <li>
                <a href="/terms-conditions/" class="text-sm leading-6 text-gray-300 hover:text-white">Terms and Conditoins</a>
              </li>
              <li>
                <a href="/privacy-policy/" class="text-sm leading-6 text-gray-300 hover:text-white">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="mt-10 md:mt-0">
            <h3 class="text-sm font-semibold leading-6 text-white">About Us</h3>
            <ul role="list" class="mt-6 space-y-2">
              <li>
                <p class="text-sm leading-6 text-gray-300 hover:text-white">Address Here</a>
              </li>
              <li>
                <p class="text-sm leading-6 text-gray-300 hover:text-white">Phone Number Here</P>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24">
      <p class="text-xs leading-5 text-gray-400">&copy; <span id="currentYear"></span> Maidens & Ravens. All rights reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer(  ); ?>
</body>
</html>
