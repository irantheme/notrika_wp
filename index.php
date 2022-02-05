<?php get_header(); ?>

<?php

if (have_posts()) :
?>
  <!-- Blog content -->
  <section id="blog-content">
    <div class="container-holder">
      <div class="container-fluid">
        <div class="row flex-lg-row-reverse">
          <div class="col-lg-8 px-0">
            <!-- All posts -->
            <main class="grid-masonry">
              <div class="grid-sizer"></div>
              <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('/template-parts/content', 'post'); ?>
              <?php endwhile; ?>
            </main>
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

<?php endif; ?>

<?php get_footer(); ?>