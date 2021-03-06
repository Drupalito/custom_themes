<?php

/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page" class="page">

  <div class="page-banner banner">
    <header id="banner" role="banner" class="banner__region container">
      <div class="row row-sm-height">
        <div class="col-xs-12 col-sm-8">
          <?php print $site_logo; ?>
          <button class="hamburger hamburger--collapse visible-xs-inline-block" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
        </div>
        <div class="col-xs-12 col-sm-4 noprint">
          <div class="branding">
            <?php print render($page['header']); ?>
          </div>
        </div>
      </div>
    </header>
  </div>

  <?php
  $region_navigation = render($page['navigation']);
  if ($region_navigation): ?>
    <div class="page-navigation navigation<?php print $navigation_fixed; ?> noprint">
      <nav id="navigation" role="navigation" aria-label="<?php print t('Primary navigation'); ?>" class="navigation__region container">
        <div class="row">
          <?php print $region_navigation; ?>
        </div>
      </nav>
    </div>
  <?php endif; ?>

  <div class="page-container">
    <?php
    $region_full_screen = render($page['full_screen']);
    if ($region_full_screen): ?>
      <div class="page-hero noprint">
        <div id="hero" class="hero__region">
          <?php print $region_full_screen; ?>
        </div>
      </div>
    <?php endif; ?>
    <div class="page-wrapper">
      <div id="container" class="container__region container">
        <div class="row">

          <?php print render($page['breadcrumb']); ?>

          <?php // Render the sidebars to see if there's anything in them.
            $sidebar_first = render($page['sidebar_first']);
            if ($sidebar_first): ?>
            <div class="aside aside--left col-xs-12 col-sm-4">
              <aside id="aside_left" role="complementary" class="aside__region">
                <?php print $sidebar_first; ?>
              </aside>
            </div>
          <?php endif; ?>

          <div<?php print $content_attributes; ?>>

            <?php if ($messages): ?>
              <?php print $messages; ?>
            <?php endif; ?>
            <?php print render($page['highlighted']); ?>
            <?php print render($page['help']); ?>

            <main id="main" class="main" role="main">
              <?php print render($main_prefix); ?>
              <?php print render($title_prefix); ?>
              <?php if ($title): ?>
                <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print render($tabs); ?>
              <?php print render($title_suffix); ?>
              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>
              <?php print render($page['content']); ?>
              <?php print $feed_icons; ?>
              <?php print render($main_suffix); ?>
            </main>
          </div>

          <?php // Render the sidebars to see if there's anything in them.
            $sidebar_second = render($page['sidebar_second']);
            if ($sidebar_second): ?>
            <div class="aside aside--right col-xs-12 col-sm-4">
              <aside id="aside_right" role="complementary" class="aside__region">
                <?php print $sidebar_second; ?>
              </aside>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php
  $region_footer = render($page['footer']);
  if ($region_footer): ?>
    <div class="page-contentinfo contentinfo">
      <footer id="contentinfo" role="contentinfo" class="contentinfo__region container">
        <div class="row">
          <?php print $region_footer; ?>
        </div>
      </footer>
    </div>
  <?php endif; ?>

</div>
