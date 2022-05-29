<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewProduto extends ViewPadrao {

    static function getHtmlTabelaProduto($a) {
        
        $sHtml = '
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Largura</th>
                    <th scope="col">Comprimento</th>
                <tr>
            </thead>
        <tbody>';
        
        foreach ($a as $x){
            $sHtml .= '
            <tr>
                <td>' .$x['imvcodigo']. '</td>
                <td>' .$x['imvdescricao']. '</td>
                <td>' .$x['imvlargura']. '</td>
                <td>' .$x['imvcomprimento']. '</td>
            </tr>';
        }
        return $sHtml;
    }

}
