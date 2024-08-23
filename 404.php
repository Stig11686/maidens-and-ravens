<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package maidens_and_ravens
 */
	include (get_template_directory(  ) . '/template-parts/global/header.php');
?>

<div class="bg-white">
  <main class="mx-auto w-full max-w-7xl px-6 pb-16 pt-24 sm:pb-24 lg:px-8">
    <div class="mx-auto mt-20 max-w-2xl text-center sm:mt-24">
      <p class="text-base font-semibold leading-8 text-primary">404</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">This page <span class="text-primary custom-underline">does not</span> exist</h1>
      <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-6 sm:text-lg sm:leading-8">Sorry, we couldn’t find the page you’re looking for.</p>
    </div>
    <div class="mx-auto mt-16 flow-root max-w-lg sm:mt-20">
      <h2 class="sr-only">Popular pages</h2>
      <ul role="list" class="-mt-6 divide-y divide-gray-900/5 border-b border-gray-900/5">
        <li class="relative flex flex-col items-start gap-x-6 py-6">
          <div class="flex-auto">
            <h3 class="text-sm font-semibold leading-6 text-gray-900">
              <a href="/activities">
                <span class="absolute inset-0" aria-hidden="true"></span>
                View our Activities
              </a>
            </h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">Would you like to join us on our outings? Take a look at what we do weekly and monthly</p>
          </div>
          <div class="mt-10 flex justify-center">
            <a href="/activities" class="text-sm font-semibold leading-6 text-primary">
                View our activities
                <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </li>
        <li class="relative flex flex-col items-start gap-x-6 py-6">
          <div class="flex-auto">
            <h3 class="text-sm font-semibold leading-6 text-gray-900">
              <a href="/volunteer">
              <span class="absolute inset-0" aria-hidden="true"></span>
                Volunteer with us
              </a>
            </h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">If you would like to give back to your community, take a look here at where you could help us!</p>
          </div>
          <div class="mt-10 flex justify-center">
            <a href="/volunteer" class="text-sm font-semibold leading-6 text-primary">
                View volunteer opportunities
                <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </li>
        <li class="relative flex flex-col items-start gap-x-6 py-6">
          <div class="flex-auto">
            <h3 class="text-sm font-semibold leading-6 text-gray-900">
              <a href="/contact">
                <span class="absolute inset-0" aria-hidden="true"></span>
                Contact
              </a>
            </h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">Wanted to get in touch? Here's the page for that!</p>
          </div>
          <div class="mt-10 flex justify-center">
            <a href="/volunteer" class="text-sm font-semibold leading-6 text-primary">
                Contact us
                <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </li>
        <li class="relative flex flex-col items-start gap-x-6 py-6">
          <div class="flex-auto">
            <h3 class="text-sm font-semibold leading-6 text-gray-900">
              <a href="/news">
                <span class="absolute inset-0" aria-hidden="true"></span>
                News
              </a>
            </h3>
            <p class="mt-2 text-sm leading-6 text-gray-600">Read our latest news and articles.</p>
          </div>
          <div class="mt-10 flex justify-center">
            <a href="/news" class="text-sm font-semibold leading-6 text-primary">
                View our latest news
                <span aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </li>
      </ul>
      <div class="mt-10 flex justify-center">
        <a href="/" class="text-sm font-semibold leading-6 text-primary">
          <span aria-hidden="true">&larr;</span>
          Back to home
        </a>
      </div>
    </div>
  </main>
</div>


<?php
include(get_template_directory(  ) . '/template-parts/global/footer.php');
