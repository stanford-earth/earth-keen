<?php
/**
 * @file
 * Display Suite Figure template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $credit: Rendered content for the "Credit" region.
 * - $credit_classes: String of classes that can be used to style the "Credit" region.
 *
 * - $figure: Rendered content for the "Figure" region.
 * - $figure_classes: String of classes that can be used to style the "Figure" region.
 *
 * - $caption: Rendered content for the "Caption" region.
 * - $caption_classes: String of classes that can be used to style the "Caption" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $credit_wrapper; ?> class="ds-credit<?php print $credit_classes; ?>">
      <?php print $credit; ?>
    </<?php print $credit_wrapper; ?>>

    <<?php print $figure_wrapper; ?> class="ds-figure<?php print $figure_classes; ?>">
      <?php print $figure; ?>
    </<?php print $figure_wrapper; ?>>

    <<?php print $caption_wrapper; ?> class="ds-caption<?php print $caption_classes; ?>">
      <?php print $caption; ?>
    </<?php print $caption_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
