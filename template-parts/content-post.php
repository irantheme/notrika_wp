<!-- Blog post -->
<div class="post-holder grid-item">
  <article class="post-box">
    <?php
    // Get all category of posts
    $categories = get_the_category();
    $categories_output = '';

    // Get post format
    $post_format = get_post_format();

    // Get gallery post, (true, false) -> related to html output or data
    $gallery_post = get_post_gallery( get_the_ID(), false );

    // Init url video
    $video_url =  wp_get_attachment_url( get_the_ID() );
    $videoElement = wp_video_shortcode( array( 'src' => esc_url( $video_url ) ) );
    ?>

    <div class="post-content">
      <!-- Post heading -->
      <div class="post-heading">
        <span><i class="lni lni-calendar"></i><?php echo get_the_date( 'j, F Y' ); ?></span>
        <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
      </div>
    </div>

    <?php if ( $post_format == 'video' && $videoElement ) : ?>
      <!-- Post video -->
      <div class="post-video">
        <?php echo $videoElement; ?>
      </div>

    <?php elseif ( $post_format == 'gallery' && $gallery_post ) : ?>
      <!-- Post gallery -->
      <div class="post-slider">
        <a href="<?php echo get_the_permalink(); ?>" class="post-slider-link">
          <!-- Swiper slider -->
          <div class="swiper gallery-swiper">
            <div class="swiper-wrapper">
              <?php if ( has_post_thumbnail() ) : ?>
              <div class="swiper-slide"><img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="تصویر اصلی"></div>
              <?php endif; ?>
              <?php foreach ( $gallery_post['src'] as $gallery_src ) : ?>
                <div class="swiper-slide"><img src="<?php echo esc_url( $gallery_src ); ?>" alt="گالری"></div>
              <?php endforeach; ?>
            </div>
            <!-- Slider buttons -->
            <div class="post-image-slider-buttons">
              <div class="post-image-next"><i class="lni lni-chevron-right"></i>
              </div>
              <div class="post-image-prev"><i class="lni lni-chevron-left"></i>
              </div>
            </div>
          </div>
        </a>
      </div>

    <?php elseif ( has_post_thumbnail() ) : ?>
      <!-- Post image -->
      <div class="post-image">
        <a href="<?php echo get_the_permalink(); ?>" class="post-image-link">
          <!-- Post thumbnail -->
          <div class="post-thumbnail">
            <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="تصویر مطلب">
          </div>
        </a>
      </div>
    <?php endif; ?>
    <!-- Post content -->
    <div class="post-content">

      <!-- Post author -->
      <div class="post-author">
        <div>
          <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="آواتاز نویسنده">
          <div>
            <?php echo get_the_author_posts_link(); ?>
            <span><?php echo get_the_author_meta( 'nickname' ); ?></span>
          </div>
        </div>
      </div>
      
      <!-- Post text -->
      <div class="post-text">
        <p><?php echo wp_trim_words( strip_shortcodes( get_the_excerpt() ), 35 ); ?></p>
      </div>
      <!-- Comments & Likes -->
      <!-- <div class="post-list-options">
        <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
        <span><i class="lni lni-heart"></i>۲۳ پسندشده</span>
      </div> -->

      <!-- Post category -->
      <div class="post-category">
        <?php
          foreach( $categories as $category ) {
            $categories_output .= '<a href=" ' . esc_attr( $category->link ) . '">' . __( $category->name ) . '</a><span>/</span>';
          }
          echo trim( $categories_output, '' );
        ?>
      </div>
      
    </div>
  </article>
</div>