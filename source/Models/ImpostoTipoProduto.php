<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class ImpostoTipoProduto extends DataLayer 
{
    public function __contruct()
    {
        parent::__contruct("imposto_tipo_produtos", ["nome", "valor"]);
    }

}