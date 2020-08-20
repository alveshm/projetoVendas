<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class ImpostoTipoProduto extends DataLayer 
{
    public function __construct()
    {
        parent::__construct("imposto_tipo_produtos", ["nome", "valor"]);
    }

}