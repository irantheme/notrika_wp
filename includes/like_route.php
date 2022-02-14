<?php

add_action('rest_api_init', 'irantheme_like_routes');

function irantheme_like_routes()
{
  register_rest_route('irantheme/v1', 'manageLike', array(
    'methods' => 'POST',
    'callback' => 'createLike'
  ));

  register_rest_route('irantheme/v1', 'manageLike', array(
    'methods' => 'DELETE',
    'callback' => 'deleteLike'
  ));
}

function createLike($data)
{
  $postID = sanitize_text_field($data['postID']);

  // Exist query
  // $existQuery = new WP_Query(array(
  //   'post_type' => 'like',
  //   'meta_query' => array(
  //     array(
  //       'key' => 'liked_meta_value_key',
  //       'compare' => '=',
  //       'value' => $postID
  //     )
  //   )
  // ));

  if (get_post_type($postID) == 'post') {
    return wp_insert_post(array(
      'post_type' => 'like',
      'post_status' => 'publish',
      'post_title' => get_the_title($postID),
      'meta_input' => array(
        'liked_meta_value_key' => $postID
      )
    ));
  } else {
    die('Invalid Post Type');
  }
}

function deleteLike($data)
{
  $likeID = sanitize_text_field($data['like']);
  if (get_post_type($likeID) == 'like') {
    wp_delete_post($likeID, true);
    return 'Congrats, like deleted.';
  } else {
    die('You do not have permission to delete that.');
  }
}
