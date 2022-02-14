<?php

if (!function_exists('irantheme_register_post_types')) {
  /**
   * Register post types
   * @return void
   */
  function irantheme_register_post_types()
  {
    // Register like post type
    register_post_type('like', array(
      'support' => array('title'),
      'public' => false,
      'show_ui' => true,
      'labels' => array(
        'name' => 'لایک ها',
        'add_new_item' => 'لایک جدید',
        'edit_item' => 'ویرایش لایک',
        'all_items' => 'همه لایک ها',
        'singular_name' => 'لایک'
      ),
      'menu_icon' => 'dashicons-heart'
    ));
  }
  add_action('init', 'irantheme_register_post_types');
}
