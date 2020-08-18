<?php

namespace Source\App;

class ProdutosController {

    public function index() {
        echo 'Lista produtos';
    }

    public function add($data) {
        $url = URL_BASE;
        require __DIR__ . '/../views/Produtos/add.php'; 
    }

    public function delete($data) {
        echo 'Deleta um produto';
    }
}