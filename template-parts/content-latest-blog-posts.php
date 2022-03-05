<?php
$front_latest_blog_posts = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 4
));
if ($front_latest_blog_posts->have_posts()) :
?>
  <!-- Latest blog posts -->
  <section id="latest-blog-posts">
    <div class="container">
      <!-- Heading mode -->
      <div class="heading-mode heading-mode-light">
        <h2>آخرین مطالب وبلاگ</h2>
      </div>
      <!-- List blog posts -->
      <div class="row">
        <?php while ($front_latest_blog_posts->have_posts()) : $front_latest_blog_posts->the_post(); ?>
          <!-- Item -->
          <div class="col-lg-6">
            <a href="<?php the_permalink(); ?>" class="post-box-little">
              <!-- Heading -->
              <div class="post-heading-little">
                <span><i class="lni lni-calendar"></i><?php echo get_the_date('j, F Y'); ?></span>
                <h3><?php the_title(); ?></h3>
              </div>
              <!-- Options -->
              <?php
              // Counter of like
              $likeCountRel = new WP_Query(array(
                'post_type' => 'like',
                'meta_query' => array(
                  array(
                    'key' => 'liked_meta_value_key',
                    'compare' => '=',
                    'value' => get_the_ID()
                  )
                )
              ));
              ?>
              <!-- Comments & Likes -->
              <div class="post-options-little">
                <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
                <span><i class="lni lni-heart"></i><?php echo __($likeCountRel->found_posts); ?> پسندشده</span>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>