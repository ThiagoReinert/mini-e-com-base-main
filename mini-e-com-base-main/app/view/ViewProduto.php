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
                    <th scope="col">Nome</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Excluir</th>
                    <th scope="col">Editar</th>
                <tr>
            </thead>
        <tbody>';
        
        foreach ($a as $x){
            $sHtml .= '
            <tr>
                <td>' .$x['procodigo']. '</td>
                <td>' .$x['pronome']. '</td>
                <td>' .$x['propreco']. '</td>
                <td>' .$x['prodescricao']. '</td>
                <td><a href="index.php?pg=produto&act=delete&proid=' .$x['procodigo']. '">Excluir</td>
                <td><a href="">Editar</td>
            </tr>';
        }
        return $sHtml;
    }

}
