<?php

/**
 * Create custom fields for like post type
 * ============================================================================
 * @package WordPress
 * @subpackage irantheme
 * @since irantheme - custom fields
 * @author irantheme corporation
 * ============================================================================
 */

if (!function_exists('irantheme_like_member_add_meta_box')) {
  /**
   * Add meta box
   * @return void
   */
  function irantheme_like_member_add_meta_box()
  {
    //this will add the metabox for the member post type
    $screens = array('like');

    foreach ($screens as $screen) {

      add_meta_box(
        'member_sectionid',
        __('شناسه مطلب لایک شده', 'member_textdomain'),
        'irantheme_like_member_meta_box_callback',
        $screen
      );
    }
  }
  add_action('add_meta_boxes', 'irantheme_like_member_add_meta_box');
}


if (!function_exists('irantheme_like_member_meta_box_callback')) {
  /**
   * Prints the box content.
   *
   * @param WP_Post $post The object for the current post/page.
   * @return void
   */
  function irantheme_like_member_meta_box_callback($post)
  {
    // Add a nonce field so we can check for it later.
    wp_nonce_field('irantheme_like_member_save_meta_box_data', 'member_meta_box_nonce');
    /*
  * Use get_post_meta() to retrieve an existing value
  * from the database and use the value for the form.
  */
    $value = get_post_meta($post->ID, 'liked_meta_value_key', true);
    echo '<label for="liked_post_id">';
    _e('شناسه مطلب', 'member_textdomain');
    echo '</label> ';
    echo '<input type="text" id="liked_post_id" name="liked_post_id" value="' . esc_attr($value) . '" size="25" />';
  }
}


if (!function_exists('irantheme_like_member_save_meta_box_data')) {
  /**
   * When the post is saved, saves our custom data.
   *
   * @param int $post_id The ID of the post being saved.
   */
  function irantheme_like_member_save_meta_box_data($post_id)
  {
    if (!isset($_POST['member_meta_box_nonce'])) {
      return;
    }

    if (!wp_verify_nonce($_POST['member_meta_box_nonce'], 'irantheme_like_member_save_meta_box_data')) {
      return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
    }

    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {

      if (!current_user_can('edit_page', $post_id)) {
        return;
      }
    } else {

      if (!current_user_can('edit_post', $post_id)) {
        return;
      }
    }

    if (!isset($_POST['liked_post_id'])) {
      return;
    }

    $my_data = sanitize_text_field($_POST['liked_post_id']);

    update_post_meta($post_id, 'liked_meta_value_key', $my_data);
  }
  add_action('save_post', 'irantheme_like_member_save_meta_box_data');
}

/**
 * Create custom fields for features post type
 * ============================================================================
 * @package WordPress
 * @subpackage irantheme
 * @since irantheme - custom fields
 * @author irantheme corporation
 * ============================================================================
 */

if (!function_exists('irantheme_features_member_add_meta_box')) {
  /**
   * Add meta box
   * @return void
   */
  function irantheme_features_member_add_meta_box()
  {
    //this will add the metabox for the member post type
    $screens = array('features');

    foreach ($screens as $screen) {

      add_meta_box(
        'member_sectionid',
        __('آیکن خود را انتخاب کنید', 'member_textdomain'),
        'irantheme_features_member_meta_box_callback',
        $screen
      );
    }
  }
  add_action('add_meta_boxes', 'irantheme_features_member_add_meta_box');
}


if (!function_exists('irantheme_features_member_meta_box_callback')) {
  /**
   * Prints the box content.
   *
   * @param WP_Post $post The object for the current post/page.
   * @return void
   */
  function irantheme_features_member_meta_box_callback($post)
  {
    // Add a nonce field so we can check for it later.
    wp_nonce_field('irantheme_features_member_save_meta_box_data', 'member_meta_box_nonce');
    /*
  * Use get_post_meta() to retrieve an existing value
  * from the database and use the value for the form.
  */
    $value = get_post_meta($post->ID, 'features_meta_value_key', true);
    echo '<label for="features_post_icon">';
    _e('آیکن مورد نظر', 'member_textdomain');
    echo '</label> ';
    echo '<select id="features_post_icon" name="features_post_icon">
    <option value="lni-menu" ' . ($value == 'lni-menu' ? 'selected' : '') . '>Menu</option>
    <option value="lni-code" ' . ($value == 'lni-code' ? 'selected' : '') . '>Code</option>
    <option value="lni-display" ' . ($value == 'lni-display' ? 'selected' : '') . '>Display</option>
    <option value="lni-reload" ' . ($value == 'lni-reload' ? 'selected' : '') . '>Reload</option>
    <option value="lni-support" ' . ($value == 'lni-support' ? 'selected' : '') . '>Support</option>
    <option value="lni-network" ' . ($value == 'lni-network' ? 'selected' : '') . '>Network</option>
    </select>';
  }
}


if (!function_exists('irantheme_features_member_save_meta_box_data')) {
  /**
   * When the post is saved, saves our custom data.
   *
   * @param int $post_id The ID of the post being saved.
   */
  function irantheme_features_member_save_meta_box_data($post_id)
  {
    if (!isset($_POST['member_meta_box_nonce'])) {
      return;
    }

    if (!wp_verify_nonce($_POST['member_meta_box_nonce'], 'irantheme_features_member_save_meta_box_data')) {
      return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
    }

    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {

      if (!current_user_can('edit_page', $post_id)) {
        return;
      }
    } else {

      if (!current_user_can('edit_post', $post_id)) {
        return;
      }
    }

    if (!isset($_POST['features_post_icon'])) {
      return;
    }

    $my_data = sanitize_text_field($_POST['features_post_icon']);

    update_post_meta($post_id, 'features_meta_value_key', $my_data);
  }
  add_action('save_post', 'irantheme_features_member_save_meta_box_data');
}


/**
 * Create custom fields for viewpoint post type
 * ============================================================================
 * @package WordPress
 * @subpackage irantheme
 * @since irantheme - custom fields
 * @author irantheme corporation
 * ============================================================================
 */

if (!function_exists('irantheme_viewpoint_member_add_meta_box')) {
  /**
   * Add meta box
   * @return void
   */
  function irantheme_viewpoint_member_add_meta_box()
  {
    //this will add the metabox for the member post type
    $screens = array('viewpoint');

    foreach ($screens as $screen) {

      add_meta_box(
        'member_sectionid',
        __('تخصص یا سمت مشتری یا وارد کنید', 'member_textdomain'),
        'irantheme_viewpoint_member_meta_box_callback',
        $screen
      );
    }
  }
  add_action('add_meta_boxes', 'irantheme_viewpoint_member_add_meta_box');
}


if (!function_exists('irantheme_viewpoint_member_meta_box_callback')) {
  /**
   * Prints the box content.
   *
   * @param WP_Post $post The object for the current post/page.
   * @return void
   */
  function irantheme_viewpoint_member_meta_box_callback($post)
  {
    // Add a nonce field so we can check for it later.
    wp_nonce_field('irantheme_viewpoint_member_save_meta_box_data', 'member_meta_box_nonce');
    /*
  * Use get_post_meta() to retrieve an existing value
  * from the database and use the value for the form.
  */
    $value = get_post_meta($post->ID, 'viewpoint_meta_value_key', true);
    echo '<label for="specialty_or_position">';
    _e('تخصص یا سمت', 'member_textdomain');
    echo '</label> ';
    echo '<input type="text" id="specialty_or_position" name="specialty_or_position" value="' . esc_attr($value) . '" size="25" />';
  }
}


if (!function_exists('irantheme_viewpoint_member_save_meta_box_data')) {
  /**
   * When the post is saved, saves our custom data.
   *
   * @param int $post_id The ID of the post being saved.
   */
  function irantheme_viewpoint_member_save_meta_box_data($post_id)
  {
    if (!isset($_POST['member_meta_box_nonce'])) {
      return;
    }

    if (!wp_verify_nonce($_POST['member_meta_box_nonce'], 'irantheme_viewpoint_member_save_meta_box_data')) {
      return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
    }

    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {

      if (!current_user_can('edit_page', $post_id)) {
        return;
      }
    } else {

      if (!current_user_can('edit_post', $post_id)) {
        return;
      }
    }

    if (!isset($_POST['specialty_or_position'])) {
      return;
    }

    $my_data = sanitize_text_field($_POST['specialty_or_position']);

    update_post_meta($post_id, 'viewpoint_meta_value_key', $my_data);
  }
  add_action('save_post', 'irantheme_viewpoint_member_save_meta_box_data');
}
