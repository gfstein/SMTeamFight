<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/3/2015
 * Time: 3:57 PM
 */
session_start();
$ok = false;
if(isset($_SESSION['chave_sm_team'])){
    if(isset($_SESSION['email']) AND isset($_SESSION['papel'])){
        $chave_sm_team = sha1($usuario->login.$usuario->email);
        if($_SESSION['chave_sm_team'] != $chave_sm_team){
            session_abort();
            session_destroy();
            header("location: ../index.php");
        }else{
            foreach($papeis as $papel){
                if($papel == $_SESSION['papel']){
                    $ok = true;
                    break;
                }
            }
            if(!$ok){
                session_abort();
                session_destroy();
                header("location: ../index.php");
            }else{
                include '../service/Conexao.php';
                include '../cabecalho.php';
            }
        }
    }else{
        header("location: ../index.php");
    }
}else{
    header("location: ../index.php");
}
?>