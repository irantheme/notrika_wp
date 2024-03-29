<?php


/**
 * Register custom json search url
 * @return void
 */
function registerLoadingProjects()
{
  register_rest_route('json/v1', 'projects', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'resultsProjects',
    'permission_callback' => '__return_true'
  ));
}
// Run above
add_action('rest_api_init', 'registerLoadingProjects');


/**
 * Pin results to custom search
 * @return array
 * @param array data
 */
function resultsProjects($data)
{

  // Getting new query for post and page type
  $mainQuery = new WP_Query(array(
    'post_type' => array('project'),
    's' => sanitize_text_field($data['term']), // Sanitize is more security for wordpress functions
    'posts_per_page' => 99999999
  ));

  // Create results for maintenance created json data
  $results = array(
    'projects' => array()
  );

  // Check of of them posts
  while ($mainQuery->have_posts()) {
    $mainQuery->the_post();

    $category_temp = array();
    if (has_category()) {
      // Get all category of posts
      $categories = get_the_category();
      foreach ($categories as $category) {
        array_push($category_temp, array($category->name => get_category_link($category->term_id)));
      }
    }
    // Get parent id category of post
    $category = get_the_category();
    // $category_parent_list = array();
    $category_parents_id = '';
    foreach ($category as $cate) {
      if ($cate->parent) {
        // From your child category, grab parent ID
        $parent = $cate->parent;

        // Load object for parent category
        $parent_id = get_category($parent);

        // Grab a category name
        $parent_id = esc_attr($parent_id->term_id);
        $category_parents_id .= strval($parent_id) . ',';
      } else {
        $category_parents_id .= strval(esc_attr($cate->term_id)) . ',';
      }
    }
    // Appending data to results array
    if (get_post_type() == 'project') {
      array_push($results['projects'], array(
        'id' => get_the_ID(),
        'title' => get_the_title(),
        'content' => wp_trim_words(strip_shortcodes(get_the_excerpt()), 43),
        'permalink' => get_the_permalink(),
        'imageSrc' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
        'category' => $category_temp,
        'date' => get_the_date('j F Y'),
        'author' => get_the_author_posts_link(),
        'authorNickname' => get_the_author_meta('nickname'),
        'authorAvatar' => get_avatar_url(get_the_author_meta('ID')),
        'dataCategory' => $category_parents_id
      ));
    }
  }

  // $results['post'] = array_values(array_unique($results['post'], SORT_REGULAR));
  return $results;
}
