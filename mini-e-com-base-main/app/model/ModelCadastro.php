<?php

namespace App\Model;

use App\Db\Connection;

class ModelCadastro extends ModelPadrao {

    function getTable() {
        return 'public.tbproduto';
    }

}
