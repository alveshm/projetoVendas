<?php

namespace Source\App;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\TipoProduto;
use Source\Models\ImpostoTipoProduto;
class TipoProdutosController {

    public function index() {
        $oTipoProduto = new TipoProduto();
        $aTipoProdutos = $oTipoProduto->find()->fetch(true);
        $aTipoProdutos = $aTipoProdutos ?: [];

        require __DIR__ . '/../views/TipoProdutos/index.php';
    }

    public function add() {
        $url = URL_BASE;
        $oImpostoTipoProduto = new ImpostoTipoProduto();
        $aImpostoTipoProdutos = $oImpostoTipoProduto->find()->fetch(true);
        $aImpostoTipoProdutos = $aImpostoTipoProdutos ?: [];
        
        require __DIR__ . '/../views/TipoProdutos/add.php'; 
    }

    public function addPost($data) {
        if (!empty($data)) {
            $oTipoProduto = new TipoProduto();
            $oTipoProduto->nome = $data['nome'];
            $oTipoProduto->imposto_tipo_produto_id = $data['imposto_tipo_produto_id'];

            if ($oTipoProduto->save()) {
                header('Location: ' . URL_BASE . 'tipo-produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'tipo-produtos');
        }
    }

    public function edit($data) {
        $url = URL_BASE;
        $oTipoProduto = new TipoProduto();
        $oTipoProduto = $oTipoProduto->findById($data['id']);

        $oImpostoTipoProduto = new ImpostoTipoProduto();
        $aImpostoTipoProdutos = $oImpostoTipoProduto->find()->fetch(true);
        $aImpostoTipoProdutos = $aImpostoTipoProdutos ?: [];

        require __DIR__ . '/../views/TipoProdutos/edit.php'; 
    }

    public function editPost($data) {
        if (!empty($data)) {
            $oTipoProduto = (new TipoProduto())->findById($data['id']);
            $oTipoProduto->nome = $data['nome'];
            $oTipoProduto->imposto_tipo_produto_id = $data['imposto_tipo_produto_id'];
            if ($oTipoProduto->save()) {
                header('Location: ' . URL_BASE . 'tipo-produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'tipo-produtos');
        }
    }

    public function delete($data) {
        if (!empty($data)) {
            $oTipoProduto = (new TipoProduto())->findById($data['id']);
    
            if ($oTipoProduto->destroy()) {
                header('Location: ' . URL_BASE . 'tipo-produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'tipo-produtos');
        }
    }
}