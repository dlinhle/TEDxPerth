<?php
/**
 * @file
 * Here we template the video contenttype.
 */

?>
<h3>Videos</h3>
<div class="grid_12 alpha">
    <h1 class="single-title"><?php print $title; ?></h1>
</div>

<div class="grid_10 alpha omega">
    <?php if (!empty($content['field_vimeocode'])): ?>
    <iframe src="http://player.vimeo.com/video/<?php print $content['field_vimeocode']['#items']['0']['value']; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ff2b06" width="580" height="326" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
    <?php endif;?>

    <?php if (!empty($content['field_youtubecode'])):?>
    <iframe width="580" height="295" src="http://www.youtube.com/embed/<?php print $content['field_youtubecode']['#items']['0']['value'];?>" frameborder="0" allowfullscreen></iframe>
    <?php endif;?>

    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_image']);
    hide($content['field_vimeocode']);
    hide($content['field_youtubecode']);
    print render($content);
    ?>
</div>
