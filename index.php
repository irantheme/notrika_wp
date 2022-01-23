<?php get_header(); ?>

<?php
$args = array(
  'post_type' => array( 'post' )
);
$blog_post_type = new WP_Query( $args );

if ( $blog_post_type->have_posts() ) : 
?>
<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid px-0">
      <!-- All posts -->
      <main class="grid-masonry">
        <div class="grid-sizer"></div>
        <?php while ( $blog_post_type->have_posts() ) : $blog_post_type->the_post(); ?>
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
  </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>