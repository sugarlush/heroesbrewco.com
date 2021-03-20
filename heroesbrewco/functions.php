<?php 
	add_action( 'wp_enqueue_scripts', 'heroesbrewco_enqueue_styles' );
	function heroesbrewco_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
	} 

	// This theme uses wp_nav_menu() in one location.
	add_action( 'after_setup_theme', 'shout_register_my_menu' );
	function shout_register_my_menu() {
		register_nav_menu( 'primary', 'Primary Navigation' );
	}
	
	add_theme_support( 'event-manager-templates' );

	function wpmu_register_widgets() {
		register_sidebar( array(
			'name' => __( 'Header Logo', 'wpmu' ),
			'id' => 'header-logo',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Home Hero Title', 'wpmu' ),
			'id' => 'home-hero-title',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Home Alert', 'wpmu' ),
			'id' => 'home-alert',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Home Hero Subtitle', 'wpmu' ),
			'id' => 'home-hero-subtitle',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Home Hero Description', 'wpmu' ),
			'id' => 'home-hero-description',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Our Story Content', 'wpmu' ),
			'id' => 'our-story-content',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Our Story Image', 'wpmu' ),
			'id' => 'our-story-image',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Our Hours', 'wpmu' ),
			'id' => 'our-hours',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Our Location', 'wpmu' ),
			'id' => 'our-location',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Contact Us', 'wpmu' ),
			'id' => 'contact-us',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Upcoming Events', 'wpmu' ),
			'id' => 'upcoming-events',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
		
		register_sidebar( array(
			'name' => __( 'Featured Beer', 'wpmu' ),
			'id' => 'featured-beer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		));
	}
	add_action( 'widgets_init', 'wpmu_register_widgets' );

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'beer',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Beer' ),
                'singular_name' => __( 'Beer' )
            ),
            'public' 		=> true,
            'has_archive' 	=> true,
            'rewrite' 		=> array('slug' => 'beer'),
			'show_in_rest' 	=> true,
			'menu_icon'		=> 'dashicons-beer',
 
        )
    );
 
    register_post_type( 'crew',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Crew' ),
                'singular_name' => __( 'Crew' )
            ),
            'public' 		=> true,
            'has_archive' 	=> true,
            'rewrite' 		=> array('slug' => 'crew'),
			'show_in_rest' 	=> true,
			'menu_icon'		=> 'dashicons-groups',
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



 ?>