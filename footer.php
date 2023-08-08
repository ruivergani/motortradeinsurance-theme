    <!-- Footer -->
    <footer class="bg-white border-t border-gray200">
      <div class="w-full max-w-[1246px] mx-auto px-[15px]">
        <div class="mx-auto max-w-screen-xl space-y-8 pt-16 pb-8 lg:space-y-16 max-sm:py-[30px]">
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div>
              <div class="max-sm:flex max-sm:justify-center">
                <!-- Logo -->
                <a href="<?php echo get_home_url(); ?>">
                  <img
                    src="<?php echo get_template_directory_uri()?>/assets/logo-motortrade.svg"
                    alt="Motortrade Logo"
                    title="Motortrade Logo"
                    class="w-full max-w-[177px] m-h-[52px] max-lg:max-w-[100px] max-sm:max-w-[140px]"
                  />
                </a>
              </div>
              <p class="mt-8 max-w-xs max-sm:max-w-full text-gray700 max-sm:text-center max-sm:justify-items-center">
                <?php the_field('subtitle_footer', 'options') ?>
              </p>
              <!-- Social Media -->
              <ul class="mt-8 flex items-center justify-start gap-6 max-sm:justify-center">
                <?php if( have_rows('social_media_repeater_footer', 'options') ): while ( have_rows('social_media_repeater_footer', 'options') ) : the_row(); ?>
                  <li>
                    <a href="<?php the_sub_field('link_repeater_footer') ?>" rel="noreferrer" target="_blank" class="text-gray700 transition hover:opacity-75">
                      <?php the_sub_field('icon_library_repeater_footer') ?>
                    </a>
                  </li>
                <?php endwhile; else : endif;?>
              </ul>
            </div>
            <!-- Navigation Footer -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4 max-sm:text-center max-sm:justify-items-center">
              <div>
                <p class="font-medium text-gray900"><?php the_field('title_footer_menu_01', 'options') ?></p>
                <!-- Dynamic Menu -->
                <?php
                  $args = array(
                    'menu' => 'Footer Menu 01',
                    'theme_location' => 'footer-menu-01',
                    'container' => false,
                    'menu_class' => 'mt-6 space-y-4 text-[15px] flex flex-col',
                    'walker' => new Custom_Walker_Nav_Menu_Footer()
                  );
                  wp_nav_menu( $args );
                ?>
              </div>
              <div>
                <p class="font-medium text-gray900"><?php the_field('title_footer_menu_2', 'options') ?></p>
                <!-- Dynamic Menu -->
                <?php
                  $args = array(
                    'menu' => 'Footer Menu 02',
                    'theme_location' => 'footer-menu-02',
                    'container' => false,
                    'menu_class' => 'mt-6 space-y-4 text-[15px] flex flex-col',
                    'walker' => new Custom_Walker_Nav_Menu_Footer()
                  );
                  wp_nav_menu( $args );
                ?>
              </div>
              <div>
                <p class="font-medium text-gray900"><?php the_field('title_footer_menu_3', 'options') ?></p>
                <!-- Dynamic Menu -->
                <?php
                  $args = array(
                    'menu' => 'Footer Menu 03',
                    'theme_location' => 'footer-menu-03',
                    'container' => false,
                    'menu_class' => 'mt-6 space-y-4 text-[15px] flex flex-col',
                    'walker' => new Custom_Walker_Nav_Menu_Footer()
                  );
                  wp_nav_menu( $args );
                ?>
              </div>
              <div>
                <p class="font-medium text-gray900"><?php the_field('title_footer_menu_4', 'options') ?></p>
                <!-- Dynamic Menu -->
                <?php
                  $args = array(
                    'menu' => 'Footer Menu 04',
                    'theme_location' => 'footer-menu-04',
                    'container' => false,
                    'menu_class' => 'mt-6 space-y-4 text-[15px] flex flex-col',
                    'walker' => new Custom_Walker_Nav_Menu_Footer()
                  );
                  wp_nav_menu( $args );
                ?>
              </div>
            </div>
          </div>
          <div class="w-full flex justify-between flex-row max-lg:flex-col max-lg:justify-center max-lg:gap-3 border-t border-gray200 pt-8">
            <div class="text-xs text-gray700 max-w-[900px] max-sm:text-center">
              <p><?php the_field('description_copy_footer', 'options') ?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript Links -->
    <script src="<?php echo get_template_directory_uri()?>/src/js/all.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>