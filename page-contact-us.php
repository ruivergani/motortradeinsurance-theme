<?php
  // Template name: contact-us
?>

<!-- Include Header -->
<?php get_header(); ?>

  <!-- Breadcrumbs -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
    <section class="py-[60px] max-sm:py-[30px] max-md:py-[40px] ">
      <ul class="flex flex-row gap-[35px] breadcrumbs-list max-md:flex-col max-md:items-center max-md:justify-center max-md:gap-[20px]">
          <li class="">
            <a href="" aria-label="home page" class="flex flex-row gap-[10px] justify-center items-center rounded-[10px] bg-gray100 px-[20px] py-[12px] duration-200 hover:bg-gray-200">
              <i class="ph-bold ph-house"></i>
              <p class="font-sans font-medium text-gray900">Home</p>
            </a>
          </li>
          <li class="">
            <a href="" aria-label="previous page" class="flex flex-row gap-[10px] justify-center items-center rounded-[10px] bg-gray100 px-[20px] py-[12px] duration-200 hover:bg-gray-200">
              <p class="font-sans font-medium text-gray900">Contact</p>
            </a>
          </li>
      </ul>
    </section>
  </div>

  <!-- Contact Us Section -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
      <div>
          <h1 class="font-sans font-bold text-gray900 text-[40px] mb-[50px] max-md:mb-[30px] max-sm:text-[26px] max-md:text-[28px] max-sm:text-center max-md:text-center">Contact Us</h1>
          <!-- Form Section -->
          <section>
              <div class="border border-gray200 rounded-[10px] flex justify-between flex-row items-start max-lg:flex-col-reverse">
                  <aside class="relative h-[700px] max-lg:h-[250px] lg:order-last lg:h-full max-lg:w-full ">
                      <img alt="Pattern" src="./assets/image-07.png" class="h-full w-full object-cover max-h-[700px] rounded-r-[10px] min-h-[700px] max-lg:min-h-[250px] max-lg:max-h-[250px] max-lg:rounded-b-lg max-lg:rounded-tr-[0px]"/>
                  </aside>
                  <main class="py-[60px] px-[70px] w-full max-sm:py-[40px] max-sm:px-[15px] max-w-[770px] max-lg:max-w-full">
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
                          <button type="submit" class="cursor-pointer w-full max-w-[300px] inline-block border rounded-lg bg-green-600 text-center text-white font-sans uppercase font-semibold py-3 px-[50px] ease-in-out duration-200 hover:brightness-90 mt-[30px] self-center">
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
      <img src="./assets/square-shape.svg" title="square shape" alt="square shape" class="max-lg:hidden block object-cover absolute top-[-70px] left-[-50px] z-0">
      <section class="overflow-hidden bg-gray-50 sm:grid sm:grid-cols-2 sm:items-center relative z-10">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
          <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
            <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit
            </h2>
            <p class="hidden text-gray700 md:mt-4 md:block">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas
              tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et
              fermentum, augue. Aliquet amet volutpat quisque ut interdum tincidunt
              duis.
            </p>
            <div class="mt-4 md:mt-8">
              <!-- Get a Quote CTA Button -->
              <button class="px-[50px] py-3 inline-block border border-darkRed rounded-md bg-darkRed text-center text-white font-sans font-medium ease-in-out duration-200 uppercase hover:brightness-90 js-cta-button" id="js-cta-button">
                <span>Get a Quote</span>
              </button>
            </div>
          </div>
        </div>

        <img
          alt="Violin"
          src="https://images.unsplash.com/photo-1484959014842-cd1d967a39cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
          class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-ss-[30px] md:h-[calc(100%_-_4rem)] md:rounded-ss-[60px]"
        />
      </section>
  </div>

  <!-- Map Section -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px] py-[100px] max-sm:py-[30px] max-md:py-[60px]">
      <section class="w-full flex flew-row justify-between max-lg:flex-col-reverse gap-4 max-lg:text-center max-lg:items-center max-lg:justify-center">
          <div class="max-w-[592px]">
              <img src="./assets/image-09.png" alt="map image" title="map image" class="object-cover w-full rounded-md">
          </div>
          <div class="w-full max-w-[527px]">
              <h2 class="font-sans font-semibold text-gray900 mb-[30px] max-sm:mb-[15px] text-[30px] max-sm:text-[26px] max-md:text-[28px]">Insurance 4 Motortrade</h2>
              <p class="font-sans font-normal text-gray700 mb-[28px] max-w-[190px] max-lg:max-w-full">Spitfire House <br>
                  142-154 Congleton Road<br>
                  Talke<br>
                  Stoke on Trent<br>
                  ST7 1LX</p>
              <div class="w-full flex justify-between gap-4 max-sm:flex-col">
                  <div class="flex flex-col text-center justify-center items-center bg-gray200 w-full py-[15px] bg-opacity-50 rounded-lg">
                      <h3 class="font-sans font-bold text-gray900 text-center mb-[6px]">Customer Services</h3>
                      <a href="" class="font-sans font-semibold text-darkRed text-center hover:underline">
                          01782 880140
                      </a>
                  </div>
                  <div class="flex flex-col text-center justify-center items-center bg-gray200 w-full py-[15px] bg-opacity-50 rounded-lg">
                      <h3 class="font-sans font-bold text-gray900 text-center mb-[6px]">Sales Number</h3>
                      <a href="" class="font-sans font-semibold text-darkRed text-center hover:underline">
                          01782 880140
                      </a>
                  </div>
              </div>
          </div>
      </section>
  </div>

  <!-- Info Section -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
      <section class="pb-[100px] max-sm:pb-[30px] max-md:pb-[60px]">
          <h1 class="font-sans font-semibold text-[30px] max-sm:text-[26px] max-md:text-[28px] mb-[40px] max-sm:mb-[30px] max-sm:text-center">More Information</h1>
          <div>
              <ul class="grid grid-cols-3 max-sm:text-center max-sm:grid-cols-1 max-sm:items-center max-sm:justify-center max-md:grid-cols-2">
                  <div>
                      <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Business Opening Hours:</h2>
                      <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]">Monday - Friday - 9.00am - 5:30pm</p>
                      <div class="mt-[40px] max-sm:mt-[20px]">
                          <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Claims Department:</h2>
                          <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]">For our full list of claim numbers please <a href="" class="hover:underline text-darkRed font-sans">click here. </a> Available 24hrs a day.</p>
                      </div>    
                  </div>
                  <div class="max-sm:mt-[20px]">
                      <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Sales Opening Hours:</h2>
                      <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]">Monday - Friday - 8:30am - 7:00pm</p>
                      <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]">Saturday - 9:00am - 2:00pm</p>
                  </div>
                  <div class="max-sm:mt-[20px] max-md:mt-[20px]">
                      <h2 class="font-sans font-semibold text-gray900 mb-[8px]">Renewals Opening Hours:</h2>
                      <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]">Monday - Friday - 8:30am - 6:00pm</p>
                      <p class="font-sans font-medium text-gray700 mb-[8px] mt-[5px]">Saturday - 9:00am - 1:00pm</p>
                  </div>
              </ul>
          </div>
          <div class="mt-[30px] max-sm:text-center">
              <p class="text-gray700 font-sans mb-[15px]">Send us an email fill out the form found above. Required fields are highlighted in red.</p>
              <span class="font-sans text-[14px] text-gray-700">* Take out an insurance policy, or renew an insurance policy with One Sure Insurance, and if you find a cheaper quotation within 48 hours that is on a like for like basis that you can provide written proof of, we will cancel your insurance policy and issue a full refund. Subject to terms and conditions.</span>
          </div>
      </section>
  </div>

  <!-- CTA 03 -->
  <div class="w-full max-w-[1246px] mx-auto px-[15px]">
      <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-2">
              <img
                alt="" title=""
                src="https://images.unsplash.com/photo-1621274790572-7c32596bc67f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=654&q=80"
                class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm"
              />
              <img
                alt="" title=""
                src="https://images.unsplash.com/photo-1567168544813-cc03465b4fa8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                class="h-40 w-full object-cover sm:h-56 lg:h-full rounded-sm"
              />
            </div>
            <div class="bg-lightYellow border border-darkYellow rounded-md p-8 md:p-12 lg:px-16 lg:py-24">
              <div class="mx-auto max-w-xl text-center">
                <h2 class="text-2xl font-bold text-gray900 md:text-3xl">
                  Find Quality Cover at an Affordable Price.
                </h2>
                <p class="hidden text-gray700 sm:mt-4 sm:block">
                  Don't delay, take the first step towards a worry-free future! Get your free quote today and let us be your shield against life's uncertainties. Remember, it's better to be prepared than to be caught off guard. Call or visit us now!
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

<!-- Include Footer -->
<?php get_footer(); ?> 