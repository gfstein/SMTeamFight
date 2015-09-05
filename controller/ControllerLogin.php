<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/3/2015
 * Time: 4:02 PM
 */
session_start();
include '../models/models.php';
include '../dao/daos.php';

$operacao = $_POST['operacao'];
switch($operacao){
    case 'login':
        $email = htmlspecialchars($_POST['email']);
        $senha = sha1(htmlspecialchars($_POST['senha']));

        if ($usuario = $usuarioDao->getLogin($email, $senha)) {
            $_SESSION['email'] = $usuario->email;
            $_SESSION['papel'] = $usuario->papel;
            $_SESSION['chave_sm_team'] = sha1($usuario->login.$usuario->email);

            header("location: ../home.php");
        }else{
            header("location: ../index.php?usuario=false");
        }
        break;

    case 'redefinirSenha':
        break;
}
header('location: ../index.php');