<?php
/**
 * @file
 * Display Suite Grid template.
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
 * - $media: Rendered content for the "Media" region.
 * - $media_classes: String of classes that can be used to style the "Media" region.
 *
 * - $text: Rendered content for the "Text" region.
 * - $text_classes: String of classes that can be used to style the "Text" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $media_wrapper; ?> class="ds-media gallery hd<?php print $media_classes; ?>">
      <?php print $media; ?>
    </<?php print $media_wrapper; ?>>

    <<?php print $text_wrapper; ?> class="ds-text bd<?php print $text_classes; ?>">
      <?php print $text; ?>
    </<?php print $text_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
