<?php
// Template name: terms-of-business
?>

<!-- Include Header -->
<?php get_header(); ?>


  <?php breadcrumbs(); ?>

  <!-- Breadcrumbs -->
  

  <!-- Text Template Content -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <div class="pb-[60px] max-sm:pb-[40px] max-md:pb-[60px]">
      <h1 class="font-sans font-medium text-[40px] text-gray900 mb-[20px] max-sm:text-[26px] max-md:text-[28px] max-md:mb-[0px] max-sm:text-center">
        <?php the_field('title_page_terms_of_business') ?>
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
                <?php the_field('title_cta_page_terms_of_business') ?>
              </h2>
              <p class="hidden text-gray700 sm:mt-4 sm:block">
                <?php the_field('subtitle_cta_page_terms_of_business') ?>
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
            <img alt="" title="" src="<?php the_field('image01_page_terms_of_business') ?>" class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
            <img alt="" title="" src="<?php the_field('image02_page_terms_of_business') ?>" class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm" />
          </div>
        </div>
      </div>
    </section>
  </div>

<!-- Include Footer -->
<?php get_footer(); ?>