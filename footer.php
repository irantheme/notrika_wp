    <!-- Footer -->
    <footer id="footer-blog">
      <!-- Headline -->
      <div class="headline">
        <div class="container-holder">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 py-4">
                <!-- About -->
                <div class="footer-heading">درباره</div>
                <div class="footer-about">
                  <p><?php echo __( get_option( 'irantheme_about_excerpt' ) ); ?></p>
                  <a href="<?php echo esc_url( get_option( 'irantheme_about_link' ) ); ?>">مشاهده بیشتر<i class="lni lni-chevron-left"></i></a>
                </div>
              </div>
              <div class="col-md-3 py-4">
                <!-- Latest posts -->
                <div class="footer-heading">آخرین مطالب</div>
                <?php
                $args = array(
                  'posts_per_page' => 2,
                  'post_type' => 'post'
                );
                $latest_blog_post = new WP_Query($args);
                while ( $latest_blog_post->have_posts() ) : $latest_blog_post->the_post();
                ?>
                <!-- List post item -->
                <div class="list-post-style">
                  <div class="list-post-style-img">
                    <a href="<?php echo get_the_permalink(); ?>">
                      <img src="<?php the_post_thumbnail_url( ); ?>" alt="تصویر پست">
                    </a>
                  </div>
                  <div class="list-post-style-content">
                    <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                    <span><?php echo get_the_date( 'j, F Y' ); ?></span>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
              <div class="col-md-3 py-4">
                <!-- Latest comments -->
                <div class="footer-heading">آخرین دیدگاه ها</div>
                <div class="footer-latest-comments">
                  <ul>
                    <!-- Item -->
                    <li>
                      <i class="lni lni-chevron-left"></i><span>محمد ملک زاده</span> در <a href="#">لورم ایپسوم متن
                        ساختگی با تولید سادگی نامفهوم</a>
                    </li>
                    <!-- Item -->
                    <li>
                      <i class="lni lni-chevron-left"></i><span>محمد ملک زاده</span> در <a href="#">لورم ایپسوم متن
                        ساختگی با تولید سادگی نامفهوم</a>
                    </li>
                    <!-- Item -->
                    <li>
                      <i class="lni lni-chevron-left"></i><span>محمد ملک زاده</span> در <a href="#">لورم ایپسوم متن
                        ساختگی با تولید سادگی نامفهوم</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 py-4">
                <!-- Tags -->
                <div class="footer-heading">برچسب ها</div>
                <div class="footer-tags">
                  <a href="#">طراحی و توسعه</a>
                  <a href="#">قالب وردپرس</a>
                  <a href="#">افزونه وردپرس</a>
                  <a href="#">وردپرس</a>
                  <a href="#">طراحی لوگو</a>
                  <a href="#">سئو</a>
                  <a href="#">آموزش وردپرس</a>
                  <a href="#">ادمین لینوکس</a>
                  <a href="#">آرچ لینوکس</a>
                  <a href="#">هک و امنیت</a>
                  <a href="#">شبکه</a>
                  <a href="#">کسب و کار</a>
                  <a href="#">بازاریابی</a>
                  <a href="#">الپیک</a>
                  <a href="#">ترمینال</a>
                  <a href="#">سیستم دی</a>
                  <a href="#">وی اس کد</a>
                  <a href="#">دی باس</a>
                  <a href="#">تور</a>
                  <a href="#">توئیتر</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright -->
      <div class="copyright">
        <div class="container-holder">
          <div class="container-fluid">
            <!-- Social networks -->
            <ul class="social-networks">
              <li><a href="#"><i class="lni lni-facebook"></i></a></li>
              <li><a href="#"><i class="lni lni-twitter"></i></a></li>
              <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
            </ul>
            <p>کلیه حقوق مادی و معنوی این سایت محفوظ است.</p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>