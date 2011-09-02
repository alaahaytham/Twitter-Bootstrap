<?php

function twitter_bootstrap_get_setting($input) {
  $output = NULL;

  $output = theme_get_setting($input);

  if ( is_null($output) ) {
    $output = theme_get_setting($input, 'twitter_bootstrap');
  }

  return $output;
}
