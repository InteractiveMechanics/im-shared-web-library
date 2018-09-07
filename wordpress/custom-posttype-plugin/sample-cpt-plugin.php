<?php
/*
Plugin Name: [plugin name]
Plugin URI: [plugin uri]
Description: Declares a plugin that will [explain purpose of plugin].
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/


add_action( 'init', 'create_team_bio' );

function create_team_bio() {
    register_post_type( 'team_bios',
        array(
            'labels' => array(
                'name' => 'Team Bios',
                'singular_name' => 'Team Bio',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Team Bio',
                'edit' => 'Edit',
                'edit_item' => 'Edit Team Bio',
                'new_item' => 'New Team Bio',
                'view' => 'View',
                'view_item' => 'View Team Bio',
                'search_items' => 'Search Team Bios',
                'not_found' => 'No Team Bios found',
                'not_found_in_trash' => 'No Team Bios found in Trash',
                'parent' => 'Parent Team Bio'
            ),
            'menu_icon' => 'dashicons-book', //https://developer.wordpress.org/resource/dashicons
            'public' => true,
            'menu_position' => 15,
            'rewrite'     => array( 'slug' => 'team-bios' ), 
            'supports' => array( 'title', 'editor', 'revisions', 'excerpt', 'comments', 'thumbnail', 'custom-fields' ),
            'map_meta_cap'=> true,
            'capability_type' => array('teambio', 'teambios'),
            'capabilities' => array(
                'publish_posts' => 'publish_teambios',
                'edit_posts' => 'edit_teambios',
                'edit_post' => 'edit_teambio',
                'edit_others_posts' => 'edit_others_teambios',
                'delete_posts' => 'delete_teambios',
                'delete_post' => 'delete_teambio',
                'delete_others_posts' => 'delete_others_teambios',
                'manage_posts' => 'manage_teambios',
                'read_private_posts' => 'read_private_teambios',
                'read_post' => 'read_teambios',
            ),
            'taxonomies' => array( '' ),
            'has_archive' => true
        )
    );
}



?>
