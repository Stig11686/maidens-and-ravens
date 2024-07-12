<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
    $menu = wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'flex'));
?>


<nav class="flex justify-between items-center gap-8">
    <div><?php echo $menu; ?></div>
    <div><img class="w-32 h-8" src="<?php echo $logo_url; ?>" alt="maidens and ravens logo" /></div>
    <div>socials icons<div>

</nav>




    <script>
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenuBtn = document.getElementById('closeMenuBtn');

        hamburgerBtn.addEventListener('click', () => {
            if (window.innerWidth < 768) {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.add('slide-in');
            } else {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.add('slide-down');
            }
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    </script>
