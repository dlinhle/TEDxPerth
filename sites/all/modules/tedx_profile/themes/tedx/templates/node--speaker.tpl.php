<?php
/**
 * @file
 * Here we template the speaker contenttype.
 */

?>
<h3>Speakers</h3>
<div class="grid_8 alpha">
  <h1 class="single-title"><?php print $title; ?></h1>
</div>
<div class="grid_2 omega social-single">
  <?php
    if ($content['field_googleplus']):
      print '<a href="' . $content['field_googleplus']['#items']['0']['value'] . '" target="_blank"><img src="' . base_path() . path_to_theme() . '/images/social/google_16.png" /></a>';

    elseif ($content['field_facebook']):
      print '<a href="' . $content['field_facebook']['#items']['0']['value'] . '" target="_blank"><img src="' . base_path() . path_to_theme() . '/images/social/facebook_16.png" /></a>';

    elseif ($content['field_linkedin']):
      print '<a href="' . $content['field_linkedin']['#items']['0']['value'] . '" target="_blank"><img src="' . base_path() . path_to_theme() . '/images/social/linkedin_16.png" /></a>';

    elseif ($content['field_twitter']):
      print '<a href="' . $content['field_twitter']['#items']['0']['value'] . '" target="_blank"><img src="' . base_path() . path_to_theme() . '/images/social/twitter_16.png" /></a>';
    endif;
  ?>
</div>

<div class="grid_10 alpha omega">
  <?php
    // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_image']);
      hide($content['field_googleplus']);
      hide($content['field_facebook']);
      hide($content['field_linkedin']);
      hide($content['field_twitter']);
      print render($content['field_image']);
      print render($content);
  ?>
</div>
