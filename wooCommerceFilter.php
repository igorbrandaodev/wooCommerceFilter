<?php
/**
 * Plugin Name: wooCommerceFilter
 * Description: Change the ORDER API endpoint to consider date_modified.
 * Version: 1.0
 * Author: Igor Brandão
 * Author URI: https://github.com/aigorbrandao
 */
 
function modify_orders_after_query($request) {
    $request['date_query'][0]['column'] = 'post_modified';
    return $request;
}

add_filter( "woocommerce_rest_orders_prepare_object_query", 'modify_orders_after_query' );


?>