<!-- Blog post -->
<div class="post-holder grid-item">
  <article class="post-box">
    <?php
    // Get all category of posts
    $categories = get_the_category();
    $categories_output = '';
    ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <!-- Post image -->
    <div class="post-image">
      <a href="<?php echo get_the_permalink(); ?>" class="post-image-link">
        <!-- Post thumbnail -->
        <div class="post-thumbnail">
          <img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="تصویر مطلب">
          <?php if ( !empty( $categories ) ) : ?>
          <!-- Post categories -->
          <div class="post-categories">
            <?php
            foreach( $categories as $category ) {
              $categories_output .= '<span>' . __( $category->name ) . '</span>';
            }
            echo trim( $categories_output, '' );
            ?>
          </div>
          <?php endif; ?>
        </div>
      </a>
    </div>
    <?php else :
    if ( ! empty( $categories ) ) : ?>
    <!-- Post category -->
    <div class="post-category">
      <?php
        foreach( $categories as $category ) {
          $categories_output .= '<a href=" ' . esc_attr( $category->link ) . '">' . __( $category->name ) . '</a>';
        }
        echo trim( $categories_output, '' );
      ?>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <!-- Post content -->
    <div class="post-content">
      <!-- Post heading -->
      <div class="post-heading">
        <span><i class="lni lni-calendar"></i><?php echo get_the_date( 'j, F Y' ); ?></span>
        <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
      </div>
      <!-- Post text -->
      <div class="post-text">
        <p><?php echo wp_trim_words( strip_shortcodes( get_the_excerpt() ), 43 ); ?></p>
      </div>
      <!-- Comments & Likes -->
      <div class="post-list-options">
        <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
        <span><i class="lni lni-heart"></i>۲۳ پسندشده</span>
      </div>
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
    </div>
  </article>
</div>