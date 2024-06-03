<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
?>



<header class="bg-gray-900 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <div class="logo">
                <a href="/" class="text-2xl font-bold"><img src="<?php echo esc_url( $logo_url ); ?>" alt="Maidens and Ravens logo"></a>
            </div>
            <nav class="hidden md:flex space-x-4">
                <?php wp_nav_menu(array('theme_location' => 'primary','container_class' => 'flex'));?>
                <button id="hamburgerBtn" class="md:hidden text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </nav>
            <button id="hamburgerBtn" class="md:hidden text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <!-- Full-screen dropdown menu -->
        <div id="mobileMenu" class="fixed inset-0 bg-gray-900 text-white flex flex-col items-center justify-center space-y-4 hidden md:hidden">
            <?php wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'flex'));?>
            <button id="closeMenuBtn" class="text-2xl focus:outline-none">Close</button>
        </div>
    </header>

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
