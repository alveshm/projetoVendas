<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class VendaProduto extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("venda_produtos", ["venda_id", "produto_id", "quantidade"]);
    }

    public function produto() 
    {
        return (new Produto())->find("id = :uid", "uid={$this->produto_id}")->fetch();
    }

}