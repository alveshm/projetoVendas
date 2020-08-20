<?php

namespace Source\App;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\ImpostoTipoProduto;

class ImpostoTipoProdutosController {

    public function index() {
        $oImpostoTipoProduto = new ImpostoTipoProduto();
        $aImpostoTipoProdutos = $oImpostoTipoProduto->find()->fetch(true);

        require __DIR__ . '/../views/ImpostoTipoProdutos/index.php';
    }

    public function add() {
        $url = URL_BASE;
        
        require __DIR__ . '/../views/ImpostoTipoProdutos/add.php'; 
    }

    public function addPost($data) {
        if (!empty($data)) {
            $oImpostoTipoProduto = new ImpostoTipoProduto();
            $oImpostoTipoProduto->nome = $data['nome'];
            $oImpostoTipoProduto->valor = $data['valor'];
            if ($oImpostoTipoProduto->save()) {
                header('Location: ' . URL_BASE . 'imposto-tipo-produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'imposto-tipo-produtos');
        }
    }

    public function edit($data) {
        $url = URL_BASE;
        $oImpostoTipoProduto = new ImpostoTipoProduto();
        $oImpostoTipoProduto = $oImpostoTipoProduto->findById($data['id']);

        require __DIR__ . '/../views/ImpostoTipoProdutos/edit.php'; 
    }

    public function editPost($data) {
        if (!empty($data)) {
            $oImpostoTipoProduto = (new ImpostoTipoProduto())->findById($data['id']);
            $oImpostoTipoProduto->nome = $data['nome'];
            $oImpostoTipoProduto->valor = $data['valor'];
            if ($oImpostoTipoProduto->save()) {
                header('Location: ' . URL_BASE . 'imposto-tipo-produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'imposto-tipo-produtos');
        }
    }

    public function delete($data) {
        if (!empty($data)) {
            $oImpostoTipoProduto = (new ImpostoTipoProduto())->findById($data['id']);
    
            if ($oImpostoTipoProduto->destroy()) {
                header('Location: ' . URL_BASE . 'imposto-tipo-produtos');
            };
        } else {
            header('Location: ' . URL_BASE . 'imposto-tipo-produtos');
        }
    }
}