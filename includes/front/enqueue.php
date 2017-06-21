<?php

function wpdt_enqueue() {

	wp_register_style( 'wpdt_bulma',
		'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css'
	);

	wp_register_style( 'wpdt_custom',
		get_template_directory_uri() . '/assets/css/custom.css'
	);

	wp_enqueue_style( 'wpdt_bulma' );
	wp_enqueue_style( 'wpdt_custom' );


	wp_register_script( 'wpdt_custom',
		get_template_directory_uri() . '/assets/js/custom.js',
		array( 'jquery' ), WPDT_VERSION, true );
	wp_enqueue_script( 'wpdt_custom' );
}
