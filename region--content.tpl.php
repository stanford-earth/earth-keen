<?php if (!empty($content)): ?>
<div class="<?php print $classes; ?> clearfix">
  <?php
  // Only print content if not homepage
  if (!drupal_is_front_page()) { print $content; }
  ?>
</div>
<?php endif; ?> <!-- /.region -->
