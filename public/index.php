<?php
/**
 * Front controller
 *
 */

/**
 * Composer
 */
require '../vendor/autoload.php';


/**
 * Twig
 */
// Twig_Autoloader::register();


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
// var_dump($router->routes);

    
$router->dispatch($_SERVER['QUERY_STRING']);

var_dump($_SERVER['QUERY_STRING']);
