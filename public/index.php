<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Front controller
 *
 */
// Require the controller class

// require '../App/Controllers/Posts.php';

/**
 * Routing
 */
// require '../Core/Router.php';

/**
 * Twig
 */
require '../vendor/autoload.php';


/**
 * 
 * 
 * Autoloader
 */
// spl_autoload_register(function ($class) {
//     $root = dirname(__DIR__);   // get the parent directory
//     $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
//     if (is_readable($file)) {
//         require $root . '/' . str_replace('\\', '/', $class) . '.php';
//     }
// });


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
    
$router->dispatch($_SERVER['QUERY_STRING']);
