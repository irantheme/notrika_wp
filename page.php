<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row flex-lg-row-reverse">
        <div class="col-lg-8">
          <?php while (have_posts()) : the_post(); ?>
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
                  </div>
                <?php endif; ?>
                <!-- Holder -->
                <div class="post-content">

                  <div class="post-text">
                    <?php the_content(); ?>
                  </div>

                  <div class="d-flex flex-row">
                    <!-- Post share -->
                    <div class="post-share">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در فیس بوک"><i class="lni lni-facebook"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در توئیتر"><i class="lni lni-twitter"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در لینکدین"><i class="lni lni-linkedin"></i></a>
                      <a href="#" data-toggle="tooltip" data-placement="top" title="اشتراک در پینترست"><i class="lni lni-pinterest"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>
          <?php endwhile; ?>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>