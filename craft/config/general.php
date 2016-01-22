<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

  '*' => array(
    'omitScriptNameInUrls' => true,
    'autoLoginAfterAccountActivation' => true,
    'purgePendingUsersDuration' => 'P1M',
    'maxInvalidLogins' => 5,
  ),

  // Setup for local development.
  'gee.craft.dev' => array(
    'devMode' => true,
    'cache' => false,
    'environmentVariables' => array(
        'siteUrl' => 'http://gee.craft.dev', // when doing this put '{siteUrl}' in for > Site URL
        'baseImagePath' => 'assets/img/',  // when doing this put '{baseImagePath}' in for assets
        'baseImageUrl' => '/assets/img/',
        'baseDocPath' => 'assets/docs/',
        'baseDocUrl' => '/assets/docs/'
    )
  ),

  // Setup for remote stage.
  'gee.stage.uxiliary.io' => array(
    'devMode' => false,
    'cache' => false,
    'environmentVariables' => array(
        'siteUrl' => 'http://gee.stage.uxiliary.io',
        'baseImagePath' => 'assets/img/',
        'baseImageUrl' => '/assets/img/',
        'baseDocPath' => 'assets/docs/',
        'baseDocUrl' => '/assets/docs/'
    )
  ),

  // Setup for remote stage.
  // 's212178.gridserver.com' => array(
  //   'devMode' => false,
  //   'cache' => false,
  //   'environmentVariables' => array(
  //       'siteUrl' => 'http://gee.stage.uxiliary.io',
  //       'baseImagePath' => 'assets/img/',
  //       'baseImageUrl' => '/assets/img/',
  //       'baseDocPath' => 'assets/docs/',
  //       'baseDocUrl' => '/assets/docs/'
  //   )
  // ),

  // Setup for production.
  'geeautomotive.com' => array(
    'devMode' => false,
    'cache' => false,
    'environmentVariables' => array(
        'siteUrl' => 'http://geeautomotive.com',
        'baseImagePath' => 'assets/img/',
        'baseImageUrl' => '/assets/img/',
        'baseDocPath' => 'assets/docs/',
        'baseDocUrl' => '/assets/docs/'
    )
  )

);
