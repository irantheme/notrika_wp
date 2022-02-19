<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body id="top">

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
    <!-- Header -->
    <header id="header">
      <div class="dark-mask"></div>
      <?php
      // Get image src (Full size)
      $front_header_bg = wp_get_attachment_image_src(get_option('irantheme_front_header_bg'), 'full');
      ?>
      <div class="parallax-container" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo esc_url($front_header_bg[0]); ?>" data-position-x="left">
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
        <div class="container">
          <!-- Banner -->
          <div class="banner">
            <h2><?php echo __(get_option('irantheme_front_header_title')); ?></h2>
            <p><?php echo __(get_option('irantheme_front_header_description')); ?></p>
            <a href="#features" id="go-down" class="button-style button-light">شروع کنید<i class="lni lni-chevron-left"></i></a>
          </div>
        </div>
        <!-- Social media -->
        <div class="social-media">
          <ul>
            <?php
            // Get template part of social media
            get_template_part('/template-parts/content', 'social-media');
            ?>
          </ul>
        </div>
      </div>
    </header>

    <?php
    $front_post_query = new WP_Query(array(
      'post_type' => 'features',
      'posts_per_page' => -1,
    ));
    ?>
    <!-- Features -->
    <section id="features">
      <div class="container">
        <!-- Heading mode -->
        <div class="heading-mode heading-mode-light text-center">
          <h2><?php echo __(get_option('irantheme_front_features_title')); ?></h2>
          <p><?php echo __(get_option('irantheme_front_features_description')); ?></p>
        </div>
        <div class="row">
          <?php
          while ($front_post_query->have_posts()) :
            $front_post_query->the_post();
            $feature_icon = get_post_meta(get_the_ID(), 'features_meta_value_key', true);
          ?>
            <!-- Feature box -->
            <div class="col-lg-4">
              <aside class="feature-box">
                <div class="feature-icon"><i class="lni <?php echo $feature_icon; ?>"></i></div>
                <div class="feature-content">
                  <h3><?php echo get_the_title(); ?></h3>
                  <p><?php echo sanitize_text_field(get_the_content()); ?></p>
                </div>
              </aside>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <?php
            $front_about_img_1 = wp_get_attachment_image_src(get_option('irantheme_front_about_img_1'), 'full');
            $front_about_img_2 = wp_get_attachment_image_src(get_option('irantheme_front_about_img_2'), 'full');
            $front_about_img_3 = wp_get_attachment_image_src(get_option('irantheme_front_about_img_3'), 'full');
            ?>
            <!-- About list image -->
            <aside class="about-list-image">
              <ul>
                <?php if ($front_about_img_1) : ?>
                  <li><img src="<?php echo esc_url($front_about_img_1[0]); ?>" alt="تصویر اول" /></li>
                <?php endif; ?>
                <?php if ($front_about_img_2) : ?>
                  <li><img src="<?php echo esc_url($front_about_img_2[0]); ?>" alt="تصویر دوم" /></li>
                <?php endif; ?>
                <?php if ($front_about_img_3) : ?>
                  <li><img src="<?php echo esc_url($front_about_img_3[0]); ?>" alt="تصویر سوم" /></li>
                <?php endif; ?>
              </ul>
            </aside>
          </div>
          <div class="col-lg-6">
            <!-- About content -->
            <aside class="about-content">
              <q><?php echo __(get_option('irantheme_front_about_little_title')); ?></q>
              <h3><?php echo __(get_option('irantheme_front_about_title')); ?></h3>
              <p><?php echo __(get_option('irantheme_front_about_description')); ?></p>
              <blockquote><?php echo __(get_option('irantheme_about_excerpt')); ?></blockquote>
              <a href="<?php echo esc_url(get_option('irantheme_about_link')); ?>" class="button-style button-primary">بیشتر<i class="lni lni-chevron-left"></i></a>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <!-- Heading mode -->
        <div class="heading-mode heading-mode-dark text-right">
          <h2><?php echo __(get_option('irantheme_front_projects_title')); ?></h2>
          <p><?php echo __(get_option('irantheme_front_projects_description')); ?></p>
        </div>
        <?php
        $categories = get_categories(array('parent' => 0, 'hide_empty' => 0));
        if (count($categories)) : ?>
          <!-- Categories -->
          <div class="categories">
            <ul>
              <li>
                <span id="all-categories" class="active">همه</span>
              </li>
              <?php
              $categories = get_categories(array(
                'orderby' => 'name',
                'parent' => 0
              ));
              foreach ($categories as $category) {
                echo '<li><span data-cate="' . esc_attr($category->term_id) . '">' . __($category->name) . '</span></li>';
              }
              ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
      <div class="container">
        <?php
        $front_projects_post = new WP_Query(array(
          'post_type' => 'projects',
          'posts_per_page' => 6,
        ));
        ?>
        <div class="row">
          <!-- Grid masonry -->
          <div class="grid-masonry">
            <div class="grid-sizer"></div>
            <?php while ($front_projects_post->have_posts()) : $front_projects_post->the_post();
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
                  $parent_id = $parent_id->term_id;
                  $category_parents_id .= strval($parent_id) . ',';
                } else {
                  $category_parents_id .= strval($cate->term_id) . ',';
                }
              }
              // Get all category of posts
              $categories = get_the_category();
              $categories_output = '';
            ?>
              <!-- Post -->
              <div class="grid-item post-holder" data-cate="<?php echo esc_attr($category_parents_id); ?>">
                <article class="post">
                  <a href="<?php echo get_the_permalink(); ?>" class="post-link">
                    <?php if (has_post_thumbnail()) : ?>
                      <!-- Post image -->
                      <div class="post-image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="تصویر پروژه" />
                      </div>
                    <?php endif; ?>
                    <!-- Post content -->
                    <div class="post-content">
                      <!-- Post heading -->
                      <div class="post-heading">
                        <h2><?php echo get_the_title(); ?></h2>
                        <?php if (count($categories)) : ?>
                          <!-- Post categories -->
                          <ul class="post-categories">
                            <?php
                            foreach ($categories as $category) {
                              $categories_output .= '<li><span>' . __($category->name) . '</span></li>';
                            }
                            echo trim($categories_output, '');
                            ?>
                          </ul>
                        <?php endif; ?>
                      </div>
                      <!-- Post icons -->
                      <div class="post-icons">
                        <i class="lni lni-full-screen"></i>
                        <i class="lni lni-link"></i>
                      </div>
                    </div>
                  </a>
                </article>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
        <!-- Load more -->
        <div class="load-more">
          <button id="loading-projects" class="button-load">
            پروژه های بیشتر<i class="lni lni-spinner"></i>
          </button>
        </div>
      </div>
    </section>
    <?php
    $front_partners_bg = wp_get_attachment_image_src(get_option('irantheme_front_partners_bg'), 'full');
    ?>
    <!-- Partners -->
    <section id="partners">
      <div class="parallax-container" data-speed="0.5" data-parallax="scroll" data-image-src="<?php echo $front_partners_bg[0]; ?>" data-position-x="left">
        <div class="container">
          <!-- Heading mode -->
          <div class="heading-mode heading-mode-light text-center">
            <h2><?php echo __(get_option('irantheme_front_partners_title')); ?></h2>
            <p><?php echo __(get_option('irantheme_front_partners_description')); ?></p>
          </div>
          <?php
          $front_post_partners = new WP_Query(array(
            'post_type' => 'partners',
            'posts_per_page' => -1,
          ));
          ?>
          <!-- Partners brands -->
          <div class="partners-brands">
            <!-- Swiper -->
            <div class="swiper partners-slider">
              <div class="swiper-wrapper">
                <?php while ($front_post_partners->have_posts()) : $front_post_partners->the_post(); ?>
                  <div class="swiper-slide">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" />
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          </div>
          <?php
          $front_post_viewpoint = new WP_Query(array(
            'post_type' => 'viewpoint',
            'posts_per_page' => -1,
          ));
          ?>
          <!-- Viewpoint -->
          <div class="swiper viewpoint">
            <div class="swiper-wrapper">
              <?php while ($front_post_viewpoint->have_posts()) : $front_post_viewpoint->the_post(); ?>
                <!-- Viewpoint item -->
                <div class="swiper-slide">
                  <blockquote><?php echo get_the_content(); ?></blockquote>
                  <b><?php echo get_the_title(); ?></b>
                  <cite><?php echo get_post_meta(get_the_ID(), 'viewpoint_meta_value_key', true); ?></cite>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Cooperation -->
    <section id="cooperation">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- Heading mode -->
            <div class="heading-mode heading-mode-light m-0">
              <h2><?php echo __(get_option('irantheme_front_cooperation_title')); ?></h2>
              <p><?php echo __(get_option('irantheme_front_cooperation_description')); ?></p>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- Button style -->
            <a href="<?php echo esc_url(get_option('irantheme_front_cooperation_link')); ?>" class="button-style button-light">
              شروع کار<i class="lni lni-chevron-left"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Information -->
    <section id="information">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <!-- Email -->
            <div class="info-item">
              <a href="mail:<?php echo __(get_option('irantheme_general_email')); ?>"><i class="lni lni-envelope"></i></a>
              <div>
                <cite>ایمیل</cite>
                <span><?php echo __(get_option('irantheme_general_email')); ?></span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- Phone -->
            <div class="info-item">
              <a href="tel:<?php echo __(get_option('irantheme_general_telephone')); ?>"><i class="lni lni-phone"></i></a>
              <div>
                <cite>تلفن</cite>
                <span><?php echo __(get_option('irantheme_general_telephone')); ?></span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- Address -->
            <div class="info-item">
              <i class="lni lni-map-marker"></i>
              <div>
                <cite>آدرس</cite>
                <span><?php echo __(get_option('irantheme_general_address')); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer id="footer">
      <div class="container">
        <!-- Social media -->
        <div class="social-media-footer">
          <?php
          // Get template part of social media
          get_template_part('/template-parts/content', 'social-media');
          ?>
        </div>
        <!-- Copyright -->
        <div class="copyright">
          <?php echo __(get_option('irantheme_copyright')); ?>
        </div>
      </div>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>