<?php

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace('Source\App');

$router->group('produtos');
$router->get('/', 'ProdutosController:index');
$router->get('/add', 'ProdutosController:add');
$router->post('/add', 'ProdutosController:addPost');
$router->get("/edit/{id}", 'ProdutosController:edit');
$router->post("/edit/{id}", 'ProdutosController:editPost');
$router->get("/delete/{id}", 'ProdutosController:delete');

$router->group('tipo-produtos');
$router->get('/', 'TipoProdutosController:index');
$router->get('/add', 'TipoProdutosController:add');
$router->post('/add', 'TipoProdutosController:addPost');
$router->get("/edit/{id}", 'TipoProdutosController:edit');
$router->post("/edit/{id}", 'TipoProdutosController:editPost');
$router->get("/delete/{id}", 'TipoProdutosController:delete');

$router->group('imposto-tipo-produtos');
$router->get('/', 'ImpostoTipoProdutosController:index');
$router->get('/add', 'ImpostoTipoProdutosController:add');
$router->post('/add', 'ImpostoTipoProdutosController:addPost');
$router->get("/edit/{id}", 'ImpostoTipoProdutosController:edit');
$router->post("/edit/{id}", 'ImpostoTipoProdutosController:editPost');
$router->get("/delete/{id}", 'ImpostoTipoProdutosController:delete');

$router->group('vendas');
$router->get('/', 'VendasController:index');
$router->get('/add', 'VendasController:add');
$router->post('/add', 'VendasController:addPost');
$router->get("/view/{id}", 'VendasController:view');
$router->get("/delete/{id}", 'VendasController:delete');

$router->group(null);
$router->get('/', 'VendasController:view');

$router->group("ops");
$router->get("/{errcode}", function($data) {
    require __DIR__ . "/{$data['errcode']}.php";
});

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}