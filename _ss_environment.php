<?php

// Database
define('SS_DATABASE_SERVER','localhost');
define('SS_DATABASE_USERNAME','root');
define('SS_DATABASE_PASSWORD','password');

// Creates or connects to the database based on the 'project folder' name
define('SS_DATABASE_CHOOSE_NAME', true);

// Force email to go to you, no matter what address is specified
define('SS_SEND_ALL_EMAILS_TO', 'email@yourdomain.com');

// What kind of environment is this: dev, test, or live?
define('SS_ENVIRONMENT_TYPE','dev'); // 'dev/test/live'

// Turn on display_errors if environment is set to 'dev or test'
if (defined('SS_ENVIRONMENT_TYPE') && SS_ENVIRONMENT_TYPE != 'live') {
	ini_set('display_errors', 1);
}

// CMS Admin login defaults
define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'password');
