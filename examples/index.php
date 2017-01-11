<?php
include __DIR__ . '/../vendor/autoload.php';

use Cruiser\Cruiser;

$whoops = new \Whoops\Run;
$errorPage = new \Whoops\Handler\PrettyPageHandler;
$whoops->pushHandler($errorPage);
$whoops->register();

$app = new Cruiser();
$app->get('/',function() use ($app) {
    return "Hello";
});
$app->get('/user/{id}', function($id) use ($app) {
    gotest();
    return "User ".$id;
});
$app->run();
