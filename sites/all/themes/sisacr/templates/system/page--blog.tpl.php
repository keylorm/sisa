<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 */
?>
<header class="header" role="banner">
 
  <div class="grid">
  <?php if ($page['utility_bar']): ?>
    <div class="utility-bar">
      <?php print render($page['utility_bar']); ?>
    </div><!-- end utility bar -->
  <?php endif; ?>


  <?php if ($logo): ?>
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </a>
  <?php endif; ?>

  <?php if ($site_name || $site_slogan): ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>

          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>

        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <?php print $site_slogan; ?>
      <?php endif; ?>

  <?php endif; ?>

  <?php print render($page['header']); ?>
</div>
</header>

<?php if ($page['above_content']): ?>
  <section class="above-content">
    <?php print render($page['above_content']); ?>
  </section>
<?php endif; // end Above Content ?>

<div class="main-content">
  <?php if ($breadcrumb): ?>
    <?php print $breadcrumb; ?>
  <?php endif; ?>

  <?php if ($page['highlighted']): ?>
    <?php print render($page['highlighted']); ?>
  <?php endif; ?>
   <?php if ($messages): ?>
  <div class="messages-wrapper">
    <div class="messages-content">
      <?php print $messages; ?>
    </div>
    <!--<a href="#" id="messages-toggle"><?php print t('Close');?></a>-->
  </div>
  <?php endif; ?>

    <a id="main-content"></a>
    <div class="main" role="main">
    

      <?php if ($tabs): ?>
        <?php print render($tabs); ?>

      <?php endif; ?>

      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>

    </div>

  <?php if ($page['sidebar_first']): ?>
    <div id="sidebar-first" class="">
      <?php print render($page['sidebar_first']); ?>
    </div> <!-- /.section, /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <div id="sidebar-second" class="">
      <?php print render($page['sidebar_second']); ?>
    </div> <!-- /.section, /#sidebar-second -->
  <?php endif; ?>
</div>

<?php if ($page['below_content']): ?>
  <section class="below-content">
    <?php print render($page['below_content']); ?>
  </section>
<?php endif; // end Below Content ?>

<footer class="footer" role="contentinfo">
  <?php if ($page['footer']): ?>
    <div class="footer-full-width full-width">
      <?php print render($page['footer']); ?>
    </div>
  <?php endif; // end Footer Full ?>

  <?php if ($page['footer_left'] || $page['footer_center'] || $page['footer_right']): ?>
    <div class="footer-content">
      <div class="footer-left-col col-1-3">
        <?php print render($page['footer_left']); ?>
      </div>
      <div class="footer-center-col col-1-3">
        <?php print render($page['footer_center']); ?>
      </div>
      <div class="footer-right-col col-1-3">
        <?php print render($page['footer_right']); ?>
      </div>
  </div>
  <?php endif; // end Footer Cols ?>
</footer>

<?php if ($page['closure']): ?>
<aside class="closure">
  <?php print render($page['closure']); ?>
</aside>
<?php endif; // end closure ?>



