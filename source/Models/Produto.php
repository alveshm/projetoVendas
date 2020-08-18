<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Produto extends DataLayer 
{
    public function __contruct()
    {
        parent::__contruct("produtos", ["nome", "tipo_produto_id", "valor"]);
    }

}