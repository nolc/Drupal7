<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function test_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  //'path' => 'all/themes/test/omega-html5/templates/user-login.tpl.php',
  'path' => drupal_get_path('theme', 'test') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'test_preprocess_user_login'
  ),
 );
return $items;
}