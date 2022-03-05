<!-- Partners -->
<section id="partners">
  <div id="parallax-front-partners" class="parallax-container">
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