<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body id="top">

  <?php
  // Get template part of navigation
  get_template_part('/template-parts/content', 'navigation');
  ?>

  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Wrapper mask -->
    <div id="wrapper-mask"></div>

    <?php
    // Get template part of header
    get_template_part('/template-parts/content', 'header');
    ?>

    <?php
    // Get template part of features
    get_template_part('/template-parts/content', 'features');
    ?>

    <?php
    // Get template part of about
    get_template_part('/template-parts/content', 'about');
    ?>

    <?php
    // Get template part of projects
    get_template_part('/template-parts/content', 'projects');
    ?>

    <?php
    // Get template part of partners
    get_template_part('/template-parts/content', 'partners');
    ?>

    <?php
    // Get template part of cooperation
    get_template_part('/template-parts/content', 'cooperation');
    ?>

    <?php
    // Get template part of latest-blog-posts
    get_template_part('/template-parts/content', 'latest-blog-posts');
    ?>

    <?php
    // Get template part of information
    get_template_part('/template-parts/content', 'information');
    ?>

    <?php
    // Get template part of footer
    get_template_part('/template-parts/content', 'footer');
    ?>

  </div>

  <?php wp_footer(); ?>
</body>

</html>