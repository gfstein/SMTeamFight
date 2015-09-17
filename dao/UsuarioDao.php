<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/3/2015
 * Time: 4:20 PM
 */

class UsuarioDao{
    public function login($email, $senha, $link){

        $sql = "select * from usuario where email  = '$email' AND senha ='$senha'";

        $resultado = $link->query($sql);

        $usuario = mysqli_fetch_object($resultado);

        if($senha == $usuario->senha) {
            return $usuario;
        }else{
            return null;
        }
    }

    public function getPros($link){

        $sql = "select * from usuario where is_pro is true";

        $result = $link->query($sql);

        return $result;
    }
}