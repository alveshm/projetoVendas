<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Produto extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("produtos", ["nome", "tipo_produto_id", "valor"]);
    }

    public function tipoProduto() 
    {
        return (new TipoProduto())->find("id = :uid", "uid={$this->tipo_produto_id}")->fetch();
    }

}