<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head();?>
</head>

<body id="top" <?php body_class();?>>

  <!-- Navigation -->
  <nav id="navigation">
    <div class="text-center pt-3">
      <!-- Back nav -->
      <button id="back-nav" class="button-style button-dark">بازگشت<i class="lni lni-chevron-left"></i></button>
    </div>
    <!-- Logo -->
    <div class="logo">
      <h1><?php bloginfo('name');?></h1>
      <p><?php bloginfo('description');?></p>
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
      <?php
      // Get image src (Full size)
      $blog_header_bg = wp_get_attachment_image_src(get_option('irantheme_blog_header_bg'), 'full');
      ?>
      <div class="parallax-container" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo esc_url($blog_header_bg[0]); ?>"
        data-position-x="left">
        <div class="container-fluid p-0">
          <!-- Main menu -->
          <div class="main-menu">
            <button id="nav-toggle">
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
              <?php irantheme_custom_breadcrumbs();?>
              <!-- Options -->
              <div class="options">
                <div class="options-layer">
                  <!-- Social network -->
                  <ul class="social-networks">
                    <li><a class="search-alt" href="#search-form"><i class="lni lni-search-alt"></i></a></li>
                    <li><a href="#"><i class="lni lni-facebook"></i></a></li>
                    <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                    <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                  </ul>
                  <?php
                    $today = null;
                    if (function_exists( 'parsidate' )) {
                      $today = parsidate( 'j F Y', date( 'F j Y' ), 'per' );
                    } else {
                      $today = date( 'F j Y' );
                    }
                  ?>
                  <span>امروز‌ : <?php echo $today; ?></span>
                </div>
              </div>
              <!-- Main info -->
              <?php
              $args = array();
              // Check title, subtitle
              if ( is_home() ) {
                $args['title'] = 'وبلاگ';
                $args['subtitle'] = 'آخرین مطالب ما را در این صفحه مشاهده می کنید.';
              } else if ( is_archive() ) {
                $args['title'] = get_the_archive_title();
                $args['subtitle'] = get_the_archive_description();
              } else {
                $args['title'] = 'ناشناخته';
                $args['subtitle'] = 'ناشناخته';
              }
              ?>
              <div class="heading-main-info">
                <h1><?php echo $args['title']; ?></h1>
                <p><?php echo $args['subtitle']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Search form -->
    <section id="search-form">
      <div class="container-holder">
        <div class="container">
          <!-- Search box -->
          <div class="search-box">
            <input type="text" class="search-input" placeholder="به دنبال چیزی هستید؟">
            <span class="search-case search-case-alt">
              <i id="search-alt" class="lni lni-search-alt"></i>
              <i id="spinner-alt" class="animate-rotate"></i>
            </span>
            <span class="search-case" id="search-form-close" data-type="close" data-search="0"><i
                class="lni lni-close"></i></span>
            <!-- Search results -->
            <div class="search-results">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <!-- List post item -->
                  <div class="list-post-style list-post-dark">
                    <div class="list-post-style-img">
                      <a href="#">
                        <img src="https://source.unsplash.com/random/200x200?sig=1" alt="تصویر پست">
                      </a>
                    </div>
                    <div class="list-post-style-content">
                      <h3><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                      <span>۲۷ اردیبهشت ۱۴۰۰</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <!-- List post item -->
                  <div class="list-post-style list-post-dark">
                    <div class="list-post-style-img">
                      <a href="#">
                        <img src="https://source.unsplash.com/random/200x200?sig=2" alt="تصویر پست">
                      </a>
                    </div>
                    <div class="list-post-style-content">
                      <h3><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                      <span>۲۷ اردیبهشت ۱۴۰۰</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <!-- List post item -->
                  <div class="list-post-style list-post-dark">
                    <div class="list-post-style-img">
                      <a href="#">
                        <img src="https://source.unsplash.com/random/200x200?sig=3" alt="تصویر پست">
                      </a>
                    </div>
                    <div class="list-post-style-content">
                      <h3><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h3>
                      <span>۲۷ اردیبهشت ۱۴۰۰</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>