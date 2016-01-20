<?php
/**
 * @file
 * Display Suite Article Image Right template.
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
 * - $image: Rendered content for the "Image" region.
 * - $image_classes: String of classes that can be used to style the "Image" region.
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

    <div class="article">
    <<?php print $header_wrapper; ?> class="ds-text<?php print $header_classes; ?>">
      <?php print $header	; ?>
    </<?php print $header_wrapper; ?>>
    <<?php print $text_wrapper; ?> class="<?php print $text_classes; ?>" style="margin-left: 0;">
    <<?php print $image_wrapper; ?> class="pull-right <?php print $image_classes; ?>">
      <?php print $image; ?>
    </<?php print $image_wrapper; ?>>
      <?php print $text; ?>
    </<?php print $text_wrapper; ?>>
    <<?php print $footer_wrapper; ?> class="<?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </<?php print $footer_wrapper; ?>>

    </div>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
