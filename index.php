<?php
/**
 * Created by PhpStorm.
 */
//autoload is require by the composer
require __DIR__ . '/vendor/autoload.php';

//Include all the database classes
//require __DIR__ . '/db/ProjectTable.php';
//require __DIR__ . '/db/ClientTable.php';
//require __DIR__ . '/db/TaskTable.php';
//require __DIR__ . '/db/UserTable.php';
//require __DIR__ . '/db/ViewerTable.php';

//Helper function
require_once __DIR__ . '/include/helpers.php';

//include middleware for authentication
require_once __DIR__ . '/middleware/authenticate.php';

//Slim configuration file
$config = require_once __DIR__ . '/include/config.php';
$app = new Slim\Slim($config);

session_start();

//middleware login session time
$app->add(new \Slim\Middleware\SessionCookie(array(
    'expires' => '1320 minutes',  //22 hours, so that tasks don't get entered without saving (usually)
    'secret' => 'CHANGE_ME'
)));

//TODO:Make sure to totally understand how this function works
// This function sets the base url of the site so we can use it for getting correct paths in the view files.
$app->hook('slim.before', function () use ($app) {
    $posIndex = strpos( $_SERVER['PHP_SELF'], '/index.php');
    $baseUrl = substr( $_SERVER['PHP_SELF'], 0, $posIndex);
    $app->view()->appendData(array('baseUrl' => $baseUrl, 'app' => $app));
});

//Named routes
require __DIR__ . '/routes.php';

//TODO: NO CODE MUST BE WRITTEN BEYOND THE $APP->RUN() function!!!!!!!!!!!
$app->run();