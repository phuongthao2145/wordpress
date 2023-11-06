<?php
/**
 * Plugin Name: university_post_types
 * Description: Add new Event post type 
 * Version: 1.0
 * Author: LuckBunny
 * Author URI: http://www.mywebsite.com
 */

function university_post_types(){
    $labels = array(
        'name'                  => _x( 'Events', 'Post type general name', 'event' ),
        'singular_name'         => _x( 'Event', 'Post type singular name', 'event' ),
        'menu_name'             => _x( 'Events', 'Admin Menu text', 'event' ),
        'name_admin_bar'        => _x( 'Event', 'Add New on Toolbar', 'event' ),
        'add_new'               => __( 'Add New', 'event' ),
        'add_new_item'          => __( 'Add New event', 'event' ),
        'new_item'              => __( 'New event', 'event' ),
        'edit_item'             => __( 'Edit event', 'event' ),
        'view_item'             => __( 'View event', 'event' ),
        'all_items'             => __( 'All events', 'event' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Event custom post type.',
        'public'             => true,
        'show_in_menu'       => true,
        'rewrite'            => array( 'slug' => 'event' ),
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'custom-field' ),
        'show_in_rest'       => true,
        'menu_icon'         => 'dashicons-calendar' ,
        'has_archive'       => true,
        'rewrite'           => array(
            'with_front'    => false,
            'slug'          => 'event'
        ), 
    );
     
    register_post_type( 'Events', $args );
}


add_action('init', 'university_post_types');


?>