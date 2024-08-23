<?php
/*
Template Name: Elizabeth's Story
*/
get_header(); ?>

<section class="bg-gray-100 text-black p-8">
    <div class="container mx-auto max-w-screen-lg">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-crimson mb-6">Elizabeth's Story</h1>
            <p class="text-lg leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elizabeth's journey is one of passion, creativity, and commitment to making every bride's dream come true...</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-semibold text-crimson mb-4">Our Journey</h2>
                <p class="mb-6">From a small-town girl with a dream to the proud owner of Maidens and Ravens, Elizabeth's journey has been nothing short of magical. Her love for unique, ethereal, and sometimes darkly romantic designs led her to create a boutique that celebrates every bride's individuality...</p>
                <p class="mb-6">Today, Maidens and Ravens stands as a beacon for brides who seek something different, something magical. With a focus on quality, personalization, and a touch of the extraordinary, Elizabeth and her team are committed to making each bride's dream a reality...</p>
            </div>
            <div class="space-y-6">
                <img src="path-to-image/elizabeth.jpg" alt="Elizabeth" class="rounded-lg shadow-lg">
                <blockquote class="bg-crimson text-white p-4 rounded-lg shadow-md">
                    <p>"The moment I stepped into Maidens and Ravens, I knew this was where I would find my dress. Elizabeth made me feel so special, and her eye for detail is unmatched." - <strong>Jessica S.</strong></p>
                </blockquote>
                <blockquote class="bg-crimson text-white p-4 rounded-lg shadow-md">
                    <p>"Elizabeth's boutique is like stepping into a dream. The experience was magical from start to finish." - <strong>Emily R.</strong></p>
                </blockquote>
            </div>
        </div>
        <div class="mt-8 text-center">
            <a href="/wedding-dresses" class="bg-crimson text-white py-2 px-6 rounded-lg inline-block mr-4">Wedding Dresses</a>
            <a href="/boutique" class="bg-crimson text-white py-2 px-6 rounded-lg inline-block mr-4">The Boutique</a>
            <a href="/book-appointment" class="bg-crimson text-white py-2 px-6 rounded-lg inline-block">Book an Appointment</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
