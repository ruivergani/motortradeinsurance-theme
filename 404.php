<?php
  // Template name: 404
?>

<!-- Include Header -->
<?php get_header(); ?>

  <!-- Not Found Section -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="w-full flex flex-col justify-center items-center py-[60px] max-sm:py-[30px] max-md:py-[40px]">
      <h1 class="font-sans text-[140px] text-gray200 mb-[0px] max-md:text-[80px] font-extrabold">404</h1>
      <h2 class="font-sans text-[36px] text-gray900 mb-[10px] max-md:text-[26px] font-extrabold">Uh-oh!</h2>
      <p class="font-sans text-[20px] text-gray700 mb-[30px] max-md:text-[16px]">We can’t find that page.</p>
      <!-- Return Button Home Page -->
      <a href="<?php echo get_home_url() ?>" class="px-[34px] py-3 inline-block border border-darkRed rounded-md bg-darkRed ease-in-out duration-200 text-center text-white font-sans font-medium hover:text-darkRed hover:bg-transparent">
          <span>Go Back Home</span>
      </a>
    </section>
  </div>

<!-- Include Footer -->
<?php get_footer(); ?> 