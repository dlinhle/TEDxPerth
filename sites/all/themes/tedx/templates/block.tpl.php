<?php
/**
 * @file
 * Here we override the default block output of drupal.
 */

?>
<div id="block-<?php print $block->module . '-' . $block->delta ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="block-inner">
    <?php print render($title_prefix); ?>

    <?php if ($block->subject): ?>
      <h3 class="block-title"<?php print $title_attributes; ?>><?php print $block->subject ?></h3>
    <?php endif;?>

    <?php print render($title_suffix); ?>

    <div class="content" <?php print $content_attributes; ?>>
      <?php print $content; ?>
    </div>

  </div>
</div> <!-- /block-inner /block -->
