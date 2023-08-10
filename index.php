<?php
  // Template name: Home
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

  <!-- Section Hero Insurance Pages -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="flex justify-between items-start flex-row max-lg:flex-col max-lg:items-center max-lg:text-center max-lg:justify-center gap-[20px]  max-lg:gap-[40px] pb-[140px] max-sm:pb-[60px] max-lg:pb-[80px]">
      <div class="w-full max-w-[625px] max-lg:max-w-full flex flex-col items-start justify-start max-lg:justify-center max-lg:items-center pt-[90px] max-sm:pt-[30px] max-lg:pt-[60px]">
        <span class="block font-sans uppercase text-gray700 tracking-wider pb-[0px] max-sm:text-sm max-md:text-[16px] max-lg:py-[10px]"><?php the_field('subtitle_hero_page_home') ?></span>
        <h2 class="font-sans text-gray900 pb-[30px] text-[50px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px] tracking-wider leading-[60px]">
          <?php the_field('title_hero_page_home') ?>
        </h2>
        <p class="w-full max-w-[480px] text-[18px] font-sans font-normal tracking-[0.18px] leading-[25px] max-lg:text-[16px] text-gray900"><?php the_field('paragraph_hero_page_home') ?></p>
        <ul class="my-[35px] max-sm:my-[15px] max-lg:my-[25px]">
          <!-- Repeater -->
          <?php if( have_rows('bullet_list_hero_page_home') ): while ( have_rows('bullet_list_hero_page_home') ) : the_row(); ?>
            <li class="flex justify-start items-center gap-[15px] mb-[10px] text-[17px] max-sm:items-start max-sm:justify-start max-sm:gap-4 max-lg:text-[16px]">
              <i class="ph-bold ph-check text-[18px] max-lg:text-[17px] max-sm:mt-1"></i>
              <p class="font-sans text-gray900 tracking-[0.18px] max-sm:text-left"><?php the_sub_field('content_bullet_list') ?></p>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
        <!-- Get a Quote CTA Button -->
        <button class="px-[50px] py-3 border border-darkRed rounded-md bg-transparent text-center text-darkRed font-sans font-medium ease-in-out duration-200 uppercase hover:bg-darkRed hover:text-white js-cta-button flex items-center justify-center gap-3" id="js-cta-button">
          <span>Get a Quote</span>
          <i class="ph-bold ph-arrow-right font-semibold text-[16px]"></i>
        </button>
      </div>
      <div class="w-full max-w-[564px] flex flex-col gap-[25px] pt-[170px] max-lg:pt-[0px] max-lg:max-w-[400px]">
        <!-- Right Div -->
          <img src="<?php echo get_template_directory_uri()?>/assets/bg-home-hero.svg" alt="" class="absolute right-0 top-[116px] z-[-20] max-lg:hidden">
          <img src="<?php echo get_template_directory_uri()?>/assets/car-hero-image.svg" alt="car audi image" title="car audi image" class="absolute right-[44px] top-[260px] w-max-[564px] h-max-[302px] max-lg:relative max-lg:right-auto max-lg:top-auto max-lg:max-w-[400px] max-lg:mt-[20px]">
      </div>
    </section>
  </div>

  <!-- Trustpilot -->
  <div class="">
    <div class="w-full max-w-[1246px] mx-auto px-[15px] pb-[150px] max-sm:pb-[40px] max-md:pb-[60px] ">
      <div class="">
        <h2 class="font-sans text-center text-[40px] pb-[15px] text-gray900 font-normal max-md:pb-[10px] max-sm:text-[26px] max-md:text-[28px]"><?php the_field('title_trustpilot_page_home') ?></h2>
        <p class="font-sans text-center text-[18px] text-gray700 font-normal max-sm:text-[16px]"><?php the_field('subtitle_trustpilot_page_home') ?></p>
      </div>
      <div class="flex items-center justify-center mt-[50px] max-sm:mt-[30px]">
        <p>trustpilot widget</p>
      </div>
    </div>
  </div>
  
  <!-- Section Insurance Types -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px] pb-[100px]" id="insurance-types">
    <section>
      <div class="flex items-center justify-between max-md:flex-col max-md:items-center max-md:justify-center max-md:gap-[20px]">
        <div>
          <span class="font-sans block uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md max-md:text-center"><?php the_field('subtitle_services_page_home') ?></span>
          <h2 class="font-sans text-gray900 text-[40px] max-sm:text-[26px] max-md:text-center max-md:text-[28px] max-lg:text-[30px]"><?php the_field('title_services_page_home') ?></h2>
        </div>
        <!-- View All Insurance Button -->
        <button class="px-8 py-3 inline-block border border-darkRed rounded-lg bg-darkRed text-center text-white font-sans font-medium ease-in-out duration-200 hover:text-darkRed hover:bg-transparent">
          <span>View All Insurance</span>
        </button>
      </div>
      <div class="pt-[60px] max-sm:pt-[30px] max-md:pt-[40px]">
        <ul class="grid grid-cols-4 gap-[32px] max-sm:grid-cols-1 max-sm:items-center justify-items-center max-sm:gap-[20px] max-lg:grid-cols-2 m">
          <!-- Repeater -->
          <?php if( have_rows('card_services_page_home') ): while ( have_rows('card_services_page_home') ) : the_row(); ?>
            <li>
              <a href="<?php the_sub_field('card_link_services_repeater_page_home') ?>" class="relative overflow-hidden rounded-lg border w-full max-w-[280px] flex items-center justify-center flex-col text-center ease-in-out duration-200 hover:border-lightRed">
                <img src="<?php the_sub_field('card_image_services_repeater_page_home') ?>" class="pb-[20px] object-cover w-full rounded-lg max-h-[250px] max-sm:max-h-[200px] max-lg:min-w-0"> 
                <div class="px-[28px] flex items-center justify-center flex-col text-center">
                  <h2 class="font-sans text-gray900 text-[22px] pb-[15px] max-sm:text-[18px] max-lg:text-[20px]"><?php the_sub_field('card_title_services_repeater_page_home') ?></h2>
                  <p class="font-sans pb-[15px] text-gray700 text-[18px] max-sm:text-[16px] max-lg:text-[18px]"><?php the_sub_field('card_subtitle_services_repeater_page_home') ?></p>
                  <div class="self-end mr-[-38px] mb-[-5px]">
                    <div class="rounded-[50px] bg-gray100 w-full max-w-[85px] h-full max-h-[85px] py-[20px] px-[26px] flex items-center justify-center ease-in-out duration-200 hover:bg-lightRed hover:text-white">
                      <i class="ph-bold ph-arrow-right text-[24px]"></i>
                    </div>
                  </div>
                </div>
              </a>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
      </div>
    </section>
  </div>

  <!-- Why Us Section -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]  border-y">
    <section class="py-[100px] max-sm:py-[30px] max-lg:py-[60px] flex justify-between items-start gap-[20px] max-lg:flex-col-reverse max-lg:items-center">
      <div class="w-full max-w-[537px] flex flex-col gap-[15px]">
        <!-- Yellow Card -->
        <div class="flex flex-row justify-between items-end max-sm:flex-col max-sm:items-center max-sm:justify-center">
          <img src="<?php echo get_template_directory_uri()?>/assets/square-shape-left.svg" alt="square left" title="square left" class="w-full max-w-[112px] max-sm:hidden">
          <div class="w-full max-w-[305px] h-full max-h-[203px] p-[38px] bg-cardYellow border border-darkYellow rounded-tr-[32px] rounded-bl-[32px] max-md:p-[20px]">
            <h2 class="w-full max-w-[242px] font-sans font-medium text-[30px] text-darkYellow mb-[15px] max-md:text-[26px] max-md:text-left max-md:mb-[5px]"><?php the_field('yellow_card_title_why_us_page_home') ?></h2>
            <p class="font-sans text-gray900 text-[18px] max-md:text-left"><?php the_field('yellow_card_subtitle_why_us_page_home') ?></p>
          </div>
        </div>
        <div class="mt-[40px] flex flex-row justify-between max-lg:mt-[20px] max-md:gap-[20px] max-sm:flex-col max-sm:items-center max-sm:justify-center max-sm:mt-[0px] max-sm:gap-[15px]">
          <div class="relative">
            <!-- Red Card -->
            <div class="w-full max-w-[293px] h-full max-h-[280px] bg-cardRed border border-darkRed rounded-tr-[32px] px-[38px] py-[54px] rounded-bl-[32px] max-md:px-[20px] max-md:py-[20px] max-md:h-auto">
              <h2 class="w-full max-w-[195px] font-sans font-medium text-[30px] text-darkRed mb-[15px] max-md:text-[26px] max-md:text-left max-md:mb-[5px]">
                <?php the_field('red_card_title_why_us_page_home') ?>
              </h2>
              <p class="font-sans text-gray900 text-[18px] max-md:text-left"><?php the_field('red_card_subtitle_why_us_page_home') ?></p>
            </div>
            <img src="<?php echo get_template_directory_uri()?>/assets/icon-left-surprise.svg" alt="icon left" title="icon left" class="absolute left-[-35px] bottom-[-40px] max-md:hidden">
          </div>
          <div class="flex flex-col items-end justify-end">
            <!-- Blue Card -->
            <div class="w-full max-w-[195px] h-full max-h-[196px] bg-cardBlue border border-darkBlue rounded-tr-[32px] px-[30px] py-[32px] rounded-bl-[32px] max-md:px-[25px] max-md:py-[25px] max-md:h-auto">
              <h2 class="w-full font-sans font-medium text-[30px] text-darkBlue  mb-[15px] max-md:text-[26px] max-md:text-left max-md:mb-[5px]"><?php the_field('blue_card_title_why_us_page_home') ?></h2>
              <p class="font-sans text-gray900 text-[18px] max-md:text-left"><?php the_field('blue_card_subtitle_why_us_page_home') ?></p>
            </div>
            <img src="<?php echo get_template_directory_uri()?>/assets/square-shape-right.svg" class="object-cover max-md:hidden" alt="square right" title="square right">
          </div>
        </div>
      </div>
      <div class="w-full max-w-[584px] max-md:max-w-full">
        <div>
          <span class="font-sans block uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md max-md:text-center"><?php the_field('subtitle_why_us_page_home') ?></span>
          <h2 class="font-sans text-gray900 text-[40px] max-sm:text-[26px] max-md:text-center max-md:text-[28px] max-lg:text-[30px]"><?php the_field('title_why_us_page_home') ?></h2>
        </div>
        <div class="mt-[40px] max-sm:mt-[20px] max-md:mt-[30px]">
          <div class="space-y-4">
            <!-- Repeater -->
            <?php if( have_rows('repeater_why_us_page_home') ): while ( have_rows('repeater_why_us_page_home') ) : the_row(); ?>
              <details class="group [&_summary::-webkit-details-marker]:hidden" >
                <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray100 p-5 text-gray900 max-sm:p-4">
                  <h2 class="font-medium font-sans text-gray900 text-[18px] max-sm:text-[16px]">
                    <?php the_sub_field('title_items_why_us_page_home') ?>
                  </h2>
                  <svg
                    class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M19 9l-7 7-7-7"
                    />
                  </svg>
                </summary>
                <p class="mt-4 px-4 leading-relaxed text-gray700 font-sans">
                  <?php the_sub_field('content_items_why_us_page_home') ?>
                </p>
              </details>
            <?php endwhile; else : endif;?>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Primary Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="py-[100px] max-sm:py-[30px] max-md:py-[60px] max-lg:py-[60px] flex flex-row justify-between items-center gap-[20px] max-lg:flex-col max-lg:justify-center">
      <div class="w-full max-w-[592px] max-lg:max-w-full">
        <span class="font-sans uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md"><?php the_field('subtitle_section_left_page_home') ?></span>
        <h2 class="font-sans text-gray900 pb-[25px] text-[40px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px]"><?php the_field('title_section_left_page_home') ?></h2>
        <div class="content-text">
          <?php the_field('content_section_left_page_home') ?>
        </div>
      </div>
      <div class="w-full max-w-[520px]">
        <img src="<?php the_field('image_section_left_page_home') ?>" alt="" class="object-cover w-full">
      </div>
    </section>
  </div>

  <!-- Secondary Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="pb-[100px] max-sm:pb-[30px] max-md:pb-[40px] flex flex-row justify-between items-center gap-[20px] max-lg:flex-col max-lg:justify-center">
      <div class="w-full max-w-[520px]">
        <img src="<?php the_field('image_section_right_page_home') ?>" alt="" class="object-cover w-full">
      </div>
      <div class="w-full max-w-[592px] max-lg:max-w-full">
        <span class="font-sans uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md"><?php the_field('subtitle_section_right_page_home') ?></span>
        <h2 class="font-sans text-gray900 pb-[25px] text-[40px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px]"><?php the_field('title_section_right_page_home') ?></h2>
        <div class="content-text">
          <?php the_field('content_section_right_page_home') ?>
        </div>
      </div>
    </section>
  </div>

  <!-- CTA 03 -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section>
      <div class="mx-auto max-w-screen-2xl px-4 pb-[100px] max-sm:pb-[30px] max-lg:pb-[60px] sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
          <div class="grid grid-cols-2 gap-4 lg:grid-cols-2">
            <img
              alt="" title=""
              src="<?php the_field('image01_page_home') ?>"
              class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm"
            />
            <img
              alt="" title=""
              src="<?php the_field('image02_page_home') ?>"
              class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm"
            />
          </div>
          <div class="bg-lightYellow border border-darkYellow rounded-md p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
                <?php the_field('title_cta_page_home') ?>
              </h2>
              <p class="hidden text-gray700 sm:mt-4 sm:block">
                <?php the_field('subtitle_cta_page_home') ?>
              </p>
              <div class="mt-4 md:mt-8">
                <!-- Get a Quote CTA Button -->
                <button class="px-[50px] py-3 inline-block border border-darkRed rounded-md bg-darkRed text-center text-white font-sans font-medium ease-in-out duration-200 uppercase hover:brightness-90 js-cta-button" id="js-cta-button">
                  <span>Get a Quote</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php endwhile; else: endif; ?>
<!-- Include Footer -->
<?php get_footer(); ?> 