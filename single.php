<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <?php while ( have_posts() ) : the_post(); ?>
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
          <div class="row">
            <div class="col-lg-5">
              <!-- Post info -->
              <div class="post-box">

                <?php if ( has_post_thumbnail() ) : ?>
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
                <!-- Holder -->
                <div class="post-content">
                  <!-- Heading -->
                  <div class="post-heading">
                    <!-- Date -->
                    <span><i class="lni lni-calendar"></i><?php echo get_the_date( 'j, F Y' ); ?></span>
                    <h2><?php echo get_the_title(); ?></h2>
                  </div>
                  <!-- Comments & Likes -->
                  <div class="post-list-options">
                    <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
                    <span><i class="lni lni-heart"></i>۲۳ پسندشده</span>
                  </div>
                  <!-- Author -->
                  <div class="post-author">
                    <div>
                      <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="آواتاز نویسنده">
                      <div>
                        <?php echo get_the_author_posts_link(); ?>
                        <span><?php echo get_the_author_meta( 'nickname' ); ?></span>
                        <p><?php echo get_the_author_meta( 'description' ); ?></p>
                      </div>
                    </div>
                  </div>
                  <?php if ( has_tag() ) : ?>
                    <!-- Tags -->
                    <div class="post-tags">
                      <?php the_tags( '', '', '' ); ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <!-- Post content -->
              <div class="post-box">
                <div class="post-content">
                  <div class="post-text">
                    <?php the_content(); ?>
                  </div>
                  <!-- Share & like -->
                  <div class="share-like">
                    <div class="share-like-holder">
                      <!-- Social media post -->
                      <div class="social-media">
                        <!-- Like -->
                        <button class="like-button"><i class="lni lni-heart"></i></button>
                        <!-- Share -->
                        <span>اشتراک گذاری</span>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در فیس بوک"><i
                            class="lni lni-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در توئیتر"><i
                            class="lni lni-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در لینکدین"><i
                            class="lni lni-linkedin"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در پینترست"><i
                            class="lni lni-pinterest"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
        
        <!-- After -->
        <div class="single-after">
          <div class="row">
            <div class="col-lg-5">
              <?php
              $orig_post = $post;
              global $post;
              $related_category = get_the_category( $post->ID );
              if ( $related_category ) : 
                $category_ids = array();
                foreach( $related_category as $individual_category ) {
                  $category_ids[] = $individual_category->term_id;
                }
                $args = array (
                  'category__in' => $category_ids,
                  'post__not_in' => array( $post->ID ),
                  'posts_per_page'=> 8,
                  'ignore_sticky_posts'=> 1
                );
                $my_query = new wp_query( $args );
  
                if ( $my_query->have_posts() ) :
                ?>
                <!-- Related posts -->
                <div class="related-post">
                  <!-- Swiper -->
                  <div class="swiper related-post-slider">
                    <div class="swiper-wrapper">
                    <?php
                    while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                      <!-- Item -->
                      <div class="swiper-slide">
                        <div class="post-box">
                          <?php if ( has_post_thumbnail() ) : ?>
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
                          <!-- Holder -->
                          <div class="post-content text-right">
                            <!-- Heading -->
                            <div class="post-heading">
                              <!-- Date -->
                              <span><i class="lni lni-calendar"></i><?php echo get_the_date( 'j, F Y' ); ?></span>
                              <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                            </div>
                            <!-- Comments & Likes -->
                            <div class="post-list-options">
                              <span><i class="lni lni-comments"></i><?php echo get_comments_number(); ?> دیدگاه</span>
                              <span><i class="lni lni-heart"></i>۲۳ پسندشده</span>
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
            </div>
            <div class="col-lg-7">
              <?php
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
              ?>
            </div>
          </div>
        </div>
        
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>