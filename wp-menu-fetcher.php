<?php
/*
Plugin Name: Wp-Menu-Fetcher
Description: Creates a new endpoint for retrieving all the details of menus by extending the wordpress rest api v2.
Author: sooraj
Version: 1.0
Author URI:
*/

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


add_action('rest_api_init', function()
{
    register_rest_route('wp-menu-fetcher/v1', '/get-all-menu/', array(
        'methods' => 'GET',
        'callback' => 'wpMenuFetcher'
    ));
});

function wpMenuFetcher()
{
    $menuItems  = array();
    $menuNames  = array();
    $finalItems = array();
    $menus      = wp_get_nav_menus();
    foreach ($menus as $key => $item) {
        array_push($menuNames, $item->name);
        $options = wp_get_nav_menu_items($item->term_id);
        foreach ($options as $items) {
            $menuData = array(
                'title' => $items->title,
                'link' => $items->url,
                'object_id' => $items->object_id,
                'object' => $items->object,
                'type' => $items->type
            );
            array_push($menuItems, $menuData);
        }
        $keyname = $menuNames[$key];
        $menuTab = array(
            $keyname => $menuItems
        );
        array_push($finalItems, $menuTab);
        $menuItems = array();
    }
    return array(
        "menuTypes" => $menuNames,
        "menuItems" => $finalItems
    );
}

?>
