
<?php

// Подключение автозагрузки через composer
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);


$app->get('/users', function ($request, $response) {
    $newResp = $response->withStatus(404);
    return $newResp;
});
$app->run();