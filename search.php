<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row flex-lg-row-reverse">
        <div class="col-lg-8 px-0">

          <?php
          $allQueryPosts = new WP_Query(array(
            'post_type' => array('post', 'projects'),
            'order' => 'DESC',
            'orderby' => 'date'
          ));
          ?>
          <?php if ($allQueryPosts->have_posts()) : ?>
            <!-- All posts -->
            <main class="grid-masonry">
              <div class="grid-sizer"></div>
              <?php while ($allQueryPosts->have_posts()) : $allQueryPosts->the_post(); ?>

                <?php
                // Get template part of post archive
                get_template_part('/template-parts/content', 'post');
                ?>

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