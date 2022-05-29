<?php

namespace App\Model;

use App\Db\Connection;

class ModelProduto extends ModelPadrao{
    
    public $id;
            
    function getTable() {
        return 'public.tbproduto';
    }
    
    function deleteProduto() {
        $iId = $this->id;
        
        return parent::delete([
            'procodigo' => $iId
        ]);
    }
}
