<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewProduto;
use App\Db\Connection;
use App\Model\ModelProduto;

class ControllerProduto extends ControllerPadrao 
{
    function processPage() {
        //var_dump(Connection::get());
        
        $oModelProduto = new ModelProduto;
        $a = $oModelProduto->getAll();
        
        //var_dump($a); //Para ver se vesta pegando os registros.
        
        $sTitle = 'Produto';
        
        $sContent = ViewProduto::render([
            'produtoContent' => '<h1>Listagem de Produtos</h1>',
            'tabelaProduto' => ViewProduto::getHtmlTabelaProduto($a)
        ]);
        return parent::getPage($sTitle, $sContent);
    }
    
    function processDelete() {
        $iIdProduto = $_GET['proid'];
        
        $oModelProduto = new ModelProduto;
        $oModelProduto->id = $iIdProduto;
        
        $oModelProduto->deleteProduto();
        
        $this->footerVar= [
            'footerContent' => ''
        ];
        
        if ($oModelProduto->deleteProduto()) {
            $this->footerVars = [
                'footerContent' => '<div class="alert alert-success" role="alert">
                                        Success!
                                    </div>'
            ];
        }
        
        return $this->processPage();
    }
}
