<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
	wp_enqueue_style( 'accelerate-child-google-fonts', '//fonts.googleapis.com/css?family=Bangers&display=swap');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

/* First part of post gives the custom post a name 'case studies' through the
register_post_type template tag.
Next part is an array that defines settings and properties for the custom post type.
'Case Studies' is the name visible in the WP Admin.
'Case Study' is the visible name for individual instances.
Slug 'case-studies' its the name that will appear in the URL for an instance of a case study,
*/

function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );

		/*Creating Custom Post Type for About and Services Page.
		Post type to be used along with a custom page template for About, to be used in a single instance
		and not globally*/

		register_post_type( 'services',
					array(
								'labels'=>array(
									'name'=>__('Services'),
									'singular_name' =>__('Service')
								),
								'public' =>true,
								'has archive'=>true,
								'rewrite'=> array('slug'=> 'accelerate-services'),
								)
					);

}
add_action( 'init', 'create_custom_post_types' );


/*Adding dynamic sidebar for Twitter Module*/

function accelerate_theme_child_widget_init() {

	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
