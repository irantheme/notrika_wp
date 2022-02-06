<?php

function irantheme_register_post_types()
{
  // Register like post type
  register_post_type('like', array(
    'support' => array('title'),
    'public' => false,
    'show_ui' => true,
    'labels' => array(
      'name' => 'لایک ها',
      'add_new_item' => 'Add New Like',
      'edit_item' => 'Edit Like',
      'all_items' => 'All Likes',
      'singular_name' => 'Like'
    ),
    'menu_icon' => 'dashicons-heart'
  ));
}

add_action('init', 'irantheme_register_post_types');
