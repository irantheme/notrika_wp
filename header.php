<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body id="top">

  <!-- Navigation -->
  <nav id="navigation">
    <div class="text-center">
      <!-- Back nav -->
      <button id="back-nav" class="button-style button-dark">بازگشت<i class="lni lni-chevron-left"></i></button>
    </div>
    <!-- Logo -->
    <div class="logo">
      <h1>نوتریکا</h1>
      <p>تفاوت ها را رقم خواهیم زد</p>
    </div>
    <!-- Navbar menu -->
    <div class="navbar-menu">
      <ul>
        <li><a href="#">خانه<i class="lni lni-chevron-left"></i></a></li>
        <li><a href="#">پروژه ها<i class="lni lni-chevron-left"></i></a></li>
        <li><a href="#">استخدام<i class="lni lni-chevron-left"></i></a></li>
        <li><a href="#">همکاران<i class="lni lni-chevron-left"></i></a></li>
        <li><a href="#">درباره<i class="lni lni-chevron-left"></i></a></li>
        <li><a href="#">تماس<i class="lni lni-chevron-left"></i></a></li>
      </ul>
    </div>
  </nav>

  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Wrapper mask -->
    <div id="wrapper-mask"></div>
    <!-- Header blog -->
    <header id="header-blog">
      <div class="parallax-container" data-parallax="scroll" data-speed="0.5" data-image-src="images/header.jpg"
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
              <div class="breadcrumbs">
                <ul>
                  <li><a href="#">پروژه ها</a></li>
                  <li><a href="#">هک و امنیت</a></li>
                  <li class="current"><span>لینوکس دروازه ای به سمت یادگیری</span></li>
                </ul>
              </div>
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
                  <span>امروز‌ : ۲۷ اردیبهشت ۱۴۰۰</span>
                </div>
              </div>
              <!-- Main info -->
              <div class="heading-main-info">
                <h1>وبلاگ</h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
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
          </div>
        </div>
      </div>
    </section>