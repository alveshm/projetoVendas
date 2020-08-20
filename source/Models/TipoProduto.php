<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class TipoProduto extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("tipo_produtos", ["nome", "imposto_tipo_produto_id"]);
    }

    public function impostoTipoProduto() 
    {
        return (new ImpostoTipoProduto())->find("id = :uid", "uid={$this->imposto_tipo_produto_id}")->fetch();
    }

}