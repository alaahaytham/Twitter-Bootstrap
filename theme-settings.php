<?php

function twitter_bootstrap_form_system_theme_settings_alter(&$form, &$form_state)  {
  $form['twitter_bootstrap'] = array(
    '#type' => 'fieldset',
    '#title' => t('Bootstrap Settings'),
    '#collapsible' => TRUE,
  );

  $form['twitter_bootstrap']['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General Settings'),
    '#collapsible' => TRUE,
  );

  $form['twitter_bootstrap']['general']['local_html5shim'] = array(
    '#type' => 'checkbox',
    '#title' => t('Use a local HTML 5 Shim'),
    '#default_value' => theme_get_setting('local_html5shim'),
    '#description' => t('By checking this option, a local copy of the HTML 5 Shim file will be used instead of the Google CDN version.'),
  );

  $form['twitter_bootstrap']['general']['skip_navigation'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Skip Navigation'),
    '#default_value' => theme_get_setting('skip_navigation'),
    '#description' => t('By checking this option, the skip navigation links will be outputted at the top of every page.  This is used for accessibility purposes, to allow users to skip to the main navigation, etc.'),
  );

  $form['twitter_bootstrap']['logo'] = array(
    '#type' => 'fieldset',
    '#title' => t('Logo Settings'),
    '#collapsible' => TRUE,
  );

  $form['twitter_bootstrap']['logo']['hide_logo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Render and hide the logo'),
    '#default_value' => theme_get_setting('hide_logo'),
    '#description' => t('By checking this option, the logo will be outputted the page, but hidden with the element-invisible class.'),
  );

  $form['twitter_bootstrap']['logo']['link_logo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Link the logo to the front page'),
    '#default_value' => theme_get_setting('link_logo'),
    '#description' => t('By checking this option, the logo will link to the front page.'),
  );

  $form['twitter_bootstrap']['logo']['topbar_logo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display the logo in the topbar region'),
    '#default_value' => theme_get_setting('topbar_logo'),
    '#description' => t('By checking this option, the logo will be displayed in the topbar region.'),
  );

  $form['twitter_bootstrap']['logo']['header_logo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display the logo in the header region'),
    '#default_value' => theme_get_setting('header_logo'),
    '#description' => t('By checking this option, the logo will be displayed in the header region.'),
  );

  $form['twitter_bootstrap']['site_name'] = array(
    '#type' => 'fieldset',
    '#title' => t('Site Name Settings'),
    '#collapsible' => TRUE,
  );

  $form['twitter_bootstrap']['site_name']['hide_site_name'] = array(
    '#type' => 'checkbox',
    '#title' => t('Render and hide the site name'),
    '#default_value' => theme_get_setting('hide_site_name'),
    '#description' => t('By checking this option, the site name will be outputted the page, but hidden with the element-invisible class.'),
  );

  $form['twitter_bootstrap']['site_name']['link_site_name'] = array(
    '#type' => 'checkbox',
    '#title' => t('Link the site name to the front page'),
    '#default_value' => theme_get_setting('link_site_name'),
    '#description' => t('By checking this option, the site name will link to the front page.'),
  );

  $form['twitter_bootstrap']['site_name']['topbar_site_name'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display the site name in the topbar region'),
    '#default_value' => theme_get_setting('topbar_site_name'),
    '#description' => t('By checking this option, the site name will be displayed in the topbar region.'),
  );

  $form['twitter_bootstrap']['site_name']['header_site_name'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display the site name in the header region'),
    '#default_value' => theme_get_setting('header_site_name'),
    '#description' => t('By checking this option, the site name will be displayed in the header region.'),
  );
}
