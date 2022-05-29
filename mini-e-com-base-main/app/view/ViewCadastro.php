<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewCadastro extends ViewPadrao {

    static function getHtmlFormularioCadastro() {
        
        $sHtml = '  
            <form class="formulario">
              <label for="nomeProduto"> Produto:</label><br>
              <input type="text" id="nomeProduto" name="nomeProduto" value=""><br>
              
              <label for="precoProduto">Preco do Produto:</label><br>
              <input type="text" id="precoProduto" name="precoProduto" value=""><br><br>
              
              <label for="descricaoProduto">Descricao do Produto:</label><br>
              <input type="text" id="descricaoProduto" name="descricaoProduto" value=""><br><br>
              
              <input type="submit" value="Submit">
            </form>  
        ';
        
//        $nomeProduto = $_GET['nomeProduto']; 
//        $precoProduto = $_GET['precoProduto'];
//        $descricaoProduto = $_GET['descricaoProduto'];
        
        return $sHtml;
//               $nomeProduto and 
//               $nomeProduto and 
//               $precoProduto and 
//               $descricaoProduto;
    }
 
}
