<?php
$papeis = array('1', '2');
include 'interceptor/Interceptor.php';

echo "<h1>Usuários</h1>";

if ($result = $usuarioDao->getPros($link)) {
    while($usuario = mysqli_fetch_object($result)){
        ?>
        <div class="alert alert-info">
            Nome: <?=$usuario->nome?>
            E-mail: <?=$usuario->email?>
        </div>
        <?
    }
}
