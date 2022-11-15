<?php
function workpportfolio_add_sub_toggles_to_main_menu($args, $item, $depth) {
    if ($args->menu == 18 ) {

    if (in_array('menu-item-has-children', $item->classes, true)) {
        $args->before = '<div class="itemWrapper body3">';
        $args->after .= '<button data-toggle-target data-type="accordion" class="submenu_arrow">' . icons('submenu_arrow') . '</button></div>';
        return $args;
    }
}
}

add_filter('nav_menu_item_args', 'workpportfolio_add_sub_toggles_to_main_menu', 10, 3);

function my_nav_menu_attribs( $atts, $item, $args ) {
    $tel_pos = strpos($atts['href'], 'tel:');
    $contact_names = array('contacts', 'контакти', 'Контакти');

    if (in_array($item->title, $contact_names)) {
        $atts['data-toggle-target'] = 'target';
        $atts['data-type'] = "accordion";
    }

    if ($tel_pos !== false) {
        $atts['class'] = 'telIcon';
    }

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'my_nav_menu_attribs', 10, 3 );
