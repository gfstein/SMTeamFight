<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 01/10/2015
 * Time: 10:50
 */


class Util{

    function isEmpty($var){
        if($var == null){
            return true;
        } else if ($var == ""){
            return true;
        } else {
            return false;
        }
    }

}

?>