<?php
/**
 * @file
 * Here we override the default html output of drupal.
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces; ?>>

  <head profile="<?php print $grddl_profile; ?>">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <script type="text/javascript" src="http://fast.fonts.com/jsapi/810db20f-76e3-49a2-b0a7-38179a6232d9.js"></script>
    <meta property="og:image" content="<?php global $base_root; print $base_root . '/' . path_to_theme(); ?>/images/TEDxEutropolis-avatar.png"/>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>