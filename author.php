<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row flex-lg-row-reverse">
        <div class="col-lg-8 px-0">
          <!-- Author profile -->
          <div class="author-profile">
            <div class="post-box">
              <div class="post-content">
                <?php
                $author = get_user_by('slug', get_query_var('author_name'));
                $date_raw = get_the_author_meta('user_registered', $author->ID);
                $date_str = explode(' ', $date_raw);
                $date_split = explode('-', $date_str[0]);
                $date_year = $date_split[0];
                $date = date('Y') - $date_year;
                // echo $author->ID;
                ?>
                <div class="author-profile-holder">
                  <!-- Author profile avatar -->
                  <div class="author-profile-avatar">
                    <?php echo get_avatar($author->ID, '200'); ?>
                  </div>
                  <!-- Author profile info -->
                  <div class="author-profile-info">
                    <h3><?php echo __($author->display_name); ?></h3>
                    <cite><?php echo __($author->nickname); ?></cite>
                    <span>
                      <?php
                      if ($date < 1) {
                        echo __('کم تر از 1 سال عضویت در ' . get_bloginfo('name'));
                      } else {
                        echo __('بیشتر از ' . $date . 'سال عضویت در ' . get_bloginfo('name'));
                      }
                      ?>
                    </span>
                    <p><?php echo __($author->description); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php if (have_posts()) : ?>
            <!-- All posts -->
            <main class="grid-masonry">
              <div class="grid-sizer"></div>
              <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('/template-parts/content', 'post'); ?>
              <?php endwhile; ?>
            </main>
          <?php endif; ?>
          <?php if (paginate_links()) : ?>
            <!-- Pagination -->
            <div class="pagination">
              <?php echo paginate_links(array(
                'prev_text' => 'صفحه قبل',
                'next_text' => 'صفحه بعد'
              )); ?>
            </div>
          <?php endif; ?>
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