<?php

if (!function_exists('irantheme_register_post_types')) {
  /**
   * Register post types
   * @return void
   */
  function irantheme_register_post_types()
  {

    // Register projects post type
    register_post_type('projects', array(
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array('slug' => 'projects'),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array('title', 'editor', 'thumbnail'),
      'taxonomies' => array('category', 'post_tag'),
      'labels' => array(
        'name' => 'پروژه ها',
        'add_new_item' => 'پروژه جدید',
        'edit_item' => 'ویرایش پروژه',
        'all_items' => 'همه پروژه ها',
        'singular_name' => 'پروژه'
      ),
      'menu_icon' => 'dashicons-schedule'
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
