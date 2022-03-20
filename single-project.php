<?php get_header(); ?>

<!-- Blog content -->
<section id="blog-content">
  <div class="container-holder">
    <div class="container-fluid">
      <div class="row flex-lg-row-reverse">
        <div class="col-lg-8">

          <?php while (have_posts()) : the_post(); ?>
            <?php
            // Get template part of single post
            get_template_part('/template-parts/content/content', 'single-post');
            ?>

            <?php


            global $wp_query;
            $term = $wp_query->get_queried_object();

            $wp_query = new WP_Query(array(
              'post_type'         => 'like',
              // 'posts_per_page'    => -1, // -1 =  show all posts
              // 'tax_query'         => array(array('terms' => $term->term_id)),
            ));

            echo $wp_query->found_posts;

            echo '<br>';

            echo get_the_ID() . '  *  ';

            while ($wp_query->have_posts()) {
              $wp_query->the_post();
              echo get_the_ID() . ' - ';
            }
            wp_reset_postdata();
            ?>

            <?php
            // Get template part of post author
            get_template_part('/template-parts/components/component', 'author-post-single');
            ?>

            <?php
            // Get template part of related post
            get_template_part('/template-parts/content/content', 'related-post');
            ?>

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