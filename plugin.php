<?php
/**
 * Nachala Development Plugin
 *
 * @package     NachalaDevloper
 * @author      Dan Pringle
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Style Guide
 * Plugin URI:  http://www.danielpringle.co.uk
 * Description: Development Sandbox plugin. This plugin displays errors in a more user friendly way.
 * Version:     1.0.0
 * Author:      Dan Pringle
 * Author URI:  http://www.danielpringle.co.uk
 * Text Domain: NachalaDevloper
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('PLUGIN_URL', plugin_dir_url( __DIR__ ) );

function enqueue_style_guide_css() {

	//wp_enqueue_script('post_test_script', plugin_dir_url(__FILE__) . '/post_test_script.js');
	
	
	wp_enqueue_style( 'style-guide-css', plugin_dir_url( __FILE__ ). '/assets/css/style-guide.css', null, date("Y-m-d-h:i-s"), 'all' ) ;
}

add_action( 'wp_enqueue_scripts', 'enqueue_style_guide_css', 10 );



add_action('init', 'add_sg_page');
function add_sg_page($post_name) {

	$post_title = 'DPUK Style Guide';

	$page_slug = 'dpuk-style-guide';
	$page = get_page_by_path($page_slug);

	global $wpdb;

	$query = $wpdb->prepare('SELECT ID FROM ' . $wpdb->posts . ' WHERE post_name = %s', sanitize_title_with_dashes($post_title));
	$cID = $wpdb->get_var( $query );
	if($cID){
		return;
	}

	if($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $page_slug . "'", 'ARRAY_A')) {
		return;
	} else {
		
		$current_user = get_current_user_id();
	   
		// create post object
		$page = array(
		  'post_title'  => __( $post_title ),
		  'post_status' => 'publish',
		  'post_author' => $current_user, //$current_user->ID,
		  'post_type'   => 'page',
		);
		
		// insert the post into the database
		wp_insert_post( $page );
	}
  }






/**
 * Add "Custom" template to page attirbute template section.
 */
function wpse_288589_add_template_to_select( $post_templates, $wp_theme, $post, $post_type ) {

	if ( is_page( 'dpuk-style-guide' ) ) {

	}
			// Add custom template named template-custom.php to select dropdown 
			$post_templates['style-guide.php'] = __('Style Guide');

			return $post_templates;
}

//add_filter( 'theme_page_templates', 'wpse_288589_add_template_to_select', 10, 4 );


/**
 * Check if current page has our custom template. Try to load
 * template from theme directory and if not exist load it 
 * from root plugin directory.
 */
// function wpse_288589_load_plugin_template( $template ) {

//     if(  get_page_template_slug() === 'style-guide.php' ) {

//         if ( $theme_file = locate_template( array( 'style-guide.php' ) ) ) {
//             $template = $theme_file;
//         } else {
//             $template = plugin_dir_path( __FILE__ ) . 'includes/templates/style-guide.php';
//         }
//     }

//     if($template == '') {
//         throw new \Exception('No template found');
//     }

//     return $template;
// }

//add_filter( 'template_include', 'wpse_288589_load_plugin_template' );




// add_filter('page_template', 'catch_plugin_template');

// Page template filter callback
// function catch_plugin_template($page_template) {
// 	if ( is_page( 'dpuk-style-guide' ) ) {

// 		$page_template = plugin_dir_path( dirname( __FILE__ ) ) . 'includes/templates/style-guide.php';
// 	}
	
// 	return $page_template;
// }

add_filter( "page_template", 'load_our_sg_page_template');
function load_our_sg_page_template ($page_template) {
	if ( is_page( 'dpuk-style-guide' ) ) {
    $page_template = dirname(  __FILE__  ) . '/includes/templates/style-guide.php';
  }
  return $page_template;
}

require_once( __DIR__. '/includes/sg-components/address.php' );
require_once( __DIR__. '/includes/sg-components/blockquote.php' );
require_once( __DIR__. '/includes/sg-components/colours.php' );
require_once( __DIR__. '/includes/sg-components/details.php' );
require_once( __DIR__. '/includes/sg-components/figure.php' );
require_once( __DIR__. '/includes/sg-components/form-buttons.php' );
require_once( __DIR__. '/includes/sg-components/form-elements.php' );
require_once( __DIR__. '/includes/sg-components/fieldset.php' );
require_once( __DIR__. '/includes/sg-components/headings.php' );
require_once( __DIR__. '/includes/sg-components/tooltip.php' );
require_once( __DIR__. '/includes/sg-components/pagination.php' );
require_once( __DIR__. '/includes/sg-components/checkbox.php' );
require_once( __DIR__. '/includes/sg-components/grid.php' );
require_once( __DIR__. '/includes/sg-components/tables.php' );
require_once( __DIR__. '/includes/sg-components/text-elements.php' );
require_once( __DIR__. '/includes/sg-components/preformated-text.php' );
require_once( __DIR__. '/includes/sg-components/fonts.php' );
