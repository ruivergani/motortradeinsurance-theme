<?php
  // Template name: about-us
?>
<!-- Include Header -->
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- === Form Modal Component === -->
  <section class="dialler-form-modal modal-cta-form">
    <div class="overlay">
    </div>
    <div class="box">
      <div class="box-content">
        <div class="box-content-body">
          <!-- Form -->
          <div class="w-full max-w-[450px] flex items-center justify-center flex-col relative">
            <button class="cursor-pointer absolute end-2 top-2 rounded-full border border-gray-300 bg-gray-100 p-2 js-close">
                <span class="sr-only">Close</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                <path
                    fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                />
                </svg>
            </button>
            <form id="merlin-dialler-form" action="" method="post" class="w-full bg-white rounded-lg shadow-xl px-[40px] pt-[45px] pb-[50px] flex flex-col items-center justify-center border-[1px] border-gray-100 max-sm:px-[25px]">
              <h2 class="font-sans text-[22px] text-gray900 font-bold mb-[20px] text-center max-sm:text-[18px]">Find out how much you can save. Complete the form to get a quote.</h2>
              <p class="font-sans text-gray700 max-sm:text-[16px]">Our friendly team is always on hand to help!</p>
              <div class="my-[30px] flex items-center justify-center gap-[20px] flex-col">
                  <input type="text" name="name" id="name" placeholder="Enter Your Name" required class="w-full border rounded-lg border-gray200 p-4 text-sm shadow-sm">
                  <input type="text" name="surname" id="surname" placeholder="Enter Your Surname" required class="w-full border rounded-lg border-gray200 p-4 text-sm shadow-sm">
                  <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number" class="w-full border rounded-lg border-gray200 p-4 text-sm shadow-sm">
                  <div class="form-group-checkbox flex items-start gap-3">
                  <input type="checkbox" name="conditions" id="checkbox_agree" required class="mt-1">
                  <label for="checkbox_agree" class="text-sm max-lg:text-left">
                      * I agree to my data being processed in accordance with the
                      <a href="/privacy" class="hover:underline font-semibold">
                      Privacy Policy
                      </a>
                  </label>
                  </div>
              </div>
              <!-- === HIDDEN INPUT === -->
              <input name="affinity" type="hidden" value="">
              <input name="product" type="hidden" value="">
              <input name="host" type="hidden" value="">
              <input name="gclid" type="hidden">
              <!-- === END OF HIDDEN INPUT === -->
              <!-- Primary Form Next Button -->
              <button id="dailer-submit-btn" type="submit" class="w-full max-w-[309px] border rounded-lg bg-darkRed text-center text-white font-sans font-semibold py-3  ease-in-out duration-200 hover:brightness-90 flex items-center justify-center gap-[10px]">
                <span>Next Steps</span>
                <i class="ph-bold ph-arrow-right font-semibold text-[16px]"></i>
                <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Breadcrumbs -->
  <?php breadcrumbs(); ?> 

  <!-- Section Hero -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="w-full pb-[100px] max-sm:pb-[40px] max-lg:pb-[60px] flex flex-row justify-between items-center max-lg:flex-col max-lg:gap-[40px] max-lg:text-center">
      <div class="w-full max-w-[750px] max-lg:max-w-full">
        <h2 class="font-sans text-gray900 pb-[50px] text-[56px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px] tracking-wider leading-[60px]">
          Who
          <span class="before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-yellow-400 relative inline-block mt-3">
            <span class="relative">we are</span>
          </span>
          and what 
          <span class="before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-yellow-400 relative inline-block mt-3">
            <span class="relative">we do</span>
          </span>
        </h2>
        <p class="w-full text-[18px] font-sans font-normal tracking-[0.18px] leading-[28px]">
          <?php the_field('subtitle_hero_page_about_us') ?>
        </p>
      </div>
      <div class="relative">
        <img src="<?php echo get_template_directory_uri()?>/assets/image-08.png" alt="" class="relative z-[10] object-cover rounded-tl-[50px] w-full max-w-[280px] h-[250px] rounded-br-[10px] max-lg:max-w-[320px]">
        <img src="<?php echo get_template_directory_uri()?>/assets/square-shape.svg" alt="" class="z-[1] absolute object-cover right-[-90px] top-[-80px]" id="square-svg">
      </div>
    </section>
  </div>

  <!-- Section Cards -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="w-full">
      <ul class="flex flex-row items-center max-lg:text-center max-md:flex-col">
        <div class="relative w-full max-w-[393px] bg-lightRed pt-[65px] px-[44px] flex flex-col bordertransition-all duration-200 min-h-[475px] max-md:min-h-full max-sm:pt-[40px] max-sm:px-[30px]">
          <h2 class="text-white font-sans text-[22px] font-bold leading-6 pb-5 max-sm:text-[20px]">Fastest growing motor trade brokers</h2>
          <p class="text-white font-sans text-[18px] font-normal leading-6 pb-[40px] max-lg:text-[16px]">That's why we offer personalised support and guidance throughout the insurance process.</p>
          <div class="absolute right-0 bottom-0 max-md:hidden">
            <svg width="257" height="224" viewBox="0 0 257 224" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_1036_2828)">
              <g clip-path="url(#clip0_1036_2828)">
              <rect x="33" y="59.0914" width="151.304" height="228.384" rx="7.137" transform="rotate(-11.4715 33 59.0914)" fill="#FDFDFD"/>
              <rect x="57.1094" y="170.718" width="148.45" height="114.192" transform="rotate(-11.4715 57.1094 170.718)" fill="#E94158" fill-opacity="0.5"/>
              <rect x="38.0655" y="118.144" width="16.4151" height="22.1247" rx="8.20755" transform="rotate(-11.4715 38.0655 118.144)" stroke="url(#paint0_linear_1036_2828)" stroke-width="0.7137"/>
              <rect x="58.1766" y="102.411" width="16.4151" height="22.1247" rx="8.20755" transform="rotate(-11.4715 58.1766 102.411)" stroke="url(#paint1_linear_1036_2828)" stroke-width="0.7137"/>
              <rect x="83.9652" y="114.655" width="16.4151" height="22.1247" rx="8.20755" transform="rotate(-11.4715 83.9652 114.655)" stroke="url(#paint2_linear_1036_2828)" stroke-width="0.7137"/>
              <rect x="100.143" y="93.8942" width="16.4151" height="22.1247" rx="8.20755" transform="rotate(-11.4715 100.143 93.8942)" stroke="#78797A" stroke-width="0.7137"/>
              <rect x="125.932" y="106.139" width="16.4151" height="22.1247" rx="8.20755" transform="rotate(-11.4715 125.932 106.139)" fill="#FFAE10" stroke="url(#paint3_linear_1036_2828)" stroke-width="0.7137"/>
              <rect x="144.905" y="84.8086" width="16.4188" height="22.1284" rx="8.2094" transform="rotate(-11.4715 144.905 84.8086)" stroke="url(#paint4_linear_1036_2828)" stroke-width="0.71"/>
              <rect x="184.076" y="76.8614" width="16.4151" height="22.1247" rx="8.20755" transform="rotate(-11.4715 184.076 76.8614)" stroke="url(#paint5_linear_1036_2828)" stroke-width="0.7137"/>
              <rect x="169.297" y="97.3384" width="16.4151" height="22.1247" rx="8.20755" transform="rotate(-11.4715 169.297 97.3384)" stroke="url(#paint6_linear_1036_2828)" stroke-width="0.7137"/>
              </g>
              <rect x="33.8414" y="59.6489" width="149.877" height="226.957" rx="6.4233" transform="rotate(-11.4715 33.8414 59.6489)" stroke="white" stroke-width="1.4274" shape-rendering="crispEdges"/>
              </g>
              <defs>
              <filter id="filter0_d_1036_2828" x="-1" y="-1" width="261.703" height="321.913" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset dy="4"/>
              <feGaussianBlur stdDeviation="17"/>
              <feComposite in2="hardAlpha" operator="out"/>
              <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1036_2828"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1036_2828" result="shape"/>
              </filter>
              <linearGradient id="paint0_linear_1036_2828" x1="36.1698" y1="116.684" x2="61.5232" y2="125.796" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529"/>
              <stop offset="1" stop-color="#343A40"/>
              </linearGradient>
              <linearGradient id="paint1_linear_1036_2828" x1="56.2809" y1="100.951" x2="81.6343" y2="110.062" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529"/>
              <stop offset="1" stop-color="#343A40"/>
              </linearGradient>
              <linearGradient id="paint2_linear_1036_2828" x1="82.0696" y1="113.195" x2="107.423" y2="122.307" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529"/>
              <stop offset="1" stop-color="#343A40"/>
              </linearGradient>
              <linearGradient id="paint3_linear_1036_2828" x1="124.036" y1="104.679" x2="149.39" y2="113.79" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529"/>
              <stop offset="1" stop-color="#343A40"/>
              </linearGradient>
              <linearGradient id="paint4_linear_1036_2828" x1="143.012" y1="83.35" x2="168.365" y2="92.4617" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529"/>
              <stop offset="1" stop-color="#343A40"/>
              </linearGradient>
              <linearGradient id="paint5_linear_1036_2828" x1="182.181" y1="75.4013" x2="207.534" y2="84.5131" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529"/>
              <stop offset="1" stop-color="#343A40"/>
              </linearGradient>
              <linearGradient id="paint6_linear_1036_2828" x1="167.402" y1="95.8784" x2="192.755" y2="104.99" gradientUnits="userSpaceOnUse">
              <stop stop-color="#212529"/>
              <stop offset="1" stop-color="#343A40"/>
              </linearGradient>
              <clipPath id="clip0_1036_2828">
              <rect x="33" y="59.0914" width="151.304" height="228.384" rx="7.137" transform="rotate(-11.4715 33 59.0914)" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
        <div class="relative w-full max-w-[393px] bg-white pt-[65px] px-[44px] flex flex-col border border-gray100 transition-all duration-200  min-h-[475px] max-md:min-h-full max-sm:pt-[40px] max-sm:px-[30px]">
          <h2 class="text-gray900 font-sans text-[22px] font-bold leading-6 pb-5 max-sm:text-[20px]">Car assurance for your family</h2>
          <p class="text-gray900 font-sans text-[18px] font-normal leading-6 pb-[40px] max-lg:text-[16px]">Whether you're looking to protect your family, your business, or your personal assets.</p>
          <div class="absolute right-0 bottom-0 max-md:hidden">
            <svg width="257" height="221" viewBox="0 0 257 221" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_1036_2813)">
              <g clip-path="url(#clip0_1036_2813)">
              <rect x="33" y="58.7952" width="150.935" height="227.827" rx="7.11959" transform="rotate(-11.3852 33 58.7952)" fill="#C2EDF6"/>
              <path d="M131.322 156.899C131.322 156.899 129.3 151.129 128.005 147.432M118.498 120.294C114.888 113.665 109.254 103.321 109.254 103.321M118.498 120.294C117.447 114.431 117.376 110.946 118.187 105.045C118.968 99.3691 122.35 90.9766 122.35 90.9766C122.35 90.9766 123.603 100.726 122.674 106.861C121.851 112.292 120.9 115.353 118.498 120.294ZM118.498 120.294C118.498 120.294 124.293 136.834 128.005 147.432M100.009 86.3471C100.009 86.3471 96.3006 78.5707 92.7736 74.4178C89.1314 70.1292 81.7781 65.1076 81.7781 65.1076C81.7781 65.1076 83.9813 73.0255 87.1071 77.0758C90.8978 81.9876 100.009 86.3471 100.009 86.3471ZM100.009 86.3471L109.254 103.321M109.254 103.321C109.254 103.321 102.86 99.3451 98.3358 97.8225C93.0762 96.0526 84.306 95.5661 84.306 95.5661C84.306 95.5661 89.8171 101.911 94.6402 103.618C100.021 105.523 109.254 103.321 109.254 103.321ZM128.005 147.432C121.855 144.579 112.256 140.126 112.256 140.126M96.5068 132.819C96.5068 132.819 88.6549 127.8 83.0217 126.102C79.6196 125.077 74.0878 124.378 74.0878 124.378C74.0878 124.378 79.5885 130.753 84.422 132.43C88.8829 133.978 96.5068 132.819 96.5068 132.819ZM96.5068 132.819L112.256 140.126M112.256 140.126C112.256 140.126 103.862 141.985 99.2944 144.839C95.7104 147.079 91.1772 151.997 91.1772 151.997C91.1772 151.997 99.8772 150.835 104.442 147.912C108.07 145.59 112.256 140.126 112.256 140.126ZM126.524 139.835C126.524 139.835 128.119 136.144 129.584 134.052C132.831 129.417 140.84 124.923 140.84 124.923C140.84 124.923 138.148 132.057 134.693 135.219C131.99 137.693 126.524 139.835 126.524 139.835ZM108.057 138.178C108.057 138.178 107.156 130.29 105.259 125.649C103.408 121.118 98.6856 114.977 98.6856 114.977C98.6856 114.977 98.7092 122.144 100.189 126.388C102.012 131.614 108.057 138.178 108.057 138.178Z" stroke="#09384D" stroke-width="1.27099"/>
              <rect x="56.8827" y="170.186" width="148.087" height="113.913" transform="rotate(-11.3852 56.8827 170.186)" fill="#007094"/>
              </g>
              <rect x="33.8385" y="59.3526" width="149.511" height="226.403" rx="6.40763" transform="rotate(-11.3852 33.8385 59.3526)" stroke="white" stroke-width="1.42392" shape-rendering="crispEdges"/>
              </g>
              <defs>
              <filter id="filter0_d_1036_2813" x="-1" y="-1" width="260.939" height="321.139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset dy="4"/>
              <feGaussianBlur stdDeviation="17"/>
              <feComposite in2="hardAlpha" operator="out"/>
              <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1036_2813"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1036_2813" result="shape"/>
              </filter>
              <clipPath id="clip0_1036_2813">
              <rect x="33" y="58.7952" width="150.935" height="227.827" rx="7.11959" transform="rotate(-11.3852 33 58.7952)" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
        <div class="relative w-full max-w-[393px] bg-white pt-[65px] px-[44px] flex flex-col border border-gray100 transition-all duration-200  min-h-[475px] max-md:min-h-full max-sm:pt-[40px] max-sm:px-[30px]">
          <h2 class="text-gray900 font-sans text-[22px] font-bold leading-6 pb-5 max-sm:text-[20px]">Competitive Edge in the industry</h2>
          <p class="text-gray900 font-sans text-[18px] font-normal leading-6 pb-[40px] max-lg:text-[16px]">We work with a variety of trusted providers to ensure you the best coverage.</p>
          <div class="absolute right-0 bottom-0 max-md:hidden">
            <svg width="257" height="224" viewBox="0 0 257 224" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_1036_2821)">
              <g clip-path="url(#clip0_1036_2821)">
              <rect x="33" y="58.5319" width="151.377" height="228.493" rx="7.14041" transform="rotate(-11.2499 33 58.5319)" fill="#FFC700" fill-opacity="0.23"/>
              <rect x="140.849" y="37.0795" width="31.4178" height="228.493" transform="rotate(-11.2499 140.849 37.0795)" fill="#1E1E1E"/>
              </g>
              <rect x="33.8396" y="59.0929" width="149.949" height="227.065" rx="6.42637" transform="rotate(-11.2499 33.8396 59.0929)" stroke="white" stroke-width="1.42808" shape-rendering="crispEdges"/>
              </g>
              <defs>
              <filter id="filter0_d_1036_2821" x="-1" y="-1" width="261.044" height="321.635" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset dy="4"/>
              <feGaussianBlur stdDeviation="17"/>
              <feComposite in2="hardAlpha" operator="out"/>
              <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1036_2821"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1036_2821" result="shape"/>
              </filter>
              <clipPath id="clip0_1036_2821">
              <rect x="33" y="58.5319" width="151.377" height="228.493" rx="7.14041" transform="rotate(-11.2499 33 58.5319)" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
      </ul>
    </section> 
  </div>

  <!-- Secondary Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="pt-[100px] max-sm:pt-[30px] max-md:pt-[40px] flex flex-row justify-between items-center gap-[20px] max-lg:flex-col max-lg:justify-center">
      <div class="w-full max-w-[520px]">
        <img src="<?php the_field('image_section_right_page_about_us') ?>" alt="" class="object-cover w-full">
      </div>
      <div class="w-full max-w-[592px] max-lg:max-w-full max-lg:text-center">
        <span class="font-sans uppercase text-gray700 tracking-wider pb-[10px] max-sm:text-sm max-md:text-md"><?php the_field('subtitle_section_right_page_about_us') ?></span>
        <h2 class="font-sans text-gray900 pb-[25px] text-[40px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px]"><?php the_field('title_section_right_page_about_us') ?></h2>
        <div class="content-text">
          <?php the_field('content_section_right_page_about_us') ?>
        </div>
      </div>
    </section>
  </div>

  <!-- Companies -->
  <div class="w-full py-[100px] max-sm:py-[40px] max-lg:py-[60px]">
    <div class="w-full max-w-[1246px] mx-auto px-[15px] border-y-2 py-[100px] max-sm:py-[40px] max-md:py-[60px]">
      <div class="w-full flex gap-[80px] justify-center items-center flex-col max-md:gap-[40px] max-sm:py-[40px]">
        <ul class="flex justify-between items-center gap-[100px] max-lg:gap-[60px] max-md:flex-col max-md:gap-[40px]">
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-staveley.svg" alt="" class="object-cover w-full max-w-[223px] max-h-[94px] max-sm:max-w-[180px] max-sm:max-h-[50px]">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-comparehgv.svg" alt="" class="object-cover w-full max-w-[223px] max-h-[94px] max-sm:max-w-[180px] max-sm:max-h-[50px]">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-onesure.svg" alt="" class="object-cover w-full max-w-[223px] max-h-[94px] max-sm:max-w-[180px] max-sm:max-h-[50px]">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-tradewise.svg" alt="" class="object-cover w-full max-w-[223px] max-h-[94px] max-sm:max-w-[180px] max-sm:max-h-[50px]">
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo get_template_directory_uri()?>/assets/logo-unicom.svg" alt="" class="object-cover w-full max-w-[223px] max-h-[94px] max-sm:max-w-[180px] max-sm:max-h-[50px]">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Primary Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="pb-[100px] max-sm:pb-[30px] max-md:pb-[60px] max-lg:pb-[60px] flex flex-row justify-between items-center gap-[20px] max-lg:flex-col max-lg:justify-center">
      <div class="w-full max-w-[592px] max-lg:max-w-full max-lg:text-center">
        <span class="font-sans uppercase text-gray700 tracking-wider pb-[10px] max-sm:text-sm max-md:text-md"><?php the_field('subtitle_section_left_page_about_us') ?></span>
        <h2 class="font-sans text-gray900 pb-[25px] text-[40px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px]"><?php the_field('title_section_left_page_about_us') ?></h2>
        <div class="content-text">
          <?php the_field('content_section_left_page_about_us') ?>
        </div>
        <!-- Get a Quote CTA Button -->
        <a href="<?php the_field('link_button_section_right_page_about_us') ?>" class="max-w-[240px] mt-[30px] max-sm:mt-[20px] px-[50px] py-3 border border-darkRed rounded-md bg-transparent text-center text-darkRed font-sans font-medium ease-in-out duration-200 uppercase hover:bg-darkRed hover:text-white js-cta-button flex items-center justify-center gap-3">
          <span><?php the_field('text_button_section_right_page_about_us') ?></span>
          <i class="ph-bold ph-arrow-right font-semibold text-[16px]"></i>
        </a>
      </div>
      <div class="w-full max-w-[520px]">
        <img src="<?php the_field('image_section_left_page_about_us') ?>" alt="" class="object-cover w-full">
      </div>
    </section>
  </div>
  
  <!-- CTA 03 -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section>
      <div class="mx-auto max-w-screen-2xl px-4 pb-[100px] max-sm:pb-[30px] max-lg:pb-[60px] sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
          <div class="bg-lightYellow border border-darkYellow rounded-md p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
                <?php the_field('title_cta_page_about_us') ?>
              </h2>
              <p class="hidden text-gray700 sm:mt-4 sm:block">
                <?php the_field('subtitle_cta_page_about_us') ?>
              </p>
              <div class="mt-4 md:mt-8">
                <!-- Get a Quote CTA Button -->
                <button class="px-[50px] py-3 inline-block border border-darkRed rounded-md bg-darkRed text-center text-white font-sans font-medium ease-in-out duration-200 uppercase hover:brightness-90 js-cta-button" id="js-cta-button">
                  <span>Get a Quote</span>
                </button>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4 lg:grid-cols-2">
            <img
              alt="" title=""
              src="<?php the_field('image01_page_about_us') ?>"
              class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm"
            />
            <img
              alt="" title=""
              src="<?php the_field('image02_page_about_us') ?>"
              class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm"
            />
          </div>
        </div>
      </div>
    </section>
  </div>

<?php endwhile; else: endif; ?>
<!-- Include Footer -->
<?php get_footer(); ?> 