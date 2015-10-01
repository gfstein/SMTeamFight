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
include '../service/Conexao.php';
$operacao = $_POST['operacao'];
switch($operacao){
    case 'login':
        $email = htmlspecialchars($_POST['email']);
        $senha = sha1(htmlspecialchars($_POST['senha']));
        if ($usuario = $usuarioDao->login($email, $senha, $link)) {
            $_SESSION['email'] = $usuario->email;
            $_SESSION['papel'] = $usuario->papel;
            $_SESSION['chave_sm_team'] = sha1($usuario->email.$usuario->papel);
            header("location: ../home.php");
            exit;
        }else{
            header("location: ../index.php?usuario=false");
            exit;
        }
        break;

    case 'redefinirSenha':
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

        if(empty($nome) || empty($email) || empty($senha) || empty($senha2) || empty($endereco) || empty($data)) {
            header("location: ../index.php?required=true#Cadastro");
            exit;
        }

        if($senha == $senha2){
            $usuarioDao->save($nome, $email, $senha, $endereco, $telefone, $celular, $data, $profissao, $horarios, $link);
            $_SESSION['email'] = $usuario->email;
            $_SESSION['papel'] = 1;
            $_SESSION['chave_sm_team'] = sha1($usuario->email.$usuario->papel);
            header("location: ../perfil.php");
            exit;
        } else {
            header("location: ../index.php?senhas=true#Cadastro");
            exit;
        }
        break;
}
header('location: ../index.php');