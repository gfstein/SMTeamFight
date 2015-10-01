<?php
$papeis = array('1', '2');
include 'interceptor/Interceptor.php';
include 'service/Util.php';
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
        <!-- Button trigger modal -->
        <button type="button" data-toggle="modal" data-target="#myModal" style="background-image: ">
            <?
            $util = new Util();
            $util->imagem($usuario->img);
            ?>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Cancelar</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Alterar imagem</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                                <?
                                $util = new Util();
                                $util->imagem($usuario->img)
                                ?>
                            </div>
                            <div class="col-md-offset-4">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <img id="imagem_preview" src="" height="120">
                                    <input id="preview_file" class="form-control" type="file" onchange="previewFile()"
                                           name="file">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar alterações</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <form action="" method="post">
            <fieldset class="form-group">
                <label for="formGroupExampleInput">Classificação</label>
                <select class="form-control" id="classificacao" name="classificacao">
                    <?
                    $listaClassificacoes = $classificacaoDao->getClassificacaoes($link);
                    while ($classificacao = mysqli_fetch_object($listaClassificacoes)) {
                        echo "<option onchange='MudarCor()' value='$classificacao->idClassificacao'>$classificacao->grau / $classificacao->nome</option>";
                    }
                    ?>
                </select>
            </fieldset>
            <button class="btn btn-success-outline" name="operacao" value="cadastrar_usuario">
                <i class="fa fa-save fa-1x"></i>
                Salvar alterações
            </button>
            <div id="prajied">

            </div>
        </form>
    </div>
    <div class="col-md-12">
        <hr>
        <div class="text-warning">Campos marcados com * são obrigatórios!
        </div>
    </div>
    <form action="" method="post">
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput">Nome *</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo"
                       value="<?= $usuario->nome ?>">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-6">
            <label for="formGroupExampleInput">Senha *</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha para acesso"
                       value="">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-6">
            <label for="formGroupExampleInput">Confirme a senha *</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                <input type="password" class="form-control" id="senha2" name="senha2"
                       placeholder="Confirmação de senha" value="">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput2">Endereço *</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-map-o fa-fw"></i></span>
                <input type="text" class="form-control" id="endereco" name="endereco"
                       placeholder="Endereço para contato" value="<?= $usuario->endereco ?>">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-4">
            <label for="formGroupExampleInput">Telefone</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-fax fa-fw"></i></span>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone fixo"
                       value="<?= $usuario->telefone ?>">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-4">
            <label for="formGroupExampleInput2">Celular</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
                <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular"
                       value="<?= $usuario->celular ?>">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-4">
            <label for="formGroupExampleInput2">Data de nascimento *</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                <input type="date" class="form-control" id="data" name="data" placeholder="Data de nascimento"
                       value="<?= $usuario->data_nasc ?>">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput2">Profissão</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
                <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissão"
                       value="<?= $usuario->profissao ?>">
            </div>
        </fieldset>
        <fieldset class="form-group col-md-12">
            <label for="formGroupExampleInput2">Horários de trabalho</label>

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                <input type="text" class="form-control" id="horarios" name="horarios"
                       placeholder="Horários de trabalho" value="<?= $usuario->hora_profissao ?>">
            </div>
            <hr>

            <button class="btn btn-success-outline" name="operacao" value="cadastrar_usuario">
                <i class="fa fa-save fa-1x"></i>
                Salvar alterações
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
    function MudarCor() {
        alert('oi');
    }

    function previewFile() {
        var preview = document.getElementById("imagem_preview");
        var file = document.getElementById("preview_file").files[0]; //sames as here
        var reader = new FileReader();

        if (file.size > 2000000) {
            alert("Imagem selecionada ultrapassa os 2 mb de tamnho. Selecione outra.");
        } else {
            reader.onloadend = function () {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    }
    previewFile();
</script>