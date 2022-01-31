<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 p-0">
          <div class="container-padding">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quibusdam architecto exercitationem quo consectetur autem eligendi, culpa, voluptates ut repudiandae repellendus asperiores molestias nesciunt pariatur voluptatum sed, ab voluptate fuga.
          </div>
        </div>
        <?php if ( have_posts() ) : ?>
          <div class="col-lg-8 p-0">
            <!-- All posts -->
            <main class="grid-masonry">
              <div class="grid-sizer"></div>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( '/template-parts/content', 'post' ); ?>
              <?php endwhile; ?>
            </main>
            <?php if ( paginate_links() ) : ?>
              <!-- Pagination -->
              <div class="pagination">
                <?php echo paginate_links( array(
                  'prev_text' => 'صفحه قبل',
                  'next_text' => 'صفحه بعد'
                ) ); ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>