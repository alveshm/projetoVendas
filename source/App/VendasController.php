<?php

namespace Source\App;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Produto;
use Source\Models\Venda;
use Source\Models\VendaProduto;
class VendasController {

    public function index() {
        $oVendaProduto = new VendaProduto();
        $aVendaProdutos = $oVendaProduto->find()->fetch(true);
        $aVendaProdutos = $aVendaProdutos ?: [];
        $aCompraProdutos = [];
        foreach ($aVendaProdutos as $key => $oVendaProduto) {
            if (isset($aCompraProdutos[$oVendaProduto->venda_id])) {
                $aCompraProdutos[$oVendaProduto->venda_id]['dTotalCompra'] += $oVendaProduto->quantidade * $oVendaProduto->produto()->valor;
                $aCompraProdutos[$oVendaProduto->venda_id]['dTotalImpostos'] += ($oVendaProduto->quantidade * $oVendaProduto->produto()->valor) / $oVendaProduto->produto()->tipoProduto()->impostoTipoProduto()->valor;
            } else {
                $aCompraProdutos[$oVendaProduto->venda_id]['dTotalCompra'] = $oVendaProduto->quantidade * $oVendaProduto->produto()->valor;
                $aCompraProdutos[$oVendaProduto->venda_id]['dTotalImpostos'] = ($oVendaProduto->quantidade * $oVendaProduto->produto()->valor) / $oVendaProduto->produto()->tipoProduto()->impostoTipoProduto()->valor;
            }
        }

        require __DIR__ . '/../views/Vendas/index.php';
    }

    public function add() {
        $url = URL_BASE;
        $oProduto = new Produto();
        $aProdutos = $oProduto->find()->fetch(true);
        $aProdutos = $aProdutos ?: [];
        
        require __DIR__ . '/../views/Vendas/add.php'; 
    }

    public function addPost($data) {

        if (!empty($data)) {
            $oVenda = new Venda();
            echo '<pre>';
            if ($oVenda->save() && !empty($data['itens'])) {
                foreach ($data['itens'] as $key => $aItem) {
                    $oVendaProduto = new VendaProduto();
                    $oVendaProduto->venda_id = $oVenda->id;
                    $oVendaProduto->produto_id = $aItem['produto'];
                    $oVendaProduto->quantidade = $aItem['quantidade'];
                    $oVendaProduto->save();
                }
            }
        }

        header('Location: ' . URL_BASE . 'vendas');
    }

    public function view($data) {
        if (!empty($data)) {
            $oVendaProduto = new VendaProduto();
            $aVendaProdutos = $oVendaProduto->find("venda_id = :venda_id", "venda_id={$data['id']}")->fetch(true);
            $aVendaProdutos = $aVendaProdutos ?: [];

            require __DIR__ . '/../views/Vendas/view.php'; 

        } else {
            header('Location: ' . URL_BASE . 'vendas');
        }
    }

    public function delete($data) {
        if (!empty($data)) {
            $oVenda = (new Venda())->findById($data['id']);
            $oVendaProduto = new VendaProduto();
            $aVendaProdutos = $oVendaProduto->find("venda_id = :venda_id", "venda_id={$data['id']}")->fetch(true);
            foreach ($aVendaProdutos as $key => $oVendaProduto) {
                $oVendaProduto->destroy();
            }
    
            if ($oVenda->destroy()) {
                header('Location: ' . URL_BASE . 'vendas');
            };
        } else {
            header('Location: ' . URL_BASE . 'vendas');
        }
    }
}