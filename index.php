<?php
include 'cabecalho.php';
?>
<h1>Site do Kru 2</h1>
<h2>Info</h2>

<div class="col-md-6">
    <img src="img/prop1.jpg" width="100%">
</div>
<div class="col-md-6">
    <h3>Cadastre-se</h3>
    <form action="controller/ControllerLogin.php" method="post">
        Email: <input type="text" name="email" class="form-control">
        Senha: <input type="password" name="senha" class="form-control">
        <button name="operacao" value="login" class="btn btn-success">
            Logar
        </button>
    </form>
</div>
