<?php

// require_once __DIR__ . '/../vendor/autoload.php';

$path = "/index";

// mendapat dari path info
if (isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
}

// lalu ambil path nya, misal /login, /register, dll
require __DIR__ . '/../app/view' . $path . '.php';
// use ProgrammerZamanNow\Belajar\PHP\MVC\App\Router;
// use ProgrammerZamanNow\Belajar\PHP\MVC\Controller\HomeController;
// use ProgrammerZamanNow\Belajar\PHP\MVC\Controller\ProductController;
// use ProgrammerZamanNow\Belajar\PHP\MVC\Middleware\AuthMiddleware;

// Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

// Router::add('GET', '/', HomeController::class, 'index');
// Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
// Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
// Router::add('GET', '/about', HomeController::class, 'about');

// Router::run();
