<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/18/2015
 * Time: 11:24 AM
 */
class PagamentoDao{
    public function getPagamentos($link){
        $sql = "select * from pagamento ORDER BY data";

        $result = $link->query($sql);

        return $result;
    }
}