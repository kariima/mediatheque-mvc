<?php

use Bramus\Router\Router;

require __DIR__ . '/vendor/autoload.php';

$router = new Router;

$router->setNamespace('\App\Controller');

$router->get('/articles', 'ArticlesController@index');

$router->get('/medias', 'MediasController@index');

$router->run();


