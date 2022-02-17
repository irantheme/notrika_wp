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

    // Register features post type
    register_post_type('features', array(
      'support' => array('title', 'editor'),
      'public' => false,
      'show_ui' => true,
      'labels' => array(
        'name' => 'ویژگی ها',
        'add_new_item' => 'ویژگی جدید',
        'edit_item' => 'ویرایش ویژگی',
        'all_items' => 'همه ویژگی ها',
        'singular_name' => 'ویژگی'
      ),
      'menu_icon' => 'dashicons-screenoptions'
    ));
  }
  add_action('init', 'irantheme_register_post_types');
}
