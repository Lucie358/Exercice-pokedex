<?php 
include __DIR__ . '/../vendor/autoload.php';
require __DIR__.'/../app/Controllers/MainController.php';



$router = new AltoRouter();
$baseUrl = isset($_SERVER['BASE_URI']) ? trim($_SERVER['BASE_URI']) : '/';
$router->setBasePath($baseUrl);



$router->map('GET', '/', [
    'controller' => 'MainController',
    'method' => 'home'
], 'homepage');

$router->map('GET', '/types', [
    'controller' => 'MainController',
    'method' => 'typeList'
], 'typeList');

$router->map('GET', '/type/[i:id]', [
    'controller' => 'MainController',
    'method' => 'pokemonByType'
], 'pokemonByType');

$router->map('GET', '/pokemon/[i:id]', [
    'controller' => 'MainController',
    'method' => 'pokemonDetails'
], 'pokemonDetails');



$match = $router->match();


if ($match === false) {
    $controller = new MainController();
    $controller->error();
} else {
    $controllerName = $match['target']['controller'];
    $methodName = $match['target']['method'];
   
    $urlParams = $match['params'];

    $controller = new $controllerName();
    $controller->$methodName($urlParams);
}



