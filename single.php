<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row flex-lg-row-reverse">
        <?php while (have_posts()) : the_post(); ?>
          <div class="col-lg-8">
            <!-- Single post -->
            <article class="single-post">
              <?php
              // Get all category of posts
              $categories = get_the_category();
              $categories_output = '';

              // // Get post format
              // $post_format = get_post_format();

              // // Get gallery post, (true, false) -> related to html output or data
              // $gallery_post = get_post_gallery( get_the_ID(), false );

              // // Init url video
              // $video_url =  wp_get_attachment_url( get_the_ID() );
              // $videoElement = wp_video_shortcode( array( 'src' => esc_url( $video_url ) ) );
              ?>
              <!-- Post info -->
              <div class="post-box">

                <?php if (has_post_thumbnail()) : ?>
                  <!-- Post thumbnail -->
                  <div class="post-thumbnail">
                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="تصویر مطلب">
                    <?php if (!empty($categories)) : ?>
                      <!-- Post category -->
                      <div class="post-category">
                        <?php
                        foreach ($categories as $category) {
                          $categories_output .= '<span>' . __($category->name) . '</span>';
                        }
                        echo trim($categories_output, '');
                        ?>
                      </div>
                    <?php endif; ?>
                  </div>
                  <?php else :
                  if (!empty($categories)) : ?>
                    <!-- Post category -->
                    <div class="post-category">
                      <?php
                      foreach ($categories as $category) {
                        $categories_output .= '<a href=" ' . esc_attr($category->link) . '">' . __($category->name) . '</a>';
                      }
                      echo trim($categories_output, '');
                      ?>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
                <!-- Holder -->
                <div class="post-content">
                  <!-- Heading -->
                  <div class="post-heading">
                    <!-- Date -->
                    <span><i class="lni lni-calendar"></i><?php echo get_the_date('j, F Y'); ?></span>
                    <h2><?php echo get_the_title(); ?></h2>
                  </div>
                  <?php
                  // Counter of like
                  $likeCount = new WP_Query(array(
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
                  <div class="post-list-options">
                    <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
                    <span><i class="lni lni-heart"></i><?php echo __($likeCount->found_posts); ?> پسندشده</span>
                  </div>
                  <!-- Author -->
                  <div class="post-author">
                    <div>
                      <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="آواتاز نویسنده">
                      <div>
                        <?php echo get_the_author_posts_link(); ?>
                        <span><?php echo get_the_author_meta('nickname'); ?></span>
                        <p><?php echo get_the_author_meta('description'); ?></p>
                      </div>
                    </div>
                  </div>
                  <?php if (has_tag()) : ?>
                    <!-- Tags -->
                    <div class="post-tags">
                      <?php the_tags('', '', ''); ?>
                    </div>
                  <?php endif; ?>

                  <div class="post-text pt-3">
                    <?php the_content(); ?>
                  </div>

                  <div class="d-flex flex-row pt-3">
                    <!-- Post like -->
                    <div class="post-like">
                      <?php
                      // Exist query
                      $existQuery = new WP_Query(array(
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
                      <button class="like-button" data-like="<?php echo __($existQuery->posts[0]->ID); ?>" data-post="<?php echo get_the_ID(); ?>" data-exists="">
                        <i class="lni lni-heart like-heart-no"></i>
                        <i class="lni lni-heart-filled like-heart-yes"></i>
                        <span>
                          <cite class="text-heart-yes">پسند شده</cite><cite class="text-heart-no">می پسندید ؟</cite><em class="like-count"><?php echo __($likeCount->found_posts); ?></em>
                        </span>
                      </button>
                    </div>
                    <!-- Post share -->
                    <div class="post-share">
                      <a target="_blank" href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در فیس بوک"><i class="lni lni-facebook"></i></a>
                      <a target="_blank" href="http://twitter.com/share?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در توئیتر"><i class="lni lni-twitter"></i></a>
                      <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php get_the_title(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در لینکدین"><i class="lni lni-linkedin"></i></a>
                      <a target="_blank" href="https://api.whatsapp.com/send?text=<?php the_title(); ?>:<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="اشتراک در واتس آپ"><i class="lni lni-whatsapp"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <?php
            $orig_post = $post;
            global $post;
            $related_category = get_the_category($post->ID);
            if ($related_category) :
              $category_ids = array();
              foreach ($related_category as $individual_category) {
                $category_ids[] = $individual_category->term_id;
              }
              if (get_post_type() == 'post') {
                $args = array(
                  'post_type' => 'post',
                  'category__in' => $category_ids,
                  'post__not_in' => array($post->ID),
                  'posts_per_page' => 8,
                  'ignore_sticky_posts' => 1
                );
              } else if (get_post_type() == 'projects') {
                $args = array(
                  'post_type' => 'projects',
                  'category__in' => $category_ids,
                  'post__not_in' => array($post->ID),
                  'posts_per_page' => 8,
                  'ignore_sticky_posts' => 1
                );
              }
              $my_query = new WP_Query($args);

              if ($my_query->have_posts()) : ?>
                <!-- Related posts -->
                <div class="related-post">
                  <!-- Swiper -->
                  <div class="swiper related-post-slider">
                    <div class="swiper-wrapper">
                      <?php
                      while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <!-- Item -->
                        <div class="swiper-slide">
                          <div class="post-box-space">
                            <?php if (has_post_thumbnail()) : ?>
                              <!-- Post image -->
                              <div class="post-image-space">
                                <a href="<?php echo get_the_permalink(); ?>" class="post-image-link">
                                  <!-- Post thumbnail -->
                                  <div class="post-thumbnail-space">
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="تصویر مطلب">
                                  </div>
                                </a>
                              </div>
                            <?php endif; ?>
                            <!-- Holder -->
                            <div class="post-content-space text-right">
                              <!-- Heading -->
                              <div class="post-heading-space">
                                <!-- Date -->
                                <span><i class="lni lni-calendar"></i><?php echo get_the_date('j, F Y'); ?></span>
                                <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                              </div>
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
                              <div class="post-list-options-space">
                                <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
                                <span><i class="lni lni-heart"></i><?php echo __($likeCountRel->found_posts); ?> پسندشده</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
            <?php
              endif;
            endif;
            $post = $orig_post;
            wp_reset_query();
            ?>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>
          </div>

        <?php endwhile; ?>
        <!-- Sidebar -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>