<?php

function cpt_features() {
	$args = array(
		'labels' => array(
			'name' => 'Features',
			'singular_name' => 'Feature',
		),
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_position' => 5,
		'exclude_from_search' => false,
	);
	register_post_type('features', $args);
};
add_action('init', 'cpt_features');

// function cpt_features_taxonomy() {
// 	$args = array(
// 		'labels' => array(
// 			'name' => 'Types',
// 			'singular_name' => 'Type',
// 		),
// 		'public' => true,
// 		'hierarchical' => true,
// 	);
// 	register_taxonomy('type', array('features'), $args);
// };
// add_action('init', 'cpt_features_taxonomy');

 ?>
