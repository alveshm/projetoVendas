<?php

namespace Source\App;

class ImpostoTipoProdutosController {

    public function index() {
        echo 'Lista de Tipos de Produtos';
    }

    public function add($data) {
        $url = URL_BASE;
        require __DIR__ . '/../views/Produtos/add.php'; 
    }

    public function edit($data) {
        echo 'Edita um Tipo de produto';
    }

    public function delete($data) {
        echo 'Deleta um tipo de produto';
    }
}