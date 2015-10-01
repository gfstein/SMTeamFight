<?php
$papeis = array('1', '2');
include 'interceptor/Interceptor.php';
?>
<hr>
<?
if (isset($_GET['usuario'])) {
    $usuarioBuscar = $_GET['usuario'];
} else {
    $usuarioBuscar = $_SESSION['email'];
}
if ($usuario = $usuarioDao->getUsuario($usuarioBuscar, $link)) {
    ?>
    <h2>Perfil de <?= $usuario->nome ?></h2>
    <div class="col-md-3">
        <img class="card-img-top" id="img_usuario"
             src="<? echo "data:image/jpeg;base64," . base64_encode($usuario->img) ?>">
    </div>
    <div class="col-md-9">
        <form action="" method="post">
            <fieldset class="form-group">
                <label for="formGroupExampleInput">Classifica��o</label>
                <select class="form-control" id="classificacao" name="classificacao">
                    <?
                    $listaClassificacoes = $classificacaoDao->getClassificacaoes($link);
                    while($classificacao = mysqli_fetch_object($listaClassificacoes)){
                        echo "<option onchange='MudarCor()' value='$classificacao->idClassificacao'>$classificacao->grau / $classificacao->nome</option>";
                    }
                    ?>
                </select>
            </fieldset>
            <button class="btn btn-success-outline" name="operacao" value="cadastrar_usuario">
                <i class="fa fa-save fa-1x"></i>
                Salvar altera��es
            </button>
            <div id="prajied">

            </div>
        </form>
    </div>
    <div class="col-md-12">
        <div style="color: red;">
            <hr>
            <strong>*</strong> Campos marcados s�o obrigat�rios!
        </div>
    </div>
    <form action="" method="post">
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput">Nome *</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" value="<?=$usuario->nome?>">
        </fieldset>
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput2">E-mail *</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail para contato" value="<?=$usuario->email?>">
        </fieldset>
        <fieldset class="form-group col-md-6">
            <label for="formGroupExampleInput">Senha *</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha para acesso" value="">
        </fieldset>
        <fieldset class="form-group col-md-6">
            <label for="formGroupExampleInput">Confirme a senha *</label>
            <input type="password" class="form-control" id="senha2" name="senha2"
                   placeholder="Confirma��o de senha" value="">
        </fieldset>
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput2">Endere�o *</label>
            <input type="text" class="form-control" id="endereco" name="endereco"
                   placeholder="Endere�o para contato" value="<?=$usuario->endereco?>">
        </fieldset>
        <fieldset class="form-group col-md-4">
            <label for="formGroupExampleInput">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone fixo" value="<?=$usuario->telefone?>">
        </fieldset>
        <fieldset class="form-group col-md-4">
            <label for="formGroupExampleInput2">Celular</label>
            <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular" value="<?=$usuario->celular?>">
        </fieldset>
        <fieldset class="form-group col-md-4">
            <label for="formGroupExampleInput2">Data de nascimento *</label>
            <input type="date" class="form-control" id="data" name="data" placeholder="Data de nascimento" value="<?=$usuario->data_nasc?>">
        </fieldset>
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput2">Profiss�o</label>
            <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profiss�o" value="<?=$usuario->profissao?>">
        </fieldset>
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput2">Hor�rios de trabalho</label>
            <input type="text" class="form-control" id="horarios" name="horarios"
                   placeholder="Hor�rios de trabalho" value="<?=$usuario->hora_profissao?>">
            <hr>

            <button class="btn btn-success-outline" name="operacao" value="cadastrar_usuario">
                <i class="fa fa-save fa-1x"></i>
                Salvar altera��es
            </button>
        </fieldset>
    </form>
    <?
} else {
    header("location: home.php");
    exit;
}
?>
<script>
    function MudarCor(){
        alert('oi');
    }
</script>