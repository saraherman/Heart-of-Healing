<?php
	// allows posts to have featured images
	add_theme_support('post-thumbnails');

	// registers 2 menus
	function register_my_menus() {
	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'extra-menu' => __( 'Footer Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );

	// adds theme support for autocracy
	// include 'autocracy/autocracy.php';

	// creates custom post-type: services
	// function services_create_post_type() {
	// register_post_type('services', array(
	// 	'labels' => array(
	// 		'name' => __('Services'),
	// 		'singular_name' => __('Service'),
	// 		'new_item' => __('New Service'),
	// 		'add_new_item' => __('Add New Service'),
	// 		'all_item' => __('All Services'),
	// 		'not_found' => __('No Services Found'),
	// 		'search_items' => __('Search Services')
	// 		),
	// 	'public' => true,
	// 	'has_archive' => true,
	// 	'rewrite' => array('slug' => 'services'),
	// 	'supports' => array('title','editor','thumbnail', 'author', 'comments'),
	// 	'taxonomies' => array('category'), 
	// 	)
	// 	);
	// }
	// add_action('init', 'services_create_post_type');

	// creates custom post-type: testimonials
	function testimonials_create_post_type() {
	register_post_type('testimonials', array(
		'labels' => array(
			'name' => __('Testimonials'),
			'singular_name' => __('Testimonial'),
			'new_item' => __('New Testimonial'),
			'add_new_item' => __('Add New Testimonial'),
			'all_item' => __('All Testimonials'),
			'not_found' => __('No Testimonials Found'),
			'search_items' => __('Search Testimonials')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'testimonials'),
		'supports' => array('title','editor','thumbnail', 'author', 'comments'),
		'taxonomies' => array('category'), 
		)
		);
	}
	add_action('init', 'testimonials_create_post_type');

	//after excerpts a 'more' button surrounded by permalink to link to content is added
	function new_excerpt_more( $more ) {
		return '<br><div class="right"><a href="'. get_permalink( get_the_ID() ) . '"><button type="button" class="more">' . __('Read More', 'your-text-domain') . '</button></a></div>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );

	function hoh_excerpt($length){
		$excerpt = get_the_excerpt();
		echo wp_trim_words( $excerpt , $length );
	}
	


?>