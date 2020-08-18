<?php

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace('Source\App');

$router->group('produtos');
$router->get('/', 'ProdutosController:index');
$router->get('/add', 'ProdutosController:add');
$router->get('/delete', 'ProdutosController:delete');

$router->group('tipo-produtos');
$router->get('/', 'TipoProdutosController:index');
$router->get('/add', 'TipoProdutosController:add');
$router->get('/delete', 'TipoProdutosController:delete');

$router->group('imposto-tipo-produtos');
$router->get('/', 'ImpostoTipoProdutosController:index');
$router->get('/add', 'ImpostoTipoProdutosController:add');
$router->get('/delete', 'ImpostoTipoProdutosController:delete');

$router->group(null);
$router->get('/index', 'AppController:index');

$router->group("ops");
$router->get("/{errcode}", function($data) {
    require __DIR__ . "/{$data['errcode']}.php";
    // echo "<h1>Erro {$data['errcode']}";
});

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}