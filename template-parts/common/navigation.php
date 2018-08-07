<?php //wp_nav_menu(array(
//
//    'theme_location' =>  'top_menu',
//    'menu_id'        =>  'top_menu',
//    'menu_class' => 'header__nav',
//    'container'      =>  '',
//
//
//
//));?>

<?php


/*
* wp_menu query with child class
*/

?>

<?php
$philosophy_menu = wp_nav_menu(array(
    'theme_location' => 'top_menu',
    'menu_id' => 'top_menu',
    'menu_class' => 'header__nav',
    'echo' => false
));
$philosophy_menu = str_replace("menu-item-has-children", "menu-item-has-children has-children", $philosophy_menu);
echo $philosophy_menu;
?>
