<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class VendaProduto extends DataLayer 
{
    public function __contruct()
    {
        parent::__contruct("venda_produtos", ["venda_id", "quantidade"]);
    }

}