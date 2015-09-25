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

        $sql = "select * from usuario u where is_pro is true AND u.id_usuario in(SELECT id_usuario from pagamento p WHERE (curdate() - p.data) > 0)";

        $result = $link->query($sql);

        return $result;
    }

    public function getProsAtraso($link){

        $sql = "select * from usuario u where is_pro is true AND u.id_usuario NOT IN(SELECT id_usuario from pagamento p WHERE (curdate() - p.data) > 0 )";

        $result = $link->query($sql);

        return $result;
    }

    public function getUsuario($email, $link){
        $sql = "select * from usuario where email = '$email'";

        $result = $link->query($sql);

        $usuario = mysqli_fetch_object($result);

        return $usuario;
    }

    public function save($nome, $email, $senha, $endereco, $telefone, $celular, $data, $profissao, $horarios, $link){
        $sql = "INSERT INTO usuario (nome, email, senha, endereco, telefone, celular, data_nasc, profissao, hora_profissao) ".
            "VALUES ($nome, $email, $senha, $endereco, $telefone, $celular, $data, $profissao, $horarios)";

        $link->query($sql) or die("erro");

        return true;
    }
}