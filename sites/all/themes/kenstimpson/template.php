<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * kenstimpson theme.
 */

// menus customization
function mysubthemename_menu_tree__main_menu($variables){
   if (preg_match("/\bmenu-subnavigation\b/i", $variables['tree'])){
    return '<ul id="menu-navigation">' . $variables['tree'] . '</ul>';
  } else {
    return '<ul class="menu-subnavigation">' . $variables['tree'] . '</ul>';
  }
}
