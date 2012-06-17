<?php
/**
 * @file
 * Here we template the basic page.
 */

?>
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- HEADER -->
  <div class="header">
    <div class="container_16">
      <div class="grid_8">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="front-link">
            <h1 class="logo">
              <img src="<?php print $logo; ?>" alt="TEDxPerth" />
              <?php if ($site_name): ?>
                <?php print $site_name; ?>
              <?php endif; ?>
              <?php if ($site_slogan): ?>
                <?php print "' - ',$site_slogan"; ?>
              <?php endif; ?>
            </h1>
          </a>
        <?php endif; ?>
      </div>

      <!-- NEXT EVENT -->	
      <div class="grid_8">
        <div class="next-event-name">
          <?php print theme_get_setting('next_event_name'); ?><!-- print the templatesettings chosen next event information -->
        </div>
        <div class="next-event-divider">-</div><!-- - with text-indent for non-css views -->	
        <div class="next-event-info">
          <?php print theme_get_setting('next_event_info'); ?>
        </div>
      </div>
    </div>
  </div>

<!-- PRIMARY MENU -->
  <div class="primary-menu">
    <div class="container_16">
      <div class="grid_13">
        <?php print render($page['primary_menu']); ?>
      </div>
      <div class="grid_3">
        <?php print render($page['search']); ?>
      </div>
    </div>
  </div>

  <!-- DRUPAL MESSAGES AND OPTIONS -->
  <?php if ($messages || $tabs || $action_links): ?>
    <div class="container_16">
      <div class="grid_16">
        <?php if ($page['highlight']): ?>
          <div id="highlight"><?php print render($page['highlight']) ?></div>
        <?php endif; ?>
        <?php print $messages; ?>
        <?php print render($page['help']); ?>

        <?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?></div>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <!-- MAIN PAGE CONTENT -->
    <div class="container_16 clearfix">
      <div class="grid_11">
        <div class="grid_10 alpha omega">
          <?php print render($page['content']) ?>
        </div>
      </div>
      <div class="grid_1"></div>
      <div class="grid_5 sidebar">
        <?php print render($page['sidebar']); ?>
      </div>
    </div>

  <!-- FOOTER -->
  <div class="footer">
    <div class="container_16">
      <div class="grid_3">
        <?php print render($page['footer-column-1']); ?>
      </div>
      <div class="grid_4">
        <?php print render($page['footer-column-2']); ?>
      </div>
      <div class="grid_7">
        <?php print render($page['footer-column-3']); ?>
      </div>
      <div class="grid_2">
        <?php print render($page['footer-column-4']); ?>
      </div>
    </div>
  </div>

<!-- END PAGE -->
</div>
