<?php
/**
 * AtlantaGreenMaids Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 
 * @since 1.0.0
 */

/**
 * Define AtlantaGreenMaids
 */
define('CHILD_THEME_ATLANTAGREENMAIDS_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	wp_enqueue_style('atlantagreenmaids-theme-css', get_stylesheet_directory_uri() . '/style.css', array(''), CHILD_THEME_ATLANTAGREENMAIDS_VERSION, 'all');

}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

function register_my_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Nav'),
			'destination-nav' => __('Destination Nav'),
			'quick-link-nav' => __('Quick Links Nav')
		)
	);
}
add_action('init', 'register_my_menus');

// add_filter('site_transient_update_plugins', '__return_false');

function custom_subcategory_redirection() {
    if (is_page_template('subcategories-template.php') && isset($_GET['subcategory_id'])) {
        $subcategory_id = intval($_GET['subcategory_id']);
        $subcategory = get_term($subcategory_id, 'category'); // Replace with your taxonomy name

        if ($subcategory && $subcategory->parent !== 0) {
            // Redirect to the custom product listing template with the subcategory ID as a query parameter
            wp_redirect(home_url('/custom-product-listing/?subcategory_id=' . $subcategory_id));
            exit();
        }
    }
}
add_action('template_redirect', 'custom_subcategory_redirection');

