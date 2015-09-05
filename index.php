<?php
include 'cabecalho.php';
?>
<div class="panel panel-default">
    <div class="panel-body">
        Site do Kru 2
        <form action="controller/ControllerLogin.php" method="post">
            Email: <input type="text" name="email">
            Senha: <input type="password" name="senha">
            <button name="operacao" value="login">
                Logar
            </button>
        </form>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        Basic panel example
    </div>
</div>
