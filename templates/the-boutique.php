<?php
/*
Template Name: The Experience
*/
get_header(); ?>

<section class="bg-white text-black p-8">
    <div class="container mx-auto max-w-screen-lg">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-crimson mb-6">The Experience</h1>
            <p class="text-lg leading-relaxed mb-6">Your bridal appointment is a time to dream, to explore, and to find the dress that embodies your love story...</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-semibold text-crimson mb-4">What to Expect</h2>
                <p class="mb-6">At Maidens and Ravens, we believe every bride deserves a personalized and unforgettable experience. From the moment you book your appointment, we’re here to guide you through every step...</p>
                <p class="mb-6">On the day of your appointment, you’ll have our boutique all to yourself for two hours. You’ll be free to explore our exclusive collections, try on your favorite dresses, and receive expert advice from Elizabeth and her team...</p>
                <p class="mb-6">We understand how important this day is to you, and we’re here to make it as special and stress-free as possible. You can take photos, bring loved ones, and share in the joy of finding your dream dress...</p>
            </div>
            <div class="space-y-6">
                <img src="path-to-image/boutique-interior.jpg" alt="Boutique Interior" class="rounded-lg shadow-lg">
                <img src="path-to-image/brides-trying-on-dresses.jpg" alt="Brides Trying on Dresses" class="rounded-lg shadow-lg">
            </div>
        </div>
        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-crimson mb-4">Tips for Your Visit</h2>
            <p class="mb-6">To make the most of your appointment, we suggest wearing comfortable clothing and bringing any accessories you might want to pair with your dress. Consider what styles you’re drawn to, but keep an open mind — sometimes the dress chooses you...</p>
            <p class="mb-6">Our boutique caters to all brides, including older brides and those with curvier figures. We have a wide range of styles available to try on, and we’re here to help you find the dress that makes you feel like a queen...</p>
        </div>
        <div class="mt-8 text-center">
            <a href="/wedding-dresses" class="bg-crimson text-white py-2 px-6 rounded-lg inline-block mr-4">Wedding Dresses</a>
            <a href="/about-elizabeth" class="bg-crimson text-white py-2 px-6 rounded-lg inline-block mr-4">About Elizabeth</a>
            <a href="/book-appointment" class="bg-crimson text-white py-2 px-6 rounded-lg inline-block">Book an Appointment</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
