<?php

use App\App;
use App\controller\HomeController;
use App\controller\InvoiceController;
use App\Route;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


define('VIEW_PATH', __DIR__ . '/views/');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$route = new Route();

$route
        ->get('/part_two_rev/', [HomeController::class, 'index'])
        ->get('/part_two_rev/invoice', [InvoiceController::class, 'index']);

(new App(
    $route, 
    ['method' => $_SERVER['REQUEST_METHOD'], 'uri' => $_SERVER['REQUEST_URI']], 
    new \App\Config($_ENV)))->run();