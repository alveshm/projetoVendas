<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Venda extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("vendas", []);
    }

}