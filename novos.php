<?php
$papeis = array('2');
include 'interceptor/Interceptor.php';
?>
<hr>
<div class="card-group">
    <?
    if ($result = $usuarioDao->getFrees($link)) {
        htmlComum($result);
    }
    ?>
</div>
<?
function htmlComum($result)
{
    while ($usuario = mysqli_fetch_object($result)) {
        ?>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-header">
                    <?= $usuario->nome ?>
                </div>
                <div class="card-block">
                    <?
                    $util = new Util();
                    $util->imagem($usuario->img);
                    ?>
                    <a href="perfil.php?usuario=<?= $usuario->email ?>" class="btn btn-primary-outline">
                        <i class="fa fa-street-view fa-1x"></i>
                        Ver perfil
                    </a>
                    <a href="#" class="btn btn-primary-outline">
                        <i class="fa fa-credit-card fa-1x"></i>
                        pagamento
                    </a>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
        <?
    }
}

?>
