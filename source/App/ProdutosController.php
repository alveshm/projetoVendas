<?php

namespace Source\App;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Produto;
use Source\Models\TipoProduto;

class ProdutosController {

    public function index() {
        $oProduto = new Produto();
        $aProdutos = $oProduto->find()->fetch(true);
        $aProdutos = $aProdutos ?: [];

        require __DIR__ . '/../views/Produtos/index.php';
    }

    public function add() {
        $url = URL_BASE;
        $oTipoProduto = new TipoProduto();
        $aTipoProdutos = $oTipoProduto->find()->fetch(true);
        $aTipoProdutos = $aTipoProdutos ?: [];
        
        require __DIR__ . '/../views/Produtos/add.php'; 
    }

    public function addPost($data) {
        if (!empty($data)) {
            $oProduto = new Produto();
            $oProduto->nome = $data['nome'];
            $oProduto->descricao = $data['descricao'];
            $oProduto->tipo_produto_id = $data['tipo_produto_id'];
            $oProduto->valor = $data['valor'];

            if ($oProduto->save()) {
                header('Location: ' . URL_BASE . 'produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'produtos');
        }
    }

    public function edit($data) {
        $url = URL_BASE;
        $oProduto = new Produto();
        $oProduto = $oProduto->findById($data['id']);

        $oTipoProduto = new TipoProduto();
        $aTipoProdutos = $oTipoProduto->find()->fetch(true);
        $aTipoProdutos = $aTipoProdutos ?: [];

        require __DIR__ . '/../views/Produtos/edit.php'; 
    }

    public function editPost($data) {
        if (!empty($data)) {
            $oProduto = (new Produto())->findById($data['id']);
            $oProduto->nome = $data['nome'];
            $oProduto->tipo_produto_id = $data['tipo_produto_id'];
            if ($oProduto->save()) {
                header('Location: ' . URL_BASE . 'produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'produtos');
        }
    }

    public function delete($data) {
        if (!empty($data)) {
            $oProduto = (new Produto())->findById($data['id']);
    
            if ($oProduto->destroy()) {
                header('Location: ' . URL_BASE . 'produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'produtos');
        }
    }
}