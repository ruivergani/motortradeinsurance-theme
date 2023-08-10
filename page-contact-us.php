<?php
// Template name: contact-us
?>

<!-- Include Header -->
<?php get_header(); ?>

<!-- Breadcrumbs -->
<?php breadcrumbs(); ?>

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

<!-- Contact Us Section -->
<div class="w-full max-w-[1246px] mx-auto px-[15px]">
  <div>
    <h1 class="font-sans font-bold text-gray900 text-[40px] mb-[50px] max-md:mb-[30px] max-sm:text-[26px] max-md:text-[28px] max-sm:text-center max-md:text-center">
    <?php the_title(); ?>
    </h1>
    <!-- Form Section -->
    <section>
      <div class="border border-gray200 rounded-[10px] flex justify-between flex-row items-start max-lg:flex-col-reverse">
        <aside class="relative h-[700px] max-lg:h-[250px] lg:order-last lg:h-full max-lg:w-full ">
          <img alt="Pattern" src="<?php echo get_template_directory_uri()?>/assets/image-07.png" class="h-full w-full object-cover max-h-[700px] rounded-r-[10px] min-h-[700px] max-lg:min-h-[250px] max-lg:max-h-[250px] max-lg:rounded-b-lg max-lg:rounded-tr-[0px]" />
        </aside>
        <main class="py-[60px] px-[70px] w-full max-sm:py-[40px] max-sm:px-[15px] max-w-[770px] max-lg:max-w-full">
          <!-- FORM -->
          <form action="" class="flex flex-col">
            <div class="mb-[30px] grid grid-cols-2 grid-rows-1 gap-[40px] max-md:grid-cols-1 max-md:gap-[20px]">
              <div class="form-group">
                <label for="ref_number">Your Reference Number</label>
                <input type="number" id="ref_number" name="ref_number">
              </div>
              <div class="form-group">
                <label for="ref_name">Name</label>
                <input type="text" id="ref_name" name="ref_name">
              </div>
              <div class="form-group">
                <label for="ref_companyname">Company Name</label>
                <input type="text" id="ref_companyname" name="ref_companyname">
              </div>
              <div class="form-group">
                <label for="ref_landlinephone">Landline Phone Number</label>
                <input type="tel" id="ref_landlinephone" name="ref_landlinephone">
              </div>
              <div class="form-group">
                <label for="ref_mobilephone">Mobile Phone Number</label>
                <input type="tel" id="ref_mobilephone" name="ref_mobilephone">
              </div>
              <div class="form-group">
                <label for="ref_mobilephone">E-mail</label>
                <input type="email" id="ref_mobilephone" name="ref_mobilephone">
              </div>
            </div>
            <div class="message">
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message">
                </textarea>
              </div>
            </div>
            <button type="submit"
              class="cursor-pointer w-full max-w-[300px] inline-block border rounded-lg bg-green-600 text-center text-white font-sans uppercase font-semibold py-3 px-[50px] ease-in-out duration-200 hover:brightness-90 mt-[30px] self-center">
              <span>Submit Details</span>
            </button>
          </form>
        </main>
      </div>
    </section>
  </div>
</div>

<!-- CTA 04 -->
<div class="w-full max-w-[1246px] mx-auto px-[15px] mt-[140px] max-lg:mt-[60px] relative">
  <img src="<?php echo get_template_directory_uri()?>/assets/square-shape.svg" title="square shape" alt="square shape" class="max-lg:hidden block object-cover absolute top-[-70px] left-[-50px] z-0">
  <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 sm:items-center relative z-10">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
        <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
          <?php the_field('first_cta_title_page_contact_us') ?>
        </h2>
        <p class="hidden text-gray700 md:mt-4 md:block">
          <?php the_field('first_cta_subtitle_page_contact_us') ?>
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

    <img alt="" src="<?php the_field('image_cta_subtitle_page_contact_us') ?>" class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-ss-[30px] md:h-[calc(100%_-_4rem)] md:rounded-ss-[60px]" />
  </section>
</div>

<!-- Map Section -->
<div class="w-full max-w-[1246px] mx-auto px-[15px] py-[100px] max-sm:py-[30px] max-md:py-[60px]">
  <section
    class="w-full flex flew-row justify-between max-lg:flex-col-reverse gap-4 max-lg:text-center max-lg:items-center max-lg:justify-center">
    <div class="max-w-[592px]">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9585.25565746301!2d-2.258925!3d53.086597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a5cea868c3f1d%3A0xc4671cbb1fabfb16!2sInsurance%204%20MotorTrade!5e0!3m2!1sen!2suk!4v1691671748097!5m2!1sen!2suk" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="w-full max-w-[527px]">
      <h2 class="font-sans font-semibold text-gray900 mb-[30px] max-sm:mb-[15px] text-[30px] max-sm:text-[26px] max-md:text-[28px]">
        <?php the_field('title_map_page_contact_us') ?>
      </h2>
      <p class="font-sans font-normal text-gray700 mb-[28px] max-w-[190px] max-lg:max-w-full"><?php the_field('address_map_page_contact_us') ?></p>
      <div class="w-full flex justify-between gap-4 max-sm:flex-col">
        <div class="flex flex-col text-center justify-center items-center bg-gray200 w-full py-[15px] bg-opacity-50 rounded-lg">
          <h3 class="font-sans font-bold text-gray900 text-center mb-[6px]">Customer Services</h3>
          <a href="<?php the_field('link_customer_services_number_page_contact_us') ?>" class="font-sans font-semibold text-darkRed text-center hover:underline">
            <?php the_field('customer_services_number_page_contact_us') ?>
          </a>
        </div>
        <div
          class="flex flex-col text-center justify-center items-center bg-gray200 w-full py-[15px] bg-opacity-50 rounded-lg">
          <h3 class="font-sans font-bold text-gray900 text-center mb-[6px]">Sales Number</h3>
          <a href="<?php the_field('link_sales_number_page_contact_us') ?>" class="font-sans font-semibold text-darkRed text-center hover:underline">
            <?php the_field('sales_number_page_contact_us') ?>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Info Section -->
<div class="w-full max-w-[1246px] mx-auto px-[15px]">
  <section class="pb-[100px] max-sm:pb-[30px] max-md:pb-[60px]">
    <h1 class="font-sans font-semibold text-[30px] max-sm:text-[26px] max-md:text-[28px] mb-[40px] max-sm:mb-[30px] max-sm:text-center">
      More Information
    </h1>
    <div>
      <ul
        class="grid grid-cols-3 max-sm:text-center max-sm:grid-cols-1 max-sm:items-center max-sm:justify-center max-md:grid-cols-2">
        <div>
          <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Business Opening Hours:</h2>
          <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]"><?php the_field('business_opening_hours_page_contact_us') ?></p>
          <div class="mt-[40px] max-sm:mt-[20px]">
            <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Claims Department:</h2>
            <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]"><?php the_field('claims_page_contact_us') ?></p>
          </div>
        </div>
        <div class="max-sm:mt-[20px]">
          <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Sales Opening Hours:</h2>
          <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]"><?php the_field('sales_opening_hours_page_contact_us') ?></p>
        </div>
        <div class="max-sm:mt-[20px] max-md:mt-[20px]">
          <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Renewals Opening Hours:</h2>
          <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]"><?php the_field('renewals_opening_hours_page_contact_us') ?></p>
        </div>
      </ul>
    </div>
    <div class="mt-[30px] max-sm:text-center">
      <p class="text-gray700 font-sans mb-[15px]"><?php the_field('paragraph_page_contact_us') ?></p>
      <span class="font-sans text-[14px] text-gray-700"><?php the_field('t_and_c_page_contact_us') ?></span>
    </div>
  </section>
</div>

<!-- CTA 03 -->
<div class="w-full max-w-[1246px] mx-auto px-[15px]">
  <section class="pb-[100px] max-sm:pb-[30px] max-md:pb-[60px]">
    <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
        <div class="grid grid-cols-2 gap-4 lg:grid-cols-2">
          <img alt="" title="" src="<?php the_field('image_second_cta_subtitle_page_contact_us') ?>" class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
          <img alt="" title="" src="<?php the_field('image_02_second_cta_subtitle_page_contact_us') ?>" class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
        </div>
        <div class="bg-lightYellow border border-darkYellow rounded-md p-8 md:p-12 lg:px-16 lg:py-24">
          <div class="mx-auto max-w-xl text-center">
            <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
              <?php the_field('second_cta_title_page_contact_us') ?>
            </h2>
            <p class="hidden text-gray700 sm:mt-4 sm:block">
              <?php the_field('second_cta_subtitle_page_contact_us') ?>
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

<!-- Include Footer -->
<?php get_footer(); ?>