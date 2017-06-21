<?php

function wpdt_enqueue() {

	wp_register_style( 'wpdt_foundation',
		get_template_directory_uri() . '/assets/css/foundation.min.css'
	);

	wp_register_style( 'wpdt_custom',
		get_template_directory_uri() . '/assets/css/custom.css'
	);

	wp_enqueue_style( 'wpdt_foundation' );
	wp_enqueue_style( 'wpdt_custom' );


	wp_register_script( 'wpdt_foundation',
		get_template_directory_uri() . '/assets/js/foundation.min.js',
		array( 'jquery' ), false, true );

	wp_register_script( 'wpdt_custom',
		get_template_directory_uri() . '/assets/js/custom.js',
		array( 'jquery', 'wpdt_foundation' ), WPDT_VERSION, true );
	wp_enqueue_script( 'wpdt_custom' );
}
