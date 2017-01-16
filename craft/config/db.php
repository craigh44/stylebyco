<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
	'*' => array(
	  'tablePrefix' => 'craft',
	),
	'localhost' => array(
	  'server' => 'localhost',
	  'user' => 'root',
	  'password' => 'root',
	  'database' => 'stylebyco',
	),
	'109.73.168.209' => array(
	  'server' => 'localhost',
	  'user' => 'stylebyco_admin',
	  'password' => 'Boobies123',
	  'database' => 'stylebyco_database',
	),
	'.com' => array(
	  'server' => 'localhost',
	  'user' => 'stylebyco_admin',
	  'password' => 'Boobies123',
	  'database' => 'stylebyco_database',
	),
);
