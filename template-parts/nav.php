<?php
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
    $menu = wp_nav_menu(array('theme_location' => 'primary','menu_class' => 'flex'));
?>


<nav id="head-nav" class="navbar-expand-lg navbar-light py-4">
  <div class="container mx-auto">
    <div class="row justify-between">
      <div class="col-2 col-md-7 col-lg-5 flex justify-end md:justify-start order-2 md:order-1">
        <div class="menu-left my-auto ms-md-0 me-md-auto ms-auto me-0">
          <div class="my-auto" id="head-nav-in">
            <svg viewBox="0 0 12 10" class="hamburger me-3 xl:me-5 me-0 mt-1" height="20px" width="24px">
              <path d="M10,2 L2,2" class="upper" style="stroke: rgb(255, 255, 255); transform-origin: 0px 0px;" data-svg-origin="2 2" transform="matrix(1,0,0,1,0,0)"></path>
              <path d="M10,5 L2,5" class="lower" style="stroke: rgb(255, 255, 255); transform-origin: 0px 0px;" data-svg-origin="2 5" transform="matrix(1,0,0,1,0,0)"></path>
            </svg>
            <div class="ms-auto">
              <ul id="Primary" class="navbar-nav mt-3 lg:mt-0 mb-3 lg:mb-0 ms-0 me-auto hidden md:flex">
                <li id="menu-item-11629" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11629 nav-item me-3 lg:me-1 xl:me-4">
                  <a href="https://eppel.nl/portfolio" class="nav-link text-white">Portfolio</a>
                </li>
                <li id="menu-item-22354" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11634 current_page_item menu-item-22354 nav-item me-3 lg:me-1 xl:me-4">
                  <a href="https://eppel.nl/prijzen-trouwfotograaf" aria-current="page" class="nav-link text-white">To marry</a>
                </li>
                <li id="menu-item-22363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22363 nav-item me-3 lg:me-1 xl:me-4">
                  <a href="https://eppel.nl/zwangerschapsfotografie" class="nav-link text-white">Pregnant</a>
                </li>
                <li id="menu-item-22669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22669 nav-item me-3 lg:me-1 xl:me-4">
                  <a href="https://eppel.nl/workshops-voor-fotografen" class="nav-link text-white">Workshops</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-10 col-md-2 flex order-1 md:order-2">
        <a class="navbar-brand ms-0 mx-md-auto" href="https://eppel.nl">
          <div class="logo mx-auto">
            <svg id="hetlogo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="transform: translate(0px, 0px); opacity: 1;">
              <path d="M40 0c22.091 0 40 17.909 40 40S62.091 80 40 80 0 62.091 0 40 17.909 0 40 0Zm19.294 11.429c-1.023 0-2.02.581-2.991 1.742-.973 1.162-1.907 2.715-2.803 4.663a51.466 51.466 0 0 0-2.451 6.827 114.194 114.194 0 0 0-2.055 8.269c-.611 2.9-1.143 5.864-1.593 8.89l-.132.92.314-.586a.371.371 0 0 1 .366-.103l.094.04a.3.3 0 0 1 .154.435 44.214 44.214 0 0 1-1.006 1.8l-.174.285-.126 1.029c-.192 1.624-.35 3.253-.471 4.884a4.779 4.779 0 0 0-2.39.87 2.657 2.657 0 0 0-1.104 2.175c-.04.952.267 1.667.92 2.144.653.478 1.463.69 2.267.591v.365c-.003.338-.009.765-.03 1.282-.03.723 0 1.545.028 2.458.032.914.115 1.842.219 2.797.09.895.263 1.78.519 2.643.195.705.518 1.368.951 1.957.329.475.863.761 1.437.765.734 0 1.367-.362 1.9-1.087a8.649 8.649 0 0 0 1.246-2.58 19.68 19.68 0 0 0 .676-2.983 17.69 17.69 0 0 0 .214-2.362 15.85 15.85 0 0 0-.336-3.233 9.947 9.947 0 0 0-1.136-2.986 32.296 32.296 0 0 0 4.489-5.097 53.06 53.06 0 0 0 3.677-5.843.314.314 0 0 0-.018-.25.307.307 0 0 0-.196-.154c-.184-.062-.316-.032-.4.093a48.236 48.236 0 0 1-3.554 5.69l-.003-.01a31.883 31.883 0 0 1-4.413 5.004 6.921 6.921 0 0 0-1.593-1.493 4.679 4.679 0 0 0-2.207-.757c.252-2.843.579-5.678.98-8.503A135.337 135.337 0 0 0 53 34.713c.832-1.472 1.69-3.016 2.576-4.633a78.694 78.694 0 0 0 2.42-4.786c.333-.705.7-1.514 1.106-2.425.403-.913.78-1.855 1.128-2.829.34-.946.628-1.911.86-2.891.211-.855.324-1.73.338-2.61 0-.719-.153-1.429-.449-2.083-.309-.685-.869-1.027-1.686-1.027ZM51.2 53.896c.468.891.78 1.858.92 2.858.158 1.009.242 2.027.25 3.047-.019.679-.08 1.355-.186 2.023l-.004-.007c-.126.914-.31 1.819-.552 2.709a9.57 9.57 0 0 1-.95 2.364c-.388.66-.867.994-1.44.994-.41 0-.748-.253-1.01-.777a7.766 7.766 0 0 1-.643-1.96 18.647 18.647 0 0 1-.34-2.608c-.06-.912-.09-1.824-.093-2.738 0-.868.015-1.638.033-2.3.02-.662.03-1.118.03-1.368a9.529 9.529 0 0 0 2.023-.87 13.957 13.957 0 0 0 1.962-1.367Zm-13.79-42.282a15.156 15.156 0 0 0-4.753.779 14.656 14.656 0 0 0-4.257 2.206 11.186 11.186 0 0 0-3.138 3.262 9.662 9.662 0 0 0-1.3 4.886 9.586 9.586 0 0 0 1.106 4.671c.656 1.174 1.538 2.228 2.63 3.114 1.166.95 2.477 1.715 3.899 2.277 1.347.533 2.796.83 4.281.873a14.78 14.78 0 0 0 4.17-.53 13.267 13.267 0 0 0 4.07-2.09c1.188-.88 2.208-1.947 3.02-3.168.81-1.223 1.398-2.568 1.735-3.98.247-1.047.36-2.12.336-3.197a9.91 9.91 0 0 0-.557-3.273 8.855 8.855 0 0 0-2.57-3.858c-1.138-.948-2.47-1.68-3.945-2.152a13.933 13.933 0 0 0-4.435-.686Zm.104 3.963c.946-.016 1.888.125 2.797.422.899.296 1.75.773 2.52 1.403.796.654 1.444 1.477 1.902 2.417.43.884.68 1.852.726 2.839a6.327 6.327 0 0 1-.197 2.013 6.967 6.967 0 0 1-1.207 2.506 8.05 8.05 0 0 1-1.895 1.815 10.625 10.625 0 0 1-2.493 1.224 9.16 9.16 0 0 1-2.946.488c-.92-.033-1.828-.23-2.694-.582a8.556 8.556 0 0 1-2.39-1.435 7.19 7.19 0 0 1-1.628-2.06 6.347 6.347 0 0 1-.642-2.4 5.753 5.753 0 0 1 .364-2.509 6.84 6.84 0 0 1 1.537-2.287c.71-.682 1.543-1.21 2.457-1.556a9.04 9.04 0 0 1 2.929-.567Z" class="logo-fill" style="fill: rgb(255, 255, 255); opacity: 1;" data-svg-origin="40 40" transform="matrix(1,0,0,1,0,0)"></path>
            </svg>
          </div>
        </a>
      </div>
      <div class="col-3 col-lg-5 flex justify-end order-3 md:order-3">
        <div class="menu-right">
          <ul id="Primary" class="navbar-nav hidden md:flex">
            <li id="menu-item-11791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11791 nav-item me-3 lg:me-1 xl:me-4">
              <a href="https://eppel.nl/fotograaf-voor-bedrijven" class="nav-link text-white">Business</a>
            </li>
            <li id="menu-item-11790" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11790 nav-item me-3 lg:me-1 xl:me-4">
              <a href="https://eppel.nl/over-eppel-fotografie" class="nav-link text-white">About Eppel</a>
            </li>
            <li id="menu-item-11789" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11789 nav-item me-3 lg:me-1 xl:me-4">
              <a href="https://eppel.nl/contact" class="nav-link text-white">Contact</a>
            </li>
          </ul>
          <div class="mx-auto">
            <div class="menu-right-social ms-auto">
              <a href="https://www.instagram.com/eppelphotography/" class="nav-link d-inline-flex ms-auto">
                <img src="https://eppel.nl/wp-content/uploads/2023/06/social-icons_ig_w.svg" alt="Instagram" width="20">
              </a>
              <a href="https://www.facebook.com/eppelphotography" class="nav-link d-inline-flex ms-auto">
                <img src="https://eppel.nl/wp-content/uploads/2023/06/social-icons_fb_w.svg" alt="Facebook" width="20">
              </a>
              <a href="https://www.linkedin.com/in/robineppel/" class="nav-link d-inline-flex ms-auto">
                <img src="https://eppel.nl/wp-content/uploads/2023/06/social-icons_ln_w.svg" alt="LinkedIn" width="20">
              </a>
              <a href="https://www.pinterest.com/eppelphotography" class="nav-link d-inline-flex ms-auto">
                <img src="https://eppel.nl/wp-content/uploads/2023/06/social-icons_pi_w.svg" alt="Pinterest" width="20">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="phone-nav" class="nav-item d-block d-md-none flex order-4 col-2 justify-end">
        <div class="btn-group dropstart">
          <a class="dropdown-toggle btn btn-outline-none border-0 shadow-none ms-auto" href="#" role="button" id="dropdownPhone" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://eppel.nl/wp-content/uploads/2022/05/social-icons_phone_w.svg" width="20">
          </a>
          <ul class="dropdown-menu mt-2" aria-labelledby="dropdownPhone">
            <li class="text-center">
              <a href="tel:0626013808" class="text-white">+31 6 260 138 08</a>
            </li>
            <li class="text-center">
              <a href="mailto:info@eppel.nl" class="text-white">info@eppel.nl</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
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
