<?php


function wpdt_menuitem_classes( $classes, $item, $args, $depth ) {

unset($classes);

$classes[] = 'pure-menu-item';

return $classes;
}

function wpdt_add_class_link_menu_items( $atts, $item, $args ) {
	// check if the item is set to target="_blank"

		// add the desired attributes:
		$atts['class'] = 'custom-nav-link';

	return $atts;
}


