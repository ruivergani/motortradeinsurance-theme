<?php
  // Template name: car-traders-insurance
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
            <button
              class="cursor-pointer absolute end-2 top-2 rounded-full border border-gray-300 bg-gray-100 p-2 js-close">
              <span class="sr-only">Close</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <form id="merlin-dialler-form" action="" method="post"
              class="w-full bg-white rounded-lg shadow-xl px-[40px] pt-[45px] pb-[50px] flex flex-col items-center justify-center border-[1px] border-gray-100 max-sm:px-[25px]">
              <h2 class="font-sans text-[22px] text-gray900 font-bold mb-[20px] text-center max-sm:text-[18px]">Find out
                how much you can save. Complete the form to get a quote.</h2>
              <p class="font-sans text-gray700 max-sm:text-[16px]">Our friendly team is always on hand to help!</p>
              <div class="my-[30px] flex items-center justify-center gap-[20px] flex-col">
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required
                  class="w-full border rounded-lg border-gray200 p-4 text-sm shadow-sm">
                <input type="text" name="surname" id="surname" placeholder="Enter Your Surname" required
                  class="w-full border rounded-lg border-gray200 p-4 text-sm shadow-sm">
                <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number"
                  class="w-full border rounded-lg border-gray200 p-4 text-sm shadow-sm">
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
              <button id="dailer-submit-btn" type="submit"
                class="w-full max-w-[309px] border rounded-lg bg-darkRed text-center text-white font-sans font-semibold py-3  ease-in-out duration-200 hover:brightness-90 flex items-center justify-center gap-[10px]">
                <span>Next Steps</span>
                <i class="ph-bold ph-arrow-right font-semibold text-[16px]"></i>
                <div class="lds-ring">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Hero Insurance Pages -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="flex justify-between items-center flex-row max-lg:flex-col max-lg:items-center max-lg:text-center max-lg:justify-center py-[80px] gap-[20px]  max-sm:py-[40px] max-md:py-[60px] max-lg:gap-[40px]">
      <div class="w-full max-w-[584px] max-lg:max-w-full flex flex-col items-start justify-start max-lg:justify-center max-lg:items-center">
        <span class="block font-sans uppercase text-gray700 tracking-wider pb-[20px] max-sm:text-sm max-md:text-md max-lg:py-[10px]"><?php the_field('subtitle_hero_page_car_traders_insurance') ?></span>
        <h2 class="font-sans text-gray900 pb-[25px] text-[56px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px] tracking-wider leading-[60px]">
          <span class="before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-yellow-400 relative inline-block mt-3">
            <span class="relative ">Car Traders</span>
          </span>
          Insurance
        </h2>
        <p class="w-full max-w-[494px] text-[18px] font-sans font-normal tracking-[0.18px] leading-[25px] max-lg:text-[16px]">
          <?php the_field('paragraph_hero_page_car_traders_insurance') ?>
        </p>
        <ul class="my-[35px] max-sm:my-[15px] max-lg:my-[25px]">
          <!-- Repeater -->
          <?php if( have_rows('bullet_list_hero_page_car_traders_insurance') ): while ( have_rows('bullet_list_hero_page_car_traders_insurance') ) : the_row(); ?>
            <li class="flex justify-start items-center gap-[15px] mb-[10px] text-[17px] max-sm:items-start max-sm:justify-start max-sm:gap-4 max-lg:text-[16px]">
              <i class="ph-bold ph-check text-[18px] max-lg:text-[17px] max-sm:mt-1"></i>
              <p class="font-sans tracking-[0.18px] max-sm:text-left"><?php the_sub_field('content_bullet_list_page_car_traders_insurance') ?></p>
            </li>
          <?php endwhile; else : endif;?>
        </ul>
        <!-- Get a Quote CTA Button -->
        <button
          class="px-[50px] py-3 flex items-center justify-center gap-3 border border-darkRed rounded-md bg-darkRed text-center text-white font-sans font-medium ease-in-out duration-200 uppercase hover:brightness-90  js-cta-button"
          id="js-cta-button">
          <span>Get a Quote</span>
          <i class="ph-bold ph-arrow-right font-semibold text-[18px]"></i>
        </button>
      </div>
      <div class="w-full max-w-[540px] flex flex-col max-sm:flex-col-reverse max-lg:gap-[15px]">
        <!-- Yellow Card -->
        <div class="flex flex-row justify-between items-end max-sm:flex-col max-sm:items-center max-sm:justify-center">
          <img src="<?php echo get_template_directory_uri() ?>/assets/square-shape-left.svg" alt="square left" title="square left" class="w-full max-w-[112px] max-sm:hidden">
          <div class="w-full max-w-[305px] h-full max-h-[203px] p-[38px] bg-cardYellow border border-darkYellow rounded-tr-[32px] rounded-bl-[32px] max-md:p-[20px]">
            <h2 class="w-full max-w-[242px] font-sans font-medium text-[30px] text-darkYellow mb-[15px] max-md:text-[26px] max-md:text-left max-md:mb-[5px]">
              <?php the_field('yellow_card_title_why_us_page_car_traders_insurance') ?>
            </h2>
            <p class="font-sans text-gray900 text-[18px] max-md:text-left"><?php the_field('yellow_card_subtitle_why_us_page_car_traders_insurance') ?></p>
          </div>
        </div>
        <div class="mt-[40px] flex flex-row justify-between max-lg:mt-[20px] gap-[30px] max-md:gap-[20px] max-sm:flex-col max-sm:items-center max-sm:justify-center max-sm:mt-[0px] max-sm:gap-[15px]">
          <div class="relative">
            <!-- Red Card -->
            <div class="w-full max-w-[336px] h-full max-h-[310px] border rounded-tr-[32px] rounded-bl-[32px] max-md:h-auto">
              <img src="<?php the_field('image_card_title_why_us_page_car_traders_insurance') ?>" alt="" class="object-cover h-full rounded-tr-[32px] rounded-bl-[32px]">
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/icon-left-surprise.svg" alt="icon left" title="icon left" class="absolute left-[-35px] bottom-[-40px] max-md:hidden">
          </div>
          <div class="flex flex-col items-end justify-end">
            <!-- Blue Card -->
            <div class="w-full max-w-[195px] h-full max-h-[196px] bg-cardBlue border border-darkBlue rounded-tr-[32px] px-[30px] py-[32px] rounded-bl-[32px] max-md:px-[25px] max-md:py-[25px] max-md:h-auto">
              <h2 class="w-full font-sans font-medium text-[30px] text-darkBlue  mb-[15px] max-md:text-[26px] max-md:text-left max-md:mb-[5px]">
                <?php the_field('blue_card_title_why_us_page_car_traders_insurance') ?>
              </h2>
              <p class="font-sans text-gray900 text-[18px] max-md:text-left"><?php the_field('blue_card_subtitle_why_us_page_car_traders_insurance') ?></p>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/square-shape-right.svg" class="object-cover max-md:hidden" alt="square right" title="square right">
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Why Us Section -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="py-[100px] max-sm:py-[30px] max-lg:py-[60px] flex justify-between items-start gap-[20px] max-md:flex-col-reverse">
      <div class="flex gap-[30px] max-sm:gap-[20px] flex-col w-full max-w-[559px] max-md:max-w-full">
        <img src="<?php the_field('image_why_us_page_car_traders_insurance') ?>" alt="" class="object-cover w-full max-w-[559px] max-md:max-w-full max-h-[380px] rounded">
        <span class="font-sans text-gray700 text-sm max-md:text-center"><?php the_field('terms_conditions_why_us_page_car_traders_insurance') ?></span>
      </div>
      <div class="w-full max-w-[584px] max-md:max-w-full">
        <div>
          <span class="font-sans block uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md max-md:text-center">
            <?php the_field('subtitle_why_us_page_car_traders_insurance') ?>
          </span>
          <h2 class="font-sans text-gray900 text-[40px] max-sm:text-[26px] max-md:text-center max-md:text-[28px] max-lg:text-[30px]">
            <?php the_field('title_why_us_page_car_traders_insurance') ?>
          </h2>
        </div>
        <div class="mt-[40px] max-sm:mt-[20px] max-md:mt-[30px]">
          <div class="space-y-4">
            <!-- Repeater -->
            <?php if( have_rows('repeater_why_us_page_car_traders_insurance') ): while ( have_rows('repeater_why_us_page_car_traders_insurance') ) : the_row(); ?>
              <details class="group [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg bg-gray100 p-5 text-gray900 max-sm:p-4">
                  <h2 class="font-medium font-sans text-gray900 text-[18px] max-sm:text-[16px]">
                    <?php the_sub_field('title_items_why_us_page_car_traders_insurance') ?>
                  </h2>
                  <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </summary>
                <div class="mt-4 px-4 leading-relaxed text-gray700 font-sans">
                  <?php the_sub_field('content_items_why_us_page_car_traders_insurance') ?>
                </div>
              </details>
            <?php endwhile; else : endif;?>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- CTA Black -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <div
      class="w-full flex justify-between items-center py-[50px] px-[72px] max-md:flex-col max-md:gap-5 max-md:py-[20px] max-md:px-[20px] bg-gray900 rounded-[30px]">
      <div class="max-md:flex max-md:text-center max-md:justify-center max-md:flex-col">
        <span class="font-sans uppercase font-semibold text-[14px] text-lightRed mb-[5px] max-md:text-center"><?php the_field('subtitle_black_cta_page_car_traders_insurance') ?></span>
        <h2 class="font-sans font-bold text-[32px] text-white max-sm:text-[26px] max-md:text-[28px] max-md:text-center">
          <?php the_field('title_black_cta_page_car_traders_insurance') ?>
        </h2>
      </div>
      <button
        class="w-full max-w-[171px] inline-block border rounded-[28px] border-darkRed bg-darkRed px-8 py-3 font-sans text-center text-[16px] text-white antialiased font-medium uppercase hover:bg-white hover:border-white hover:text-lightRed focus:outline-none focus:ring active:text-darkRed ease-in-out duration-200 js-cta-button"
        id="js-cta-button">
        <span>Get a Quote</span>
      </button>
    </div>
  </div>

  <!-- Primary Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="py-[100px] max-sm:py-[30px] max-md:py-[60px] max-lg:py-[60px] flex flex-row justify-between items-center gap-[20px] max-lg:flex-col max-lg:justify-center">
      <div class="w-full max-w-[592px] max-lg:max-w-full max-md:text-center">
        <span class="font-sans uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md"><?php the_field('subtitle_section_left_page_car_traders_insurance') ?></span>
        <h2 class="font-sans text-gray900 pb-[25px] text-[40px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px]">
          <?php the_field('title_section_left_page_car_traders_insurance') ?>
        </h2>
        <div class="content-text">
          <?php the_field('content_section_left_page_car_traders_insurance') ?>
        </div>
      </div>
      <div class="w-full max-w-[520px]">
        <img src="<?php the_field('image_section_left_page_car_traders_insurance') ?>" alt="" class="object-cover w-full rounded-md min-h-[300px] max-md:min-h-full">
      </div>
    </section>
  </div>

  <!-- Secondary Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="pb-[100px] max-sm:pb-[30px] max-md:pb-[40px] flex flex-row justify-between items-center gap-[20px] max-lg:flex-col max-lg:justify-center max-md:text-center">
      <div class="w-full max-w-[520px]">
        <img src="<?php the_field('image_section_right_page_car_traders_insurance') ?>" alt="" class="object-cover w-full rounded-md rounded-md min-h-[300px] max-md:min-h-full">
      </div>
      <div class="w-full max-w-[592px] max-lg:max-w-full">
        <span class="font-sans uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md"><?php the_field('subtitle_section_right_page_car_traders_insurance') ?></span>
        <h2 class="font-sans text-gray900 pb-[25px] text-[40px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px] max-lg:pb-[15px]">
          <?php the_field('title_section_right_page_car_traders_insurance') ?>
        </h2>
        <div class="content-text">
          <?php the_field('content_section_right_page_car_traders_insurance') ?>
        </div>
      </div>
    </section>
  </div>

  <!-- FAQs -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px] border-y-2">
    <section class="py-[100px] max-sm:py-[30px] max-lg:py-[60px]">
      <div class="flex justify-between items-center mb-[50px] max-sm:mb-[30px] max-lg:mb-[50px] max-md:flex-col max-md:text-center max-md:justify-center max-md:gap-[20px]">
        <div>
          <span class="font-sans uppercase text-gray700 tracking-wider pb-[8px] max-sm:text-sm max-md:text-md"><?php the_field('subtitle_faqs_page_car_traders_insurance') ?></span>
          <h2 class="font-sans text-gray900 text-[40px] max-sm:text-[26px] max-md:text-[28px] max-lg:text-[30px]">
            <?php the_field('title_faqs_page_car_traders_insurance') ?>
          </h2>
        </div>
        <p class="w-full max-w-[400px] max-lg:text-[15px]"><?php the_field('paragraph_right_faqs_page_car_traders_insurance') ?></p>
      </div>
      <div>
        <div class="grid grid-cols-1 gap-[32px]">
          <div class="space-y-4">
            <!-- Repeater -->
            <?php if( have_rows('repeater_faq_page_car_traders_insurance') ): while ( have_rows('repeater_faq_page_car_traders_insurance') ) : the_row(); ?>
              <!-- Each FAQ -->
              <details class="group border-s-4 border-darkRed rounded-md bg-gray-50 p-6 [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                  <h2 class="text-lg font-medium text-gray-900 max-sm:text-[16px] font-sans">
                    <?php the_sub_field('title_faq_page_car_traders_insurance') ?>
                  </h2>
                  <span class="shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3 font-sans">
                    <svg xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                        clip-rule="evenodd" />
                    </svg>
                  </span>
                </summary>
                <div class="mt-4 leading-relaxed text-gray700 font-sans">
                  <?php the_sub_field('content_faq_page_car_traders_insurance') ?>
                </div>
              </details>
            <?php endwhile; else : endif;?>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- CTA 03 -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section>
      <div class="mx-auto max-w-screen-2xl px-4 py-[100px] max-sm:py-[30px] max-lg:py-[60px] sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
          <div class="grid grid-cols-2 gap-4 lg:grid-cols-2">
            <img alt="" title=""
              src="<?php the_field('image01_page_car_traders_insurance') ?>"
              class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
            <img alt="" title=""
              src="<?php the_field('image02_page_car_traders_insurance') ?>"
              class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
          </div>
          <div class="bg-lightYellow border border-darkYellow rounded-md p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
                <?php the_field('title_cta_page_car_traders_insurance') ?>
              </h2>
              <p class="hidden text-gray700 sm:mt-4 sm:block">
                <?php the_field('subtitle_cta_page_car_traders_insurance') ?>
              </p>
              <div class="mt-4 md:mt-8">
                <!-- Get a Quote CTA Button -->
                <button
                  class="px-[50px] py-3 inline-block border border-darkRed rounded-md bg-darkRed text-center text-white font-sans font-medium ease-in-out duration-200 uppercase hover:brightness-90 js-cta-button"
                  id="js-cta-button">
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