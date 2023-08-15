<!doctype html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php is_front_page() ? bloginfo('description') : wp_title(''); echo ' - '; bloginfo('name');   ?></title>
  <meta name="description" content="" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/svg" href="<?php echo get_template_directory_uri()?>/favicon.png" />
  <!-- Phosphor icons library -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/src/css/styles.css" />
  <!-- Function WP HEAD -->
  <?php wp_head(); ?>
</head>
<body class="relative">
  <!-- Header -->
  <header class="bg-white sticky top-0 flex items-center w-full h-[90px] border-b border-gray200 max-lg:h-[80px]" id="js-header">
    <!-- Container -->
    <div class="w-full max-w-[1246px] mx-auto px-[15px]">
      <div class="w-full flex items-center justify-between">
        <!-- Logo -->
        <div>
          <a href="<?php echo get_home_url(); ?>">
            <img
              src="<?php echo get_template_directory_uri()?>/assets/logo-motortrade.svg"
              alt="Motortrade Logo"
              title="Motortrade Logo"
              class="w-full max-w-[177px] m-h-[52px] max-lg:max-w-[150px]"
            />
          </a>
        </div>
        <!-- Nav Menu  -->
        <nav class="max-lg:hidden" id="nav">
          <ul class="flex items-center gap-10">
            <!-- Item Menu-->
            <li>
              <a tabindex="0" class="cursor-default flex items-center gap-3 js-btn-menu" aria-label="Road Risk Insurance Menu">
                <span class="font-sans font-medium text-lg text-gray-900">All Insurance Type</span>
                <i class="ph-bold ph-caret-down text-lg"></i>
              </a>
              <!-- Dropdown Menu -->
              <div class="absolute top-[80px] mr-8 border bg-white max-w-[772px] rounded-md js-area-dropdown">
                <img
                  class="absolute left-[130px] top-[-12px]"
                  src="<?php echo get_template_directory_uri()?>/assets/icon-dropdown-menu.svg"
                  alt="icon menu dropdown"
                  title="icon menu dropdown"
                />
                <ul class="py-4 px-4 grid grid-cols-2 gap-x-[30px] gap-y-[8px]">
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Road Risk Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Road Risk Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Road Risk Insurance is the basic form of motor trade insurance mandated by law.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Car Traders Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Car Traders Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Low Cost Car Traders Insurance from the specialists.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Mechanics Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                    <div class="px-[20px] py-[15px]">
                      <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                        Mechanics Insurance
                      </p>
                      <span class="font-sans text-sm font-light text-gray50 leading-4">Call us today and we'll guarantee our chepeast price*.</span>
                    </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Valeters Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Valeters Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Insure your valeting business today and save big amount of money.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Car Wash Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Car Wash Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Our motor trade insurance policies are as unique as each car wash.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Mobile Mechanic Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Mobile Mechanic Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Insure more than just road risk with mobile mechanics insurance.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('HGV Motor Trade Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          HGV Motor Trade Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Low Cost HGV Motor Trade Insurance from the specialists.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Tyre Fitter Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Tyre Fitter Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Protect your business today with our windscreen, exhaust and tyre fitter insurance.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Part-Time Motor Trade Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Part-Time Motor Trade Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Specialized insurance for anyone in the motor trade industry on a part-time basis.</span>
                      </div>
                    </a>
                  </li>
                  <!-- Dropdown Menu Item-->
                  <li class="cursor-pointer backdrop:w-full max-w-[336px] border rounded-md border-transparent hover:bg-darkRedOpacity ease-in-out duration-300 relative" id="menu-dropdown-item">
                    <a href="<?php echo get_permalink(get_page_by_title('Trade Plate Insurance')) ?>" class="before:opacity-0 before:top-[30px] before:bg-darkRed before:rounded-r-lg before:absolute before:h-[48px] before:left-0 before:w-[5px] ease-in-out duration-300">
                      <div class="px-[20px] py-[15px]">
                        <p class="font-sans text-base font-medium text-gray900 pb-[1px]">
                          Trade Plate Insurance
                        </p>
                        <span class="font-sans text-sm font-light text-gray50 leading-4">Specialized motor trade insurance that includes any trade plate vehicles registered on the MID.</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- Contact Bottom Dropdown Menu -->
                <div class="bg-gray100 w-full rounded-b-[6px]">
                  <ul class="flex items-start justify-between py-[15px] px-[15px]">
                    <li class="w-full max-w-[257px]">
                      <a href="<?php the_field('contact_sales_number', 'options') ?>" class="flex items-center justify-center gap-3 hover:text-darkRed ease-in-out duration-200">
                        <i class="ph-bold ph-phone"></i>
                        <span class="font-sans font-medium text-[13px] text-gray900 hover:text-darkRed ease-in-out duration-200">Contact Sales</span>
                      </a>
                    </li>
                    <li class="w-full max-w-[257px]">
                      <a href="<?php the_field('customer_service_number', 'options') ?>" class="flex items-center justify-center gap-3 hover:text-darkRed ease-in-out duration-200">
                        <i class="ph-bold ph-phone"></i>
                        <span class="font-sans font-medium text-[13px] text-gray900 hover:text-darkRed ease-in-out duration-200">Customer Service</span>
                      </a>
                    </li>
                    <li class="w-full max-w-[257px]">
                      <a href="<?php the_field('claims_number', 'options') ?>" class="flex items-center justify-center gap-3 hover:text-darkRed ease-in-out duration-200">
                        <i class="ph-bold ph-phone"></i>
                        <span class="font-sans font-medium text-[13px] text-gray900 hover:text-darkRed ease-in-out duration-200">Claims</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <a href="<?php echo get_permalink(get_page_by_title('Combined Premises')) ?>" aria-label="Combined Premises Menu">
                <span class="font-sans font-medium text-lg text-gray-900">Combined Premises</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Base Get a Quote Button -->
        <button class="max-lg:hidden w-full max-w-[173px] inline-block border rounded-[28px] border-darkRed bg-darkRed px-8 py-2 font-sans text-center text-[16px] text-white antialiased font-semibold uppercase hover:bg-transparent hover:text-darkRed focus:outline-none focus:ring active:text-darkRed ease-in-out duration-200 js-cta-button" id="js-cta-button">
          <span>Get a Quote</span>
        </button>
        <!-- Mobile Menu Button -->
        <button class="block rounded bg-gray-100 p-2.5 text-gray900 transition hover:text-gray700 /75 lg:hidden js-mobile-menu" id="js-menu-button">
          <span class="sr-only">Toggle menu</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 22 22"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
        </button>
      </div>
    </div>
    <!-- Content Mobile Menu -->
    <div class="absolute top-[80px] lg:hidden js-mobile-menu-content w-full bg-white p-4 items-center border-b-[1px] border-gray200 ease-in-out duration-200" id="mobile-menu-content">
      <!-- Dynamic Menu -->
      <?php
        $args = array(
          'menu' => 'Header Menu Mobile',
          'theme_location' => 'header-mobile-menu',
          'container' => false,
          'menu_class' => 'flex flex-col p-4 font-medium border border-gray-100 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray700 gap-1 mb-3',
          'walker' => new Custom_Walker_Nav_Menu()
        );
        wp_nav_menu( $args );
      ?>
    </div>
  </header>