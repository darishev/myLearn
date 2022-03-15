<?php
require __DIR__ . '/../vendor/autoload.php';
use Slim\Factory\AppFactory;
use DI\Container;

$container = new Container();
$container->set('renderer', function () {
    // Параметром передается базовая директория, в которой будут храниться шаблоны
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});




$app = AppFactory::create();

// Метод `setName` задаёт имя маршрута. Затем это имя используется для формирования нужного адреса. Ниже пример того как это сделать:


$app->get('/hello', function ($request, $response) {
})->setName('helloS');

$app->get('/bye', function ($request, $response) {
})->setName('byeS');

$router = $app->getRouteCollector()->getRouteParser();

$router->urlFor('helloS');


$app->get( '/', function ($request, $response) use ($router) {
    return $response->withRedirect( $router->urlFor('byeS'));
});


$app->run();
