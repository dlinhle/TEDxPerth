<?php
/**
 * @file
 * Here we template the page contenttype.
 */

?>
<h3><?php print render($content['field_category'])?></h3>
<div class="grid_8 alpha">
  <h1 class="single-title"><?php print $title; ?></h1>
</div>

<div class="grid_10 alpha omega">
  <?php 
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>
</div>
