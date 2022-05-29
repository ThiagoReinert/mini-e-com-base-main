<?php

namespace App\Model;

use App\Db\Connection;

abstract class ModelPadrao
{
    abstract function getTable();

    function getAll()
    {
        $oConnection = Connection::get();
        $sSelect = 'SELECT * FROM '.  $this->getTable();
        $oResult = pg_query($oConnection, $sSelect);
        $aData = [];
        
        while($aResultado = pg_fetch_assoc($oResult)){
            $aData[] = $aResultado;
        }     
        
        return $aData;
    }

    protected function insert()
    {
        $oConnection = Connection::get();
        $iInsert = 'INSERT INTO '. $this->getTable() .' '
                 . '(pronome, propreco, prodescricao) VALUES '
                 . '(' .$this->$nomeProduto. '), '
                 . '(' .$this->$precoProduto. '), '
                 . '(' .$this->$descricaoProduto. '); ';
        $iInsert = pg_query($oConnection, $iInsert);
        $aData = [];
        
        return $aData;
    }

    protected function delete($aWhere)
    {
        $oConnection = \App\Db\Connection::get();
        
        $sSql = '
                delete from ' .$this->getTable(). ' where 1=1 ';
        
        foreach ($aWhere as $sNomeColuna => $sValor){
            $sSql .= ' and ' .$sNomeColuna. ' = ' .$sValor; 
        }
        return pg_query($oConnection, $sSql);
    }

    protected function update($aValues, $aWhere)
    {
        // Implementar
    }

    /**
     * Retorna o valor pronto para ser 
     * adicionado no comando SQL
     * @param mixed $xValue
     * @return mixed
     */
    protected function getBdValue($xValue)
    {
        if (!empty($xValue) || !is_null($xValue)) {
            if (is_string($xValue)) {
                return '\'' . pg_escape_string($xValue) . '\'';
            }

            return $xValue;
        }

        return 'NULL';
    }
}
