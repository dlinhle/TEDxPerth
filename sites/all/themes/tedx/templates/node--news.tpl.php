<?php
/**
 * @file
 * Here we template the news contenttype.
 */

?>
<h3>News</h3>
<div class="grid_8 alpha">
  <h1 class="single-title"><?php print $title; ?></h1>
  <div class="single-info">Posted on <?php print format_date($node->created, 'custom', 'F d Y'); ?> by <?php print $node->name; ?>
  </div>
</div>

<div class="grid_10 alpha omega">
  <?php 
  // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_image']);
    print render($content['field_image']);
    print render($content);
  ?>
</div>
