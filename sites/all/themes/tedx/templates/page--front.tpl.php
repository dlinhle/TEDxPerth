<?php
/**
 * @file
 * Here we template the frontpage.
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
            </h1>
          </a>
        <?php endif; ?>
      </div>

      <!-- NEXT EVENT -->
      <div class="grid_8">

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

<!-- HIGHLIGHTER -->
  <div class="highlighter">
    <div class="highlighter-upload">
      <div class="highlighter-shadow-top"></div>
        <div class="highlighter-container">
          <div class="container_16">
            <img src="/sites/all/themes/tedx/images/splash_1.jpg" alt="TEDxPerth Splash">
         </div>
        </div>
      <div class="highlighter-shadow"></div>
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

  <!-- MAIN FRONTPAGE CONTENT -->
  <div class="container_16 clearfix columns">
    <div class="grid_7 column-1">
      <?php print render($page['front-column-1']); ?>
    </div>
    <div class="grid_4">
      <?php print render($page['front-column-2']); ?>
    </div>
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
