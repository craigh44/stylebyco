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
  ),
  'localhost' => array(
    'siteUrl' => 'http://localhost:8888/stylebyco/',
    'devMode' => true,
    'enviromentVariables' => array(
      'baseUrl' => 'http://localhost:8888/stylebyco/'
    )
  ),
  '109.73.168.209' => array(
    'siteUrl' => 'http://109.73.168.209/~stylebyco/',
    'devMode' => true,
    'enviromentVariables' => array(
      'baseUrl' => 'http://109.73.168.209/~stylebyco/'
    )
  ),
  '.com' => array(
    'siteUrl' => 'http://www.stylebyco.com/',
    'devMode' => false,
    'enviromentVariables' => array(
      'baseUrl' => 'http://www.stylebyco.com/'
    )
  ),
);
