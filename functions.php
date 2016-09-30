
<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function twentyfifteen_child_setup() {
register_nav_menus( array(
		'secondary' => __( 'Footer Menu',      'twentyfifteen-child' ),
		
	) );
}

add_action( 'after_setup_theme', 'twentyfifteen_child_setup');
?>

