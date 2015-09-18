<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/3/2015
 * Time: 4:20 PM
 */

class ClassificacaoDao{

    public function getClassificacaoes($link){
        $sql = "select * from classificacao";

        $result = $link->query($sql);

        return $result;
    }
}