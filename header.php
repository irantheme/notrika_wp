<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>

  <!-- Navigation -->
  <nav id="navigation">
    <div class="text-center pt-5">
      <!-- Back nav -->
      <button id="back-nav" class="button-style button-dark">بازگشت<i class="lni lni-chevron-left"></i></button>
    </div>
    <!-- Logo -->
    <div class="logo">
      <h1><?php bloginfo('name'); ?></h1>
      <p><?php bloginfo('description'); ?></p>
    </div>
    <!-- Navbar menu -->
    <div class="navbar-menu">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'headerNavLocation',
        'depth' => 1,
      ));
      ?>
    </div>
  </nav>

  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Wrapper mask -->
    <div id="wrapper-mask"></div>
    <!-- Header blog -->
    <header id="header-blog">
      <div class="dark-mask"></div>

      <div id="parallax-blog-header" class="parallax-container">
        <div class="container-fluid p-0">
          <!-- Main menu -->
          <div class="main-menu">
            <button id="nav-open">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
        <div class="container-holder">
          <div class="container-fluid">
            <!-- Heading info -->
            <div class="heading-info">
              <!-- Breadcrumbs -->
              <?php irantheme_custom_breadcrumbs(); ?>
              <!-- Options -->
              <div class="options">
                <div class="options-layer">
                  <!-- Social network -->
                  <ul class="social-networks">
                    <li><a class="search-alt" href="#search-form"><i class="lni lni-search-alt"></i></a></li>
                    <?php
                    // Get template part of social media
                    get_template_part('/template-parts/content', 'social-media');
                    ?>
                  </ul>
                  <?php
                  $today = null;
                  if (function_exists('parsidate')) {
                    $today = parsidate('j F Y', date('F j Y'), 'per');
                  } else {
                    $today = date('F j Y');
                  }
                  ?>
                  <span>امروز‌ : <?php echo __($today); ?></span>
                </div>
              </div>
              <!-- Main info -->
              <?php
              $args = array();
              // Check title, subtitle
              if (is_home()) {
                $args['title'] = 'وبلاگ';
                $args['subtitle'] = 'آخرین مطالب ما را در این صفحه مشاهده می کنید.';
                $args['link'] = null;
              } else if (is_author()) {
                $author = get_user_by('slug', get_query_var('author_name'));
                $args['title'] = get_the_archive_title();
                $args['subtitle'] = $author->nickname;
                $args['link'] = null;
              } else if (is_archive()) {
                $args['title'] = get_the_archive_title();
                $args['subtitle'] = get_the_archive_description();
                $args['link'] = null;
              } else if (is_single() || is_page()) {
                $args['title'] = get_the_title();
                $args['subtitle'] = wp_trim_words(strip_shortcodes(get_the_content()), 20);
                $args['link'] = null;
              } else if (is_404()) {
                $args['title'] = 'ارور ۴۰۴';
                $args['subtitle'] = 'صفحه مورد نظر پیدا نشد.';
                $args['link'] = null;
              } else {
                $args['title'] = 'ناشناخته';
                $args['subtitle'] = 'ناشناخته';
                $args['link'] = null;
              }
              ?>
              <div class="heading-main-info">
                <?php if ($args['link']) : ?>
                  <h1><a href="<?php echo esc_url($args['link']); ?>"><?php echo __($args['title']); ?></a></h1>
                <?php else : ?>
                  <h1><?php echo __($args['title']); ?></h1>
                <?php endif; ?>
                <p><?php echo __($args['subtitle']); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Search box -->
    <section id="search-box">
      <div class="container-holder">
        <div class="container">
          <?php get_search_form(); ?>
        </div>
      </div>
    </section>