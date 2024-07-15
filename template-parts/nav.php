<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
?>


<nav class="flex justify-between items-center gap-8 p-8 max-w-screen-2xl mx-auto text-white">
    <div class="flex items-center z-50 self-start cursor-pointer">
        <svg viewBox="0 0 12 10" class="hamburger me-3 me-xl-5 me-0 mt-1" height="20px" width="24px" class="z-50">
            <path d="M10,2 L2,2" class="upper stroke-white" transform-origin: 0px 0px; data-svg-origin="2 2" transform="matrix(1,0,0,1,0,0)"></path>
            <path d="M10,5 L2,5" class="lower stroke-white" transform-origin: 0px 0px; data-svg-origin="2 5" transform="matrix(1,0,0,1,0,0)"></path>
        </svg>
    </div>
    <div><img class="w-full max-h-28 object-cover" src="<?php echo $logo_url; ?>" alt="maidens and ravens logo" /></div>    
    <div class="hidden md:block gap-8 self-start text-white">
        <div class="flex gap-8">
            <a class="h-8 w-8" href="https://www.facebook.com" target="_blank"><svg id="facebook-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14 19h5V5H5v14h7v-5h-2v-2h2v-1.654c0-1.337.14-1.822.4-2.311A2.726 2.726 0 0 1 13.536 6.9c.382-.205.857-.328 1.687-.381.329-.021.755.005 1.278.08v1.9H16c-.917 0-1.296.043-1.522.164a.727.727 0 0 0-.314.314c-.12.226-.164.45-.164 1.368V12h2.5l-.5 2h-2v5zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1z" fill="#bb8263"/></svg></a>
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
    const closeNav = document.getElementById('close-nav');
    const hamburgerStripes = Array.from(hamburger.getElementsByTagName('path'));
    console.log(hamburgerStripes);

    hamburger.addEventListener('click', (e) => {
        console.log('clicked');
        toggleMenu();
    });

    closeNav.addEventListener('click', e => {
        console.log('clicked');
        toggleMenu()
    })

    function toggleMenu() {
        body.classList.toggle('overflow-hidden');
        overlay.classList.toggle('opacity-0');
        overlay.classList.toggle('opacity-1');
        sideMenu.classList.toggle('open');
        menu.classList.toggle('open');
        hamburgerStripes.forEach(stripe => stripe.classList.toggle('stroke-white'));
        hamburgerStripes.forEach(stripe => stripe.classList.toggle('stroke-black'));
    }
</script>
