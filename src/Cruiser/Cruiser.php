<?php

namespace Cruiser;

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Route;

class Cruiser
{
    public $db;

    public $router;

    public $request;
    public $response;
    public $cookies;

    public function __construct(array $config = [])
    {
        // Initialize request from Globals

        // Initialize Response

        // Initialize Routing
        $this->router = new RouteCollector();
    }

    public function get($route, $handler, array $filters = [])
    {
        return $this->router->addRoute(Route::GET, $route, $handler, $filters);
    }

    public function post($route, $handler, array $filters = [])
    {
        return $this->router->addRoute(Route::POST, $route, $handler, $filters);
    }

    public function run()
    {
        $dispatcher = new Dispatcher($this->router->getData());
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        echo $response;
    }
}
