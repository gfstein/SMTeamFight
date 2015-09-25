<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/3/2015
 * Time: 4:01 PM
 */
include '../interceptor/Interceptor.php';
include '../dao/daos.php';

$operacao = $_POST['operacao'];
switch($operacao){
    case 'login':
        break;
    case 'cadastrar_usuario':
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $senha = sha1(htmlspecialchars($_POST['senha']));
        $senha2 = sha1(htmlspecialchars($_POST['senha2']));
        $endereco = htmlspecialchars($_POST['endereco']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $celular = htmlspecialchars($_POST['celular']);
        $data = htmlspecialchars($_POST['data']);
        $profissao = htmlspecialchars($_POST['profissao']);
        $horarios = htmlspecialchars($_POST['horarios']);

        if($senha == $senha2){
            $usuarioDao->save($nome, $email, $senha, $endereco, $telefone, $celular, $data, $profissao, $horarios, $link);
            header("location: ../perfil.php");
        } else {
            header("location: ../index.php?senha=true");
        }


}