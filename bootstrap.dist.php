<?php 
// Define the base path.
define('JPATH_FRAMEWORK',  dirname(dirname(__FILE__)) . '/joomla-framework/src');
define('VENDOR', dirname(dirname(__FILE__)).'/joomla-framework/vendor/');

// Load the autoloader classes.
require_once JPATH_FRAMEWORK . '/loader.php';
require_once VENDOR . '/autoload.php';

// Setup the autoloaders.
JLoader::setup();