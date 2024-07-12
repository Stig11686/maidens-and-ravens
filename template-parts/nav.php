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
    <div class="hidden fixed inset-0 z-10 bg-white p-8"></div>
</nav>


