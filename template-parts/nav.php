<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
?>


<nav class="flex justify-between items-center gap-8 py-8 max-w-screen-2xl mx-auto text-white">
    <div class="flex items-center z-50">
        <svg viewBox="0 0 12 10" class="hamburger me-3 me-xl-5 me-0 mt-1" height="20px" width="24px" class="z-50">
            <path d="M10,2 L2,2" class="upper stroke-white" transform-origin: 0px 0px;" data-svg-origin="2 2" transform="matrix(1,0,0,1,0,0)"></path>
            <path d="M10,5 L2,5" class="lower stroke-white" transform-origin: 0px 0px;" data-svg-origin="2 5" transform="matrix(1,0,0,1,0,0)"></path>
        </svg>
    </div>
    <div><img class="w-32 h-12" src="<?php echo $logo_url; ?>" alt="maidens and ravens logo" /></div>    
    <div class="hidden md:block">socials icons</div>
    <div id="side-menu">
        <div class="relative h-full">

            <div class="overlay opacity-0 absolute top-0 left-0 w-full h-full bg-black/20"></div>
            <div class="relative side-menu z-10 bg-white h-full w-full">
                <img src="<?php echo get_stylesheet_directory_uri(  ) . '/img/maiden-and-raven.jpg'; ?>" class=" absolute inset-0 opacity-20 h-full w-full object-cover" alt="maiden and raven">
                <?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'flex flex-col gap-8 my-auto list-none ml-auto', 'add_li_class' => 'text-black px-4')); ?>
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
