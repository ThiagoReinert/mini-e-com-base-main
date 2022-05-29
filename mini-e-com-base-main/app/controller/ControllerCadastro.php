<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\Model\ModelCadastro;
use App\View\ViewCadastro;

class ControllerCadastro extends ControllerPadrao 
{
    function processPage() {
        
        $oModelCadastro = new ModelCadastro;
//        $a = $oModelCadastro->getAll();
        
        $sTitle = 'Cadastro';
        
        $sContent = ViewCadastro::render([
            'cadastroContent' => '<h1>Cadastro de Produtos</h1>',
            'formularioCadastro' => ViewCadastro::getHtmlFormularioCadastro()
        ]);
        return parent::getPage($sTitle, $sContent);
    }
}
