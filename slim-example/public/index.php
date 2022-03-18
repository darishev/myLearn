<?php
use Slim\Factory\AppFactory;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
$app = AppFactory::create();

$app->get('/404', function ($request, $response) {
    return $response->withStatus(404)->withHeader('Content-Type', 'text/h2tsssssml')  ;
})->setName('notfound');

$router = $app->getRouteCollector()->getRouteParser();

$app->get( '/', function ($request, $response) use ($router) {
    return $response->withRedirect( $router->urlFor('notfound'));
});

    $app->get( '/name/{name}', function ($request, $response, $args ) use($router) {

                $name = $args['name'];
                $array = explode("\n", file_get_contents('names'));
                $search = array_search($name, $array);

           if ($name == $array[$search]){
               return $response->write($name . ' Найдено');
           }else{
               return $response->withRedirect( $router->urlFor('notfound'));
           }
    });

$app->run();