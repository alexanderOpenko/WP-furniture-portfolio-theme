<?php
function workpportfolio_add_sub_toggles_to_main_menu($args, $item, $depth) {
    $args->before = '<div class="itemWrapper body3">';
    $args->after = '';

    // Add a toggle to items with children.
    if (in_array('menu-item-has-children', $item->classes, true)) {
        // Add the sub menu toggle.

        $args->after .= '<button data-toggle-target data-type="accordion" class="submenu_arrow">' . icons('submenu_arrow') . '</button></div>';
    }

    return $args;
}

add_filter('nav_menu_item_args', 'workpportfolio_add_sub_toggles_to_main_menu', 10, 3);
?>