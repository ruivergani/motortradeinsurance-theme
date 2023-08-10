<?php
  // Template name: privacy-policy
?>

<!-- Include Header -->
<?php get_header(); ?>

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

  <!-- Breadcrumbs -->
  <?php breadcrumbs(); ?>

  <!-- Text Template Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <div class="pb-[60px] max-sm:pb-[40px] max-md:pb-[60px]">
      <h1 class="font-sans font-medium text-[40px] text-gray900 mb-[20px] max-sm:text-[26px] max-md:text-[28px] max-md:mb-[0px] max-sm:text-center">
        <?php the_field('title_page_privacy_policy') ?>
      </h1>
      <div class="content-text font-sans max-sm:text-center">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <!-- CTA 03 -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section>
      <div class="mx-auto max-w-screen-2xl px-4 pb-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
          <div class="bg-lightYellow border border-darkYellow rounded-md p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center">
              <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
                <?php the_field('title_cta_page_privacy_policy') ?>
              </h2>
              <p class="hidden text-gray700 sm:mt-4 sm:block">
                <?php the_field('subtitle_cta_page_privacy_policy') ?>
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
          <div class="grid grid-cols-2 gap-4 lg:grid-cols-2">
            <img alt="" title="" src="<?php the_field('image01_page_privacy_policy') ?>" class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
            <img alt="" title="" src="<?php the_field('image02_page_privacy_policy') ?>" class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
          </div>
        </div>
      </div>
    </section>
  </div>

<!-- Include Footer -->
<?php get_footer(); ?>