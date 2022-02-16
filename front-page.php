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
    <!-- Features -->
    <section id="features">
      <div class="container">
        <!-- Heading mode -->
        <div class="heading-mode heading-mode-light text-center">
          <h2>امکانات و خدمات</h2>
          <p>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
            استفاده از طراحان گرافیک است.
          </p>
        </div>
        <div class="row">
          <!-- Feature box -->
          <div class="col-lg-4">
            <aside class="feature-box">
              <div class="feature-icon"><i class="lni lni-menu"></i></div>
              <div class="feature-content">
                <h3>رعایت اصل سادگی</h3>
                <p>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با
                  تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                  گرافیک است.
                </p>
              </div>
            </aside>
          </div>
          <!-- Feature box -->
          <div class="col-lg-4">
            <aside class="feature-box">
              <div class="feature-icon"><i class="lni lni-code"></i></div>
              <div class="feature-content">
                <h3>طراحی و توسعه مدرن</h3>
                <p>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با
                  تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                  گرافیک است.
                </p>
              </div>
            </aside>
          </div>
          <!-- Feature box -->
          <div class="col-lg-4">
            <aside class="feature-box">
              <div class="feature-icon"><i class="lni lni-display"></i></div>
              <div class="feature-content">
                <h3>هوشمند و واکنش گرا</h3>
                <p>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با
                  تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                  گرافیک است.
                </p>
              </div>
            </aside>
          </div>
          <!-- Feature box -->
          <div class="col-lg-4">
            <aside class="feature-box">
              <div class="feature-icon"><i class="lni lni-reload"></i></div>
              <div class="feature-content">
                <h3>به روزرسانی</h3>
                <p>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با
                  تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                  گرافیک است.
                </p>
              </div>
            </aside>
          </div>
          <!-- Feature box -->
          <div class="col-lg-4">
            <aside class="feature-box">
              <div class="feature-icon"><i class="lni lni-support"></i></div>
              <div class="feature-content">
                <h3>پشتیبانی مداوم</h3>
                <p>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با
                  تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                  گرافیک است.
                </p>
              </div>
            </aside>
          </div>
          <!-- Feature box -->
          <div class="col-lg-4">
            <aside class="feature-box">
              <div class="feature-icon"><i class="lni lni-network"></i></div>
              <div class="feature-content">
                <h3>هماهنگی گروه مهدسین</h3>
                <p>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با
                  تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                  گرافیک است.
                </p>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- About list image -->
            <aside class="about-list-image">
              <ul>
                <li><img src="images/1.jpg" alt="تصویر اول" /></li>
                <li><img src="images/2.jpg" alt="تصویر دوم" /></li>
                <li><img src="images/3.jpg" alt="تصویر سوم" /></li>
              </ul>
            </aside>
          </div>
          <div class="col-lg-6">
            <!-- About content -->
            <aside class="about-content">
              <q>درباره ما</q>
              <h3>ما چه هستیم؟</h3>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                استفاده از طراحان گرافیک است.
              </p>
              <blockquote>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                کاربردی می باشد.
              </blockquote>
              <a href="#" class="button-style button-primary">بیشتر<i class="lni lni-chevron-left"></i></a>
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
          <h2>پروژه های ما</h2>
          <p>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
            استفاده از طراحان گرافیک است.
          </p>
        </div>
        <!-- Categories -->
        <div class="categories">
          <ul>
            <li><span class="active">همه</span></li>
            <li><span>طراحی و توسعه</span></li>
            <li><span>برنامه نویسی</span></li>
            <li><span>قالب وردپرس</span></li>
            <li><span>شبکه</span></li>
            <li><span>سخت افزار</span></li>
            <li><span>هک و امنیت</span></li>
          </ul>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <!-- Grid masonry -->
          <div class="grid-masonry">
            <div class="grid-sizer"></div>
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/1.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/2.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/3.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/4.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/5.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/6.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/7.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/8.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
            <!-- Post -->
            <div class="grid-item post-holder">
              <article class="post">
                <a href="#" class="post-link">
                  <!-- Post image -->
                  <div class="post-image">
                    <img src="images/9.jpg" alt="تصویر پروژه" />
                  </div>
                  <!-- Post content -->
                  <div class="post-content">
                    <!-- Post heading -->
                    <div class="post-heading">
                      <h2>طراحی و توسعه وب</h2>
                      <!-- Post categories -->
                      <ul class="post-categories">
                        <li><span>قالب وردپرس</span></li>
                        <li><span>لینوکس</span></li>
                      </ul>
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
          </div>
        </div>
        <!-- Load more -->
        <div class="load-more">
          <button class="button-load">
            پروژه های بیشتر<i class="lni lni-spinner"></i>
          </button>
        </div>
      </div>
    </section>
    <!-- Partners -->
    <section id="partners">
      <div class="parallax-container" data-speed="0.5" data-parallax="scroll" data-image-src="images/partner.jpg" data-position-x="left">
        <div class="container">
          <!-- Heading mode -->
          <div class="heading-mode heading-mode-light text-center">
            <h2>برخی از مشتریان و دیدگاهشان</h2>
            <p>
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
              استفاده از طراحان گرافیک است.
            </p>
          </div>
          <!-- Partners brands -->
          <div class="partners-brands">
            <!-- Swiper -->
            <div class="swiper partners-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/logo-1.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-2.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-3.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-4.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-5.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-6.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-1.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-2.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-3.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-4.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-5.png" alt="تصویر برند" />
                </div>
                <div class="swiper-slide">
                  <img src="images/logo-6.png" alt="تصویر برند" />
                </div>
              </div>
            </div>
          </div>
          <!-- Viewpoint -->
          <div class="swiper viewpoint">
            <div class="swiper-wrapper">
              <!-- Viewpoint item -->
              <div class="swiper-slide">
                <blockquote>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                  و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                  تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                  کاربردی می باشد.
                </blockquote>
                <b>ایمان ساسانی</b>
                <cite>توسعه دهنده وب</cite>
              </div>
              <!-- Viewpoint item -->
              <div class="swiper-slide">
                <blockquote>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                  و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                  تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                  کاربردی می باشد.
                </blockquote>
                <b>ایمان ساسانی</b>
                <cite>توسعه دهنده وب</cite>
              </div>
              <!-- Viewpoint item -->
              <div class="swiper-slide">
                <blockquote>
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                  با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
                  و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                  تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                  کاربردی می باشد.
                </blockquote>
                <b>ایمان ساسانی</b>
                <cite>توسعه دهنده وب</cite>
              </div>
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
              <h2>شروع همکاری</h2>
              <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                استفاده از طراحان گرافیک است.
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- Button style -->
            <button class="button-style button-light">
              شروع کار<i class="lni lni-chevron-left"></i>
            </button>
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
              <i class="lni lni-envelope"></i>
              <div>
                <cite>ایمیل</cite>
                <span>youremail@email.com</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- Phone -->
            <div class="info-item">
              <i class="lni lni-phone"></i>
              <div>
                <cite>تلفن</cite>
                <span>031123456789</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <!-- Address -->
            <div class="info-item">
              <i class="lni lni-map-marker"></i>
              <div>
                <cite>آدرس</cite>
                <span>ایران - اصفهان - مارنان - پل مارنان</span>
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
          <a href=""><i class="lni lni-facebook"></i></a>
          <a href=""><i class="lni lni-twitter"></i></a>
          <a href=""><i class="lni lni-linkedin"></i></a>
        </div>
        <!-- Copyright -->
        <div class="copyright">
          کلیه حقوق مادی و معنوی این سایت محفوظ است.
        </div>
      </div>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>