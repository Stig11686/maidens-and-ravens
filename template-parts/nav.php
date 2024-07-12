<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
?>


<nav class="flex justify-between items-center gap-8 py-8 max-w-screen-2xl mx-auto text-white">
    <div><img class="w-32 h-8" src="<?php echo $logo_url; ?>" alt="maidens and ravens logo" /></div>    
    <div class="flex items-center">
        <?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'flex list-none ml-auto', 'add_li_class' => 'text-white px-4')); ?>
        <svg viewBox="0 0 12 10" class="hamburger me-3 me-xl-5 me-0 mt-1" height="20px" width="24px">
            <path d="M10,2 L2,2" class="upper" style="stroke: rgb(255, 255, 255); transform-origin: 0px 0px;" data-svg-origin="2 2" transform="matrix(1,0,0,1,0,0)"></path>
            <path d="M10,5 L2,5" class="lower" style="stroke: rgb(255, 255, 255); transform-origin: 0px 0px;" data-svg-origin="2 5" transform="matrix(1,0,0,1,0,0)"></path>
        </svg>
    </div>
    
    <div>socials icons<div>
    <div id="side-menu" class="fixed top-0 left-0 w-0 opacity-0 hidden">
        <div class="relative">
            <div class="overlay opacity-0 absolute top-0 left-0 w-full h-full bg-white/2"></div>
            <div class="absolute inset-0 z-10 bg-white p-8" style="clip-path: circle(0 at -21% 0);">
            <?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'flex fex-col list-none ml-auto', 'add_li_class' => 'text-white px-4')); ?>
            </div>
        </div>    

    </div>
</nav>



<script>
    const hamburger = document.querySelector('.hamburger');
    const overlay = document.querySelector('.overlay');
    const sideMenu = document.getElementById('side-menu');

    hamburger.addEventListener('click', (e) => {
        overlay.classList.toggle('opacity-0');
        overlay.classList.toggle('opacity-1');
        sideMenu.classList.toggle('w-0');
        sideMenu.classList.toggle('w-full');

    });
</script>
