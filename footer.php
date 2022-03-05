    <!-- Footer -->
    <footer id="footer-blog">

      <?php
      // Get template part of headline
      get_template_part('/template-parts/content', 'headline');
      ?>

      <?php
      // Get template part of copyright
      get_template_part('/template-parts/content', 'copyright');
      ?>

    </footer>
    </div>

    <?php wp_footer(); ?>
    </body>

    </html>