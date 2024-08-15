<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
?>


<nav class="flex justify-between items-center gap-8 p-8 max-w-screen-2xl mx-auto text-white">
    <div class="flex items-center z-50 self-start cursor-pointer">
        <svg viewBox="0 0 12 10" class="hamburger me-3 me-xl-5 me-0 mt-1" height="20px" width="24px" class="z-50">
            <path d="M10,2 L2,2" class="upper stroke-white" data-svg-origin="2 2" transform="matrix(1,0,0,1,0,0)"></path>
            <path d="M10,5 L2,5" class="lower stroke-white" data-svg-origin="2 5" transform="matrix(1,0,0,1,0,0)"></path>
        </svg>
        <?php wp_nav_menu(array('theme_location' => 'second-hero','menu_class' => 'hidden lg:flex gap-4 list-none pl-2', 'add_li_class' => 'text-white uppercase text-xs font-bold hover:underline')); ?>
    </div>
    <div><a href="/"><img class="w-full max-h-20 object-cover" src="<?php echo $logo_url; ?>" alt="maidens and ravens logo" /></a></div>    
    <div class="hidden md:block gap-8 self-start text-white">
        <div class="flex gap-8 items-center">
            <a href="#" class="px-4 py-2 bg-primary text-white cursor-pointer rounded-2xl text-xl focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Book an Appointment</a>
            <a href="https://www.facebook.com" target="_blank"><img class="h-8 w-8 object-cover text-white" src="<?php echo get_template_directory_uri();?>/img/socials/facebook.svg" alt="Visit the Maidens and Ravens Facebook page" /></a>    
            <a href="https://www.instagram.com" target="_blank"><img class="h-8 w-8 object-cover text-white" src="<?php echo get_template_directory_uri();?>/img/socials/instagram.svg" alt="Visit the Maidens and Ravens Instagram page" /></a>
        </div>
    </div>
    <div id="side-menu">
        <div class="relative h-full">

            <div class="overlay opacity-0 absolute top-0 left-0 w-full h-full bg-black/20"></div>
            <div class="absolute inset-0 side-menu z-10 bg-white h-full w-full">
                <?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'absolute inset-32 flex flex-col gap-8 my-auto list-none ml-auto', 'add_li_class' => 'text-black px-4')); ?>
            </div>
        </div>    

    </div>
</nav>



<script>
    const hamburger = document.querySelector('.hamburger');
    const overlay = document.querySelector('.overlay');
    const sideMenu = document.getElementById('side-menu');
    const menu = sideMenu.querySelector('.side-menu');
    const body = document.getElementsByTagName('body')[0];
    const hamburgerStripes = Array.from(hamburger.getElementsByTagName('path'));
    console.log(hamburgerStripes);

    hamburger.addEventListener('click', (e) => {
        toggleMenu();
    });

    overlay.addEventListener('click', (e) => {
        toggleMenu();
    });

    function toggleMenu() {
        body.classList.toggle('overflow-hidden');
        overlay.classList.toggle('opacity-0');
        overlay.classList.toggle('opacity-1');
        sideMenu.classList.toggle('open');
        menu.classList.toggle('open');
        hamburgerStripes.forEach(stripe => stripe.classList.toggle('stroke-white'));
        hamburgerStripes.forEach(stripe => stripe.classList.toggle('stroke-black'));
    }

    document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('#menu-menu-1 .menu-item-has-children > a');
    const mainMenu = document.getElementById('menu-menu-1');

    menuItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();  // Prevent the default action
            const subMenu = item.nextElementSibling;

            if (subMenu.classList.contains('sub-menu')) {
                // Hide the parent menu items
                Array.from(mainMenu.children).forEach(menuItem => {
                    menuItem.style.display = 'none';
                });

                // Show the submenu
                subMenu.classList.add('open');
            }
        });
    });

    // Add a back button functionality
    const subMenus = document.querySelectorAll('#menu-menu-1 .sub-menu');
    subMenus.forEach(subMenu => {
        const backButton = document.createElement('li');
        backButton.classList.add('menu-item', 'back-button');
        backButton.innerHTML = '<a href="#">Back</a>';
        subMenu.insertBefore(backButton, subMenu.firstChild);

        backButton.addEventListener('click', function(event) {
            event.preventDefault();

            // Hide the submenu
            subMenu.classList.remove('open');

            // Show the parent menu items
            mainMenu.querySelectorAll('> li').forEach(menuItem => {
                menuItem.style.display = 'flex';
            });
        });
    });
});

</script>
