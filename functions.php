<?php 
// Functions to clean the header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
function enable_gzip_compression() {
    if ( ! ini_get( 'zlib.output_compression' ) && ! ini_get( 'ob_gzhandler' ) ) {
      ob_start( 'ob_gzhandler' );
    }
}
add_action( 'after_setup_theme', 'enable_gzip_compression' );
  
// Support Menu
add_theme_support('menus');

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Add theme to support thumbnails
add_theme_support('post-thumbnails');

// Mobile Menu
function register_my_mobile_menu() {
    register_nav_menu('header-mobile-menu',__('Header Menu Mobile'));
}
// Footer Menu
function register_my_footer_menu_01() {
    register_nav_menu('footer-menu-01',__('Footer Menu 01'));
}
function register_my_footer_menu_02() {
    register_nav_menu('footer-menu-02',__('Footer Menu 02'));
}
function register_my_footer_menu_03() {
    register_nav_menu('footer-menu-03',__('Footer Menu 03'));
}
function register_my_footer_menu_04() {
    register_nav_menu('footer-menu-04',__('Footer Menu 04'));
}
add_action('init', 'register_my_footer_menu_01');
add_action('init', 'register_my_footer_menu_02');
add_action('init', 'register_my_footer_menu_03');
add_action('init', 'register_my_footer_menu_04');
add_action('init', 'register_my_mobile_menu');

// Add classes directly to the a tag in the menu dynamic
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

        // Add your custom classes to the existing class attribute
        $class_names = ' class="' . esc_attr($class_names . ' block py-2 pl-3 pr-4 text-gray900 bg-gray-100 rounded hover:bg-darkRed hover:text-white') . '"';
        
        $output .= '<a' . $class_names . ' href="' . esc_url($item->url) . '">' . $item->title . '</a>';
    }
}
// Add classes directly to the a tag in the menu dynamic
class Custom_Walker_Nav_Menu_Footer extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

        // Add your custom classes to the existing class attribute
        $class_names = ' class="' . esc_attr($class_names . ' text-gray700 transition hover:underline') . '"';
        
        $output .= '<a' . $class_names . ' href="' . esc_url($item->url) . '">' . $item->title . '</a>';
    }
}

// Function to enable the Header edit options in the WordPress acf_add_options_page
acf_add_options_page(array(
	'page_title' 	=> 'Edit Header',
	'menu_title'	=> 'Edit Header',
	'menu_slug' 	=> 'edit-header',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));
// Function to enable the Footer edit options in the WordPress acf_add_options_page
acf_add_options_page(array(
	'page_title' 	=> 'Edit Footer',
	'menu_title'	=> 'Edit Footer',
	'menu_slug' 	=> 'edit-footer',
	'capability'	=> 'edit_posts',
	'icon_url' => 'dashicons-align-center',
	'redirect'		=> false
));

?>