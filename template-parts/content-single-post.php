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
      <?php if (!is_page()) : ?>
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
      <?php endif; ?>

      <div class="post-text pt-3">
        <?php the_content(); ?>
      </div>

      <div class="d-flex flex-row pt-3">
        <?php if (!is_page()) : ?>
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
        <?php endif; ?>

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