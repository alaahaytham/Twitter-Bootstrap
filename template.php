<?php

require_once('inc/common.inc');

define('TWITTER_BOOTSTRAP_GRID_COLUMNS', twitter_bootstrap_get_setting('grid_columns'));
define('TWITTER_BOOTSTRAP_AUTORESIZE_CLASS', 'tbp-autoresize');

function twitter_bootstrap_preprocess(&$variables, $hook) {
}

function twitter_bootstrap_process(&$variables, $hook) {
}

function twitter_bootstrap_preprocess_html(&$variables) {
  $local_html5shim = twitter_bootstrap_get_setting('local_html5shim');
  $skip_navigation = twitter_bootstrap_get_setting('skip_navigation');

  $html5shim_path = "http://html5shim.googlecode.com/svn/trunk/html5.js";

  if ( $local_html5shim ) {
    $path = drupal_get_path('theme', 'twitter_bootstrap');

    $html5shim_path = '/' . $path . '/js/html5.js';
  }

  $variables['local_html5shim'] = $local_html5shim;
  $variables['html5shim_path'] = $html5shim_path;
  $variables['skip_navigation'] = $skip_navigation;
}

function twitter_bootstrap_process_html(&$variables) {
}

function twitter_bootstrap_preprocess_page(&$variables) {
  $hide_logo = twitter_bootstrap_get_setting('hide_logo');
  $link_logo = twitter_bootstrap_get_setting('link_logo');
  $topbar_logo = twitter_bootstrap_get_setting('topbar_logo');
  $header_logo = twitter_bootstrap_get_setting('header_logo');

  $logo_class = '';

  $topbar_logo_output = '';
  $header_logo_output = '';

  if ( $variables['logo'] ) {
    if ( $hide_logo ) {
      $logo_class = ' class="element-invisible"';
    }

    $topbar_logo_prefix = '';
    $topbar_logo_suffix = '';

    if ( $link_logo ) {
      $topbar_logo_prefix = '<a id="topbar-logo-link" href="' . $variables['front_page'] . '">';
      $topbar_logo_suffix = '</a>';
    }

    $topbar_logo_output = <<<EOF
$topbar_logo_prefix
<img id="topbar-logo"$logo_class src="{$variables['logo']}" alt="{$variables['site_name']}" />
$topbar_logo_suffix
EOF;

    $header_logo_prefix = '';
    $header_logo_suffix = '';

    if ( $link_logo ) {
      $header_logo_prefix = '<a id="header-logo-link" href="' . $variables['front_page'] . '">';
      $header_logo_suffix = '</a>';
    }

    $header_logo_output = <<<EOF
$header_logo_prefix
<img id="header-logo"$logo_class src="{$variables['logo']}" alt="{$variables['site_name']}" />
$header_logo_suffix
EOF;
  }

  $hide_site_name = twitter_bootstrap_get_setting('hide_site_name');
  $link_site_name = twitter_bootstrap_get_setting('link_site_name');
  $topbar_site_name = twitter_bootstrap_get_setting('topbar_site_name');
  $header_site_name = twitter_bootstrap_get_setting('header_site_name');

  $site_name_class = '';

  $topbar_site_name_output = '';
  $header_site_name_output = '';

  if ( $variables['site_name'] ) {
    if ( $hide_site_name ) {
      $site_name_class = ' class="element-invisible"';
    }

    $topbar_site_name_prefix = '';
    $topbar_site_name_suffix = '';

    if ( $link_site_name ) {
      $topbar_site_name_prefix = '<a id="topbar-site-name-link" href="' . $variables['front_page'] . '">';
      $topbar_site_name_suffix = '</a>';
    }

    $topbar_site_name_output = <<<EOF
$topbar_site_name_prefix
<h1 id="topbar-site-name"$site_name_class>{$variables['site_name']}</h1>
$topbar_site_name_suffix
EOF;

    $header_site_name_prefix = '';
    $header_site_name_suffix = '';

    if ( $link_site_name ) {
      $header_site_name_prefix = '<a id="header-site-name-link" href="' . $variables['front_page'] . '">';
      $header_site_name_suffix = '</a>';
    }

    $header_site_name_output = <<<EOF
$header_site_name_prefix
<h1 id="header-site-name"$site_name_class>{$variables['site_name']}</h1>
$header_site_name_suffix
EOF;
  }

  $variables['hide_logo'] = $hide_logo;
  $variables['link_logo'] = $link_logo;
  $variables['topbar_logo'] = $topbar_logo;
  $variables['header_logo'] = $header_logo;
  $variables['logo_class'] = $logo_class;
  $variables['topbar_logo_output'] = $topbar_logo_output;
  $variables['header_logo_output'] = $header_logo_output;

  $variables['hide_site_name'] = $hide_site_name;
  $variables['link_site_name'] = $link_site_name;
  $variables['topbar_site_name'] = $topbar_site_name;
  $variables['header_site_name'] = $header_site_name;
  $variables['site_name_class'] = $site_name_class;
  $variables['topbar_site_name_output'] = $topbar_site_name_output;
  $variables['header_site_name_output'] = $header_site_name_output;

  $variables['primary_local_tasks'] = menu_primary_local_tasks();
  $variables['secondary_local_tasks'] = menu_secondary_local_tasks();

  $autosize_regions = _twitter_bootstrap_autosize_regions();

  if ( is_array($autosize_regions) ) {
    $invalid = array(
      'context',
    );

    foreach ( $autosize_regions as $region_id ) {
      if ( isset($variables['page'][$region_id]) && is_array($variables['page'][$region_id]) ) {
        $elements = element_children($variables['page'][$region_id]);

        if ( is_array($elements) ) {
          // Remove invalid children, for example context puts in text that
          // will not be displayed, so it should not be used to calculate the
          // width
          foreach ( $elements as $delta => $element ) {
            if ( in_array($element, $invalid) ) {
              unset($elements[$delta]);
            }
          }

          $count = count($elements);

          if ( $count > 0 ) {
            $grid_columns = twitter_bootstrap_get_setting('grid_columns');

            $spansize = $grid_columns / $count;
            $spansize = floor($spansize);
            $autoresizeclass = 'span' . $spansize;

            foreach ( $elements as $element ) {
              if ( isset($variables['page'][$region_id][$element]) ) {
                $variables['page'][$region_id][$element]['#tbclasses'][] = $autoresizeclass;
              }
            }
          }
        }
      }
    }
  }
}

function twitter_bootstrap_process_page(&$variables) {
}

function twitter_bootstrap_preprocess_node(&$variables) {
  // Add a class with the node delta
  //$variables['classes_array'][] = drupal_html_class('node-' . $variables['type'] . '-' . $variables['id']);
}
function twitter_bootstrap_process_node(&$variables) {
}

function twitter_bootstrap_preprocess_comment(&$variables) {
}
function twitter_bootstrap_process_comment(&$variables) {
}

function twitter_bootstrap_preprocess_block(&$variables) {
  if ( isset($variables['elements']['#tbclasses']) && is_array($variables['elements']['#tbclasses']) ) {
    $variables['classes_array'] = array_merge($variables['classes_array'], $variables['elements']['#tbclasses']);
  }
}

function twitter_bootstrap_process_block(&$variables) {
}

function _twitter_bootstrap_autosize_regions() {
  return array(
    'spotlight_autosize',
    'footer_spotlight_autosize',
  );
}
