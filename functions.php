<?php

// Adding source files essentials
require get_theme_file_path('/includes/source_files.php');
// Adding custom settings admin page
require get_theme_file_path('/includes/custom_admin_settings.php');
// Adding additional & features
require get_theme_file_path('/includes/additional_features.php');
// Adding breadcrumbs
require get_theme_file_path('/includes/breadcrumbs.php');
// Adding register search route
require get_theme_file_path('/includes/search_route.php');
// Adding register like route
require get_theme_file_path('/includes/like_route.php');
// Adding register post types
require get_theme_file_path('/includes/register_post_types.php');
// Adding custom fields
require get_theme_file_path('/includes/custom_fields.php');
// Adding register loading posts route
// require get_theme_file_path( '/includes/loading_post_route.php' );

$settings = new WordPress_Custom_Admin_Settings('تنظیمات قالب', 'irantheme', __FILE__, 'irantheme');
