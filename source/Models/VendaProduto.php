<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class VendaProduto extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("venda_produtos", ["venda_id", "quantidade"]);
    }

}