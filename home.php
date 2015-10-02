<?php
$papeis = array('2');
include 'interceptor/Interceptor.php';

$util = new Util();
?>
<hr>
<? if (!isset($_GET['atraso'])) { ?>
    <div class="card-group">
        <?
        if ($result = $usuarioDao->getPros($link)) {
            htmlComum($result, $util);
        }
        ?>
    </div>
<? } elseif (isset($_GET['atraso']) AND $_GET['atraso'] == true) { ?>
    <div class="card-group">
        <?
        if ($result = $usuarioDao->getProsAtraso($link)) {
            htmlComum($result, $util);
        }
        ?>
    </div>
    <?
}
function htmlComum($result, $util)
{
    while ($usuario = mysqli_fetch_object($result)) {
        ?>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <?= $usuario->nome ?>
                </div>
                <div class="card-block row">
                    <div class="col-md-12">
                        <form action="perfil.php" method="get">
                            <button class="btn btn-default" name="usuario" value="<?= $usuario->email ?>">
                                <?
                                $util->imagem($usuario->img);
                                ?>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <form action="#" method="get">
                            <button class="btn btn-primary-outline" name="usuario" value="<?= $usuario->email ?>">
                                <i class="fa fa-credit-card fa-1x"></i>
                                Pagamentos
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
        <?
    }
}

?>
