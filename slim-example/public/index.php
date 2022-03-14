<?php
// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';
use Slim\Factory\AppFactory;
use DI\Container;

$container = new Container();
$container->set('renderer', function () {
    // Параметром передается базовая директория, в которой будут храниться шаблоны
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});
$app = AppFactory::createFromContainer($container);
$app->addErrorMiddleware(true, true, true);


$courses = Array(25,'vasya',35,'petya',56,'igor',76,'dima');

    $app->get('/users/{id}', function ($request, $response, array $args) use ($courses) {
         $idSearch = $args['id'];
        $key = array_search($idSearch, $courses);
        if($key > 0){
                $params = [
                'hello' =>$args['id'],
                'courses2' => $courses,
                'idKeys'=> $key  ];

        return $this->get('renderer')->render($response, 'users/show.phtml', $params);
        } else {
            echo 'NOT FOUND';
        }
    });



$app->run();
