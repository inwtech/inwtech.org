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
  'int.craft.dev' => array(
    'devMode' => true,
    'environmentVariables' => array(
        'siteUrl' => 'http://int.craft.dev',
    )
  )
);
