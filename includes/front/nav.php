<?php


function wpdt_menuitem_classes( $classes, $item, $args, $depth ) {

unset($classes);

$classes[] = 'nav-item is-tab is-hidden-mobile';

return $classes;
}

