<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class TipoProduto extends DataLayer 
{
    public function __contruct()
    {
        parent::__contruct("tipo_produtos", ["nome", "imposto_tipo_produto_id"]);
    }

}