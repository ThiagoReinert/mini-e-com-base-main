<?php

namespace App\Model;

use App\Db\Connection;

class ModelAdministrador extends ModelPadrao{
    function getTable() {
        return 'treina.tbimovel';
    }
}
