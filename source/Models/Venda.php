<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Venda extends DataLayer 
{
    public function __contruct()
    {
        parent::__contruct("vendas", []);
    }

}