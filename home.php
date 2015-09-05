<?php
/**
 * Created by PhpStorm.
 * User: willian.manucello
 * Date: 9/3/2015
 * Time: 3:56 PM
 */
$papeis = array('admin', 'usuario');
include 'interceptor/Interceptor.php';

echo "<h1>Usuarios</h1>";

$sql = "select * from usuario where pro is true";
$resultado = $link->query($sql);
while($usuario = mysqli_fetch_object($resultado)) {
    $sql = "select max(pagamento.data) from pagamento where pagamento.data = ";
    ?>
    Nome: <?=$usuario->nome?>
    E-mail: <?=$usuario->email?>
    Situação:
<?
}
?>
