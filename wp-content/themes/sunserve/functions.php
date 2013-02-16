<?php
/**
 * Roots child custom functions
 */

function roots_child_setup() {

	// Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
	set_post_thumbnail_size(9999, 250, false);
	//add_image_size('wide', 600, 300);
	//add_image_size('tall', 300, 600);

	remove_filter( 'excerpt_more', 'roots_excerpt_more' );

	// Add post formats (http://codex.wordpress.org/Post_Formats)
	// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}

add_action('after_setup_theme', 'roots_child_setup');

// override roots_excerpt_more
function roots_child_excerpt_more($more) {
  	return '&hellip; <a class="btn more-btn" href="' . get_permalink() . '">' . __('Read Moar!', 'roots_child') . '</a>';
}

add_filter('excerpt_more', 'roots_child_excerpt_more');


/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */
function custom_display_sidebar() {
  $sidebar_config = new Roots_Sidebar(
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_404'
      //'is_front_page'
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array(
      'page-custom.php'
    )
  );

  return $sidebar_config->display;
}
add_filter('roots_display_sidebar', 'custom_display_sidebar');

/* Retailer */
function my_post_type_retailer() {
	register_post_type( 'retailer',
                array( 
				'label' => __('Retailer'), 
				'singular_label' => __('Retailer', 'Sunserve'),
				'_builtin' => false,
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => true,
				'hierarchical' => true,
				'capability_type' => 'post',
				'menu_icon' => get_template_directory_uri() . '/includes/images/icon_portfolio.png',
				'rewrite' => array(
					'slug' => 'portfolio-view',
					'with_front' => FALSE,
				),
				'supports' => array(
						'title',
						'editor',
						'thumbnail',
						'excerpt',
						'custom-fields',
                                                'tags',
                                                'categories')
					) 
				);
	register_taxonomy('retailer_category', 'retailer', array('hierarchical' => true, 'label' => 'Retailer Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
}

add_action('init', 'my_post_type_retailer');

function remove_wp_width_height($string){
    return preg_replace('/\/i', '', $string);
}

// action
add_action('wp_enqueue_scripts', 'mychild_override_scripts', 101); // priority must be at least 101 because to override this line, because lower #s go first
// function
function mychild_override_scripts() {
  // dequeue
  wp_dequeue_style('roots_bootstrap'); // you might want to do the same for roots_bootstrap_responsive
  wp_dequeue_style('roots_app'); // you might want to do the same for roots_bootstrap_responsive
 wp_dequeue_style('roots_bootstrap_responsive'); // you might want to do the same for roots_bootstrap_responsive
  // enqueue
  wp_enqueue_style('mychild_bootstrap', get_stylesheet_directory_uri() . '/assets/css/app.css', false, null);
}



?>