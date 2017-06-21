<?php

function wpdt_widgets(){
	register_sidebar(array(
		'name'              =>  __( 'WPDT Sidebar', 'wpdt' ),
		'id'                =>  'wpdt_sidebar',
		'description'       =>  __( 'sidebar for the theme WpDev', 'wpdt' ),
		'class'             =>  '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => '</h5>'
	));
}