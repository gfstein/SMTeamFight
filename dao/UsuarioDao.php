<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/3/2015
 * Time: 4:20 PM
 */
include '../service/Conexao.php';

class UsuarioDao{
    public function getLogin($email, $senha){

        $sql = "select * from usuario where email  = '$email' AND senha ='$senha'";

        $resultado = $link->query($sql);

        $linha = mysqli_fetch_object($resultado);

        return $linha;
    }
}