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
            if($usuario->papel == '1'){
                header("location: ../perfil.php");
                exit;
            }
            header("location: ../perfil.php");
            exit;
        }else{
            header("location: ../index.php?usuario=false");
            exit;
        }
        break;

    case 'redefinirSenha':
        break;
    case 'cadastrar_usuario':

        $usuario = new Usuario();

        $usuario->nome = htmlspecialchars($_POST['nome']);
        $usuario->email = htmlspecialchars($_POST['email']);
        $usuario->senha = sha1(htmlspecialchars($_POST['senha']));
        $senha2 = sha1(htmlspecialchars($_POST['senha2']));
        $usuario->endereco = htmlspecialchars($_POST['endereco']);
        $usuario->telefone = htmlspecialchars($_POST['telefone']);
        $usuario->celular = htmlspecialchars($_POST['celular']);
        $usuario->dataNasc = htmlspecialchars($_POST['data']);
        $usuario->profissao = htmlspecialchars($_POST['profissao']);
        $usuario->horaProfissao = htmlspecialchars($_POST['horarios']);

        if(empty($usuario->nome) || empty($usuario->email) || empty($usuario->senha) || empty($senha2) || empty($usuario->endereco) || empty($usuario->dataNasc)) {
            $usuario = json_encode($usuario);
            header("location: ../index.php?required=true&usuario=$usuario#Cadastro");
            exit;
        }

        if($usuario->senha == $senha2){
            $usuarioDao->save($usuario, $link);
            $_SESSION['email'] = $usuario->email;
            $_SESSION['papel'] = '1';
            $_SESSION['chave_sm_team'] = sha1($usuario->email.'1');
            header("location: ../perfil.php");
            exit;
        } else {
            $usuario = json_encode($usuario);
            header("location: ../index.php?senhas=true&usuario=$usuario#Cadastro");
            exit;
        }
        break;
}
header('location: ../index.php');