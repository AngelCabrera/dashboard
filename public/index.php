<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$dotenv = Dotenv\Dotenv::create(__DIR__ . '/..');
$dotenv->load();

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => getenv('DB_DRIVER'),
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASSWORD'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$map->get('getDashboard', '/thefutures/dashboard/', [
    'controller' => 'App\Controllers\MyFilesController',
    'action' => 'getMyFilesAction'
]);

$map->get('getMyFiles', '/thefutures/dashboard/myfiles', [
    'controller' => 'App\Controllers\MyFilesController',
    'action' => 'getMyFilesAction'
]);

$map->get('getOrderHistory', '/thefutures/dashboard/order-history', [
    'controller' => 'App\Controllers\OrderHistoryController',
    'action' => 'getOrderHistoryAction'
]);

$map->get('showOrderHistory', '/thefutures/dashboard/order-history/TC1031972989', [
    'controller' => 'App\Controllers\OrderHistoryController',
    'action' => 'showOrderHistoryAction'
]);

$map->get('getManageTeam', '/thefutures/dashboard/manage-team', [
    'controller' => 'App\Controllers\ManageTeamController',
    'action' => 'getManageTeamAction'
]);

$map->get('getSettings', '/thefutures/dashboard/settings', [
    'controller' => 'App\Controllers\SettingsController',
    'action' => 'getSettingsAction'
]);

$map->get('tickets', '/thefutures/dashboard/tickets', [
    'controller' => 'App\Controllers\TicketsController',
    'action' => 'getTicketsAction'
]);

$map->get('pstatus', '/thefutures/dashboard/projects-status', [
    'controller' => 'App\Controllers\ProjectsController',
    'action' => 'getProjectsStatusAction'
]);


$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if (!$route) {
    echo "Esta ruta no existe";
} else {
    $controllerName = $route->handler["controller"];
    $actionName = $route->handler["action"];
    $controller = new $controllerName;
    $response = $controller->$actionName($request);

    echo $response->getBody();
}