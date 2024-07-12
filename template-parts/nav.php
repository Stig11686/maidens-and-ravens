<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
?>


<nav class="flex justify-between items-center gap-8 py-8 max-w-9xl mx-auto text-white">
    <div><?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'flex list-none', 'add_li_class' => 'text-white')); ?></div>
    <div><img class="w-32 h-8" src="<?php echo $logo_url; ?>" alt="maidens and ravens logo" /></div>
    <div>socials icons<div>
    <div class="hidden fixed inset-0 z-10 bg-white"></div>
</nav>


