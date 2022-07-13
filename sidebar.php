<?php if (is_active_sidebar('sidebar-widget')) : ?>
  <?php dynamic_sidebar('sidebar-widget'); ?>
  <?php else : ?>
    <?php echo 'برای استفاده از سایدبار کافیست در منوی "نمایش > ابزارک ها" ابزار های مورد نیاز خود را اضافه نمایید.' ?>
<?php endif ?>
