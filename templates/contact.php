<?php
/*
Template Name: Contact
*/
get_header(); ?>

<section class="bg-white text-black p-8">
    <div class="container mx-auto max-w-screen-lg">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-crimson mb-6">Book an Appointment</h1>
            <p class="text-lg leading-relaxed mb-6">We are so excited to meet you, learn about your wedding day plans, and help you find the dress of your dreams...</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <img src="path-to-image/elizabeth-outside-shop.jpg" alt="Elizabeth Outside Shop" class="rounded-lg shadow-lg mb-8">
                <h2 class="text-2xl font-semibold text-crimson mb-4">What to Expect</h2>
                <p class="mb-6">Your appointment will be an exclusive, personalized experience in our boutique. You’ll have the shop to yourself, and we’ll be there to guide you every step of the way as you find your dream dress...</p>
            </div>
            <div>
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="space-y-6">
                    <div>
                        <label for="name" class="block text-lg font-semibold">Name</label>
                        <input type="text" id="name" name="name" required class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>
                    <div>
                        <label for="phone" class="block text-lg font-semibold">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-semibold">Email</label>
                        <input type="email" id="email" name="email" required class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>
                    <div>
                        <label for="ideal_time" class="block text-lg font-semibold">Ideal Time for Appointment</label>
                        <select id="ideal_time" name="ideal_time" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                        </select>
                    </div>
                    <div>
                        <label for="ideal_day" class="block text-lg font-semibold">Ideal Day for Appointment</label>
                        <select id="ideal_day" name="ideal_day" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="weekday">Weekday</option>
                            <option value="weekend">Weekend</option>
                        </select>
                    </div>
                    <div>
                        <label for="specific_dates" class="block text-lg font-semibold">Specific Dates (Optional)</label>
                        <input type="text" id="specific_dates" name="specific_dates" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>
                    <div>
                        <label for="wedding_date" class="block text-lg font-semibold">Wedding Date (or not set)</label>
                        <input type="text" id="wedding_date" name="wedding_date" class="w-full border-gray-300 rounded-lg shadow-sm">
                    </div>
                    <div>
                        <label for="newsletter_optin" class="block text-lg font-semibold">Subscribe to Our Newsletter?</label>
                        <input type="checkbox" id="newsletter_optin" name="newsletter_optin">
                        <span class="ml-2">Yes, keep me updated</span>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="bg-crimson text-white py-2 px-6 rounded-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-8 text-center">
            <h2 class="text-2xl font-semibold text-crimson mb-4">Key Information</h2>
            <p class="mb-6">We are located at [Shop Address], and visits are by appointment only. You can contact us at [Phone Number] or [Email Address]...</p>
            <p class="mb-6">For those driving, parking is available at [Parking Info]. If you’re taking the train, we are just [X] minutes from [Station Name]...</p>
            <div id="map" class="w-full h-64 bg-gray-200 rounded-lg"></div> <!-- Replace with a Google Maps embed -->
        </div>
    </div>
</section>

<?php get_footer(); ?>
