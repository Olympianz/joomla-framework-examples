<?php

// Increase error reporting to that any errors are displayed.
// Note, you would not use these settings in production.
error_reporting(E_ALL);
ini_set('display_errors', true);

// Bootstrap the application.
require dirname(dirname(dirname(__FILE__))).'/bootstrap.php';

// Use new the web application class
use Joomla\Application\Web;

// you must extend the web class since the web class is abstract
class HelloWww extends Web
{
    // override the execute class
    protected function doExecute()
    {
        $this->setBody('<body>Hello Www!</body>');
    }
}

// new instance of HelloWww
$app = new HelloWww;

// finally, we can execute!
$app->execute();