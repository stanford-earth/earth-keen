<?
$mainsite = (strpos($site_name,'Earth, Energy') !== false) ? true: false;
?>
<div id="wrap" class="<? if (!empty($subsite_is_front)) : ?>subsite-front <? endif; ?><?php if ($site_title_position_classes): ?><?php print $site_title_position_classes; ?><?php endif; ?>"> <a href="#main" class="element-invisible element-focusable"><?php print t('Skip to content'); ?></a>
  <?php if ($main_menu): ?>
  <a href="#main-nav" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
  <?php endif; ?>
  <!-- /#skipnav -->
  <?php if ((($user->uid) && ($page['admin_shortcuts'])) || (($user->uid) && ($secondary_nav))): ?>
  <div id="admin-shortcuts" class="admin-shortcuts clearfix"> <?php print render($secondary_nav); ?> <?php print render($page['admin_shortcuts']); ?> </div>
  <?php endif; ?>
  <!-- /#admin-shortcuts -->
  <div id="global-header">
    <div class="container">
      <div class="row-fluid">
        <div id="top-logo" class="span4"><a href="http://www.stanford.edu"><img src="<?php print base_path(); ?>sites/all/themes/stanford_framework/images/header-stanford-logo@2x.png" alt="Stanford University"></a></div>
        <?php if ($page['global_header']): ?>
        <div id="top-menu" class="span8"><?php print render($page['global_header']); ?></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- /#global-header -->
  <?php if ($logo || $site_name || $site_slogan || $site_title_first_line || $site_title_second_line): ?>
  <div id="header" class="clearfix header <?php if (!empty($subsite_site_name_text)) : ?>is-subsite<?php endif;?> <?php if ($mainsite) : ?>is-mainsite<?php endif;?>" role="banner">
    <div class="container">
      <div class="row">
        <div class="header-section <?php if ($page['search_box']): print 'span8'; else: print 'span12'; endif; ?>">
          <?php if ($logo): ?>
          <div id="logo" class="<?php if ($logo_image_style_classes): ?><?php print $logo_image_style_classes; ?><?php endif; ?> <?php if (!($site_name || $site_slogan)): ?>site-logo<?php endif; ?>"> <a href="<?php print $base_path ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php if ($logo = theme_get_setting('logo_path')) { print $my_site_title; } else { print t('Stanford'); } ?>" role="presentation"> </a></div>
          <?php endif; ?>
          <!-- /#logo -->
          <?php if ($site_name || $site_slogan): ?>
          <!--- Use subsite name with subsite link if present. --->
	  <?php if (!empty($subsite_site_name_html)) : ?>
            <?php $site_name = $subsite_site_name_html; ?> 
          <?php endif; ?>
          <div id="name-and-slogan"  class="<?php if (isset($logo)) { print ('with-logo'); } ?><?php if ($site_title_second_line || $site_slogan) { print (' two-lines'); } ?>">
            <?php if (($site_name) && !($site_title_first_line)): ?>
            <div id="site-name" class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></div>
            <?php endif; ?>
            <?php if ($site_title_first_line): ?>
            <div id="site-title-first-line" <?php if ($site_title_style_classes): ?>class="<?php print $site_title_style_classes; ?>"<?php endif; ?>><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_title_first_line; ?></a></div>
            <?php endif; ?>
            <?php if ($site_title_second_line): ?>
            <div id="site-title-second-line" <?php if ($site_title_position_classes): ?>class="<?php print $site_title_position_classes; ?>"<?php endif; ?>><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_title_second_line; ?></a></div>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <div id="site-slogan" class="site-slogan"><?php print $site_slogan; ?></div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php if (!($site_name || $site_slogan)): ?>
          <div id="site" class="hide">
            <div id="name"><a href="<?php print $front_page; ?>"><?php print $my_site_title; ?></a></div>
          </div>
          <!-- /#name-and-slogan --> 
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- /#header -->
  <?php if ($page['header']): ?>
  <div id="header-content" class="clearfix header-content">
    <div class="container">
      <div class="row">
        <div class="<?php if ($page['search_box']): print 'span8'; else: print 'span12'; endif; ?>"> <?php print render($page['header']); ?> </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- /#header-content -->
  <?php if (($main_menu) || ($page['search_box'])): ?>
  <div id="main-menu" class="clearfix site-main-menu">
    <div class="container">
      <div class="navbar">
        <?php if ($main_menu): ?>
        <div class="navbar-inner">
          <?php endif; ?>
          <?php if ($page['search_box']): ?>
          <div id="nav-search" class="nav-search"> <?php print render($page['search_box']); ?> </div>
          <?php endif; ?>
          <?php if ($main_menu): ?>
          <button class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <?php if ($primary_nav || !empty($page['navigation'])): ?>
          <div class="nav-collapse collapse">
            <nav id="main-nav" role="navigation">
              <?php if (($primary_nav) && empty($page['navigation'])): ?>
              <?php print render($primary_nav); ?> 
              <!-- /#primary-menu -->
              <?php endif; ?>
              <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
              <?php endif; ?>
            </nav>
          </div>
          <?php endif; ?>
          <?php endif; ?>
          <?php if ($main_menu): ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- /#main-menu -->
  <?php endif; ?>
  <div id="main" class="clearfix main" role="main">
    <div class="container">
      <?php if (!($is_front) && ($breadcrumb)): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>
      <?php if ($page['main_top']): ?>
      <div id="main-top" class="row-fluid main-top"> <?php print render($page['main_top']); ?> </div>
      <?php endif; ?>
      <?php if ($page['main_upper']): ?>
      <div id="main-upper" class="row-fluid main-upper"> <?php print render($page['main_upper']); ?> </div>
      <?php endif; ?>
      <div id="main-content" class="row main-content">
        <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar site-sidebar-first span3">
          <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
        </div>
        <!-- /#sidebar-first -->
        <?php endif; ?>
        <div id="content" class="mc-content <?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12'; endif; ?>">
          <div id="content-wrapper" class="content-wrapper">
            <div id="content-head" class="row-fluid content-head">
              <?php if ($page['highlighted']): ?>
              <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
              <?php endif; ?>
              <?php print render($title_prefix); ?>
	      <!--- Hide page title if on a subsite homepage --->
              <?php if (isset($subsite_is_front) && $subsite_is_front) { $title =  false; } ?>
              <?php if ($title): ?>
              <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
              <?php endif; ?>
              <?php print render($title_suffix); ?>
              <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
              <div class="tabs"> <?php print render($tabs); ?> </div>
              <?php endif; ?>
              <?php if ($messages): ?>
              <div id="console" class="clearfix"><?php print $messages; ?></div>
              <?php endif; ?>
              <?php if ($page['help']): ?>
              <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
              <?php endif; ?>
              <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
              <?php endif; ?>
            </div>
            <?php if ($page['content_top']): ?>
            <div id="content-top" class="row-fluid content-top"> <?php print render($page['content_top']); ?> </div>
            <?php endif; ?>
            <?php if ($page['content_upper']): ?>
            <div id="content-upper" class="row-fluid content-upper"> <?php print render($page['content_upper']); ?> </div>
            <?php endif; ?>
            <?php if (($page['content']) || ($feed_icons)): ?>
            <div id="content-body" class="row-fluid content-body"> <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
            <?php endif; ?>
            <?php if ($page['content_row2']): ?>
            <div id="content-row2" class="row-fluid content-row2"> <?php print render($page['content_row2']); ?> </div>
            <?php endif; ?>
            <?php if (($page['content_col2-1']) || ($page['content_col2-2'])): ?>
            <div id="content-col2" class="row-fluid content-col2">
              <?php if ($page['content_col2-1']): ?>
              <div class="span6">
                <div id="content-col2-1" class="span12 clearfix clear-row"> <?php print render($page['content_col2-1']); ?> </div>
              </div>
              <?php endif; ?>
              <?php if ($page['content_col2-2']): ?>
              <div class="span6">
                <div id="content-col2-2" class="span12 clearfix clear-row"> <?php print render($page['content_col2-2']); ?> </div>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ($page['content_row3']): ?>
            <div id="content-row3" class="row-fluid content-row3"> <?php print render($page['content_row3']); ?> </div>
            <?php endif; ?>
            <?php if (($page['content_col3-1']) || ($page['content_col3-2']) || ($page['content_col3-3'])): ?>
            <div id="content-col3" class="row-fluid content-col3">
              <?php if ($page['content_col3-1']): ?>
              <div class="span4">
                <div id="content-col3-1" class="span12 clearfix clear-row"> <?php print render($page['content_col3-1']); ?> </div>
              </div>
              <?php endif; ?>
              <?php if ($page['content_col3-2']): ?>
              <div class="span4">
                <div id="content-col3-2" class="span12 clearfix clear-row"> <?php print render($page['content_col3-2']); ?> </div>
              </div>
              <?php endif; ?>
              <?php if ($page['content_col3-3']): ?>
              <div class="span4">
                <div id="content-col3-3" class="span12 clearfix clear-row"> <?php print render($page['content_col3-3']); ?> </div>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ($page['content_row4']): ?>
            <div id="content-row4" class="row-fluid content-row4"> <?php print render($page['content_row4']); ?> </div>
            <?php endif; ?>
            <?php if (($page['content_col4-1']) || ($page['content_col4-2']) || ($page['content_col4-3']) || ($page['content_col4-4'])): ?>
            <div id="content-col4" class="row-fluid content-col4">
              <?php if ($page['content_col4-1']): ?>
              <div class="span3">
                <div id="content-col4-1" class="span12 clearfix clear-row"> <?php print render($page['content_col4-1']); ?> </div>
              </div>
              <?php endif; ?>
              <?php if ($page['content_col4-2']): ?>
              <div class="span3">
                <div id="content-col4-2" class="span12 clearfix clear-row"> <?php print render($page['content_col4-2']); ?> </div>
              </div>
              <?php endif; ?>
              <?php if ($page['content_col4-3']): ?>
              <div class="span3">
                <div id="content-col4-3" class="span12 clearfix clear-row"> <?php print render($page['content_col4-3']); ?> </div>
              </div>
              <?php endif; ?>
              <?php if ($page['content_col4-4']): ?>
              <div class="span3">
                <div id="content-col4-4" class="span12 clearfix clear-row"> <?php print render($page['content_col4-4']); ?> </div>
              </div>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if ($page['content_lower']): ?>
            <div id="content-lower" class="row-fluid content-lower"> <?php print render($page['content_lower']); ?> </div>
            <?php endif; ?>
            <?php if ($page['content_bottom']): ?>
            <div id="content-bottom" class="row-fluid content-bottom"> <?php print render($page['content_bottom']); ?> </div>
            <?php endif; ?>
          </div>
          <!-- /#content-wrap --> 
        </div>
        <!-- /#content -->
        <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar site-sidebar-second span3">
          <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
        </div>
        <!-- /#sidebar-second -->
        <?php endif; ?>
      </div>
      <?php if ($page['main_lower']): ?>
      <div id="main-lower" class="row-fluid main-lower"> <?php print render($page['main_lower']); ?> </div>
      <?php endif; ?>
      <?php if ($page['main_bottom']): ?>
      <div id="main-bottom" class="row-fluid main-bottom"> <?php print render($page['main_bottom']); ?> </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- /#main, /#main-wrapper -->
  <div id="push"></div>
  <!-- /#push --> 
</div>
<!-- /#wrap -->
<?php if (($page['footer'])): ?>
<div id="footer" class="clearfix footer">
  <div class="container">
    <?php if ($page['footer']): ?>
    <div id="footer-content" class="row-fluid footer-content"> <?php print render($page['footer']); ?> </div>
    <?php endif; ?>
  </div>
</div>
<!-- /#footer -->
<?php endif; ?>
<div id="global-footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div id="bottom-logo" class="span2"><a href="http://www.stanford.edu"><img src="<?php print base_path(); ?>sites/all/themes/stanford_framework/images/footer-stanford-logo@2x.png" alt="Stanford University"></a></div>
      <div id="bottom-menu" class="span10">
        <ul>
          <li><a href="http://www.stanford.edu">SU Home</a></li>
          <li><a href="http://visit.stanford.edu/plan/maps.html">Maps &amp; Directions</a></li>
          <li><a href="http://www.stanford.edu/search/">Search Stanford</a></li>
          <li><a href="http://www.stanford.edu/site/terms.html">Terms of Use</a></li>
          <li><a href="http://emergency.stanford.edu/">Emergency Info</a></li>
        </ul>
      </div>
      <div id="copyright" class="span10 offset2">
        <p class="vcard">&copy; <span class="fn org">Stanford University</span>, <span class="adr"><span class="locality">Stanford</span>, <span class="region">California</span> <span class="postal-code">94305</span></span>. <span class="copyright-links"><a href="http://www.stanford.edu/site/copyright.html">Copyright Complaints</a></span></p>
      </div>
    </div>
  </div>
</div>
<!-- /#global-footer --> 
