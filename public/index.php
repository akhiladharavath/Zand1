<?php

// Set the APPLICATION_ENV variable
putenv("APPLICATION_ENV=development");

// Define your custom routing logic here
$requestUri = $_SERVER['REQUEST_URI'];

// Define the base path of your application
$basePath = '/'; // Change this to your actual base path if it's not at the root

// Remove the base path from the request URI
if (strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
}


// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

if (file_exists(APPLICATION_PATH . '/../vendor/autoload.php')) {
    include (APPLICATION_PATH . '/../vendor/autoload.php');
} 


    // load Zend_Application from include path
    require_once 'Zend/Application.php';


// Create application, bootstrap, and run
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

$application->bootstrap()

        ->run();