<?php
$papeis = array('2');
include 'interceptor/Interceptor.php';
?>
<hr>
<? if (!isset($_GET['atraso'])) { ?>
    <div class="card-group">
        <?
        if ($result = $usuarioDao->getPros($link)) {
            while ($usuario = mysqli_fetch_object($result)) {
                ?>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <?= $usuario->nome ?>
                        </div>
                        <div class="card-block">
                            <img class="card-img-top" id="img_usuario"
                                 src="<? echo "data:image/jpeg;base64," . base64_encode($usuario->img) ?>"><br>
                            <a href="perfil.php?usuario=<?=$usuario->email?>" class="btn btn-primary-outline">Ver perfil</a>
                            <a href="#" class="btn btn-primary-outline">+ pagamento</a>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                    </div>
                </div>
                <?
            }
        }
        ?>
    </div>
<? } elseif (isset($_GET['atraso']) AND $_GET['atraso'] == true) { ?>
    <div class="card-group">
        <?
        if ($result = $usuarioDao->getProsAtraso($link)) {
            while ($usuario = mysqli_fetch_object($result)) {
                ?>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <?= $usuario->nome ?>
                        </div>
                        <div class="card-block">
                            <img class="card-img-top" id="img_usuario"
                                 src="<? echo "data:image/jpeg;base64," . base64_encode($usuario->img) ?>"><br>
                            <a href="perfil.php?usuario=<?=$usuario->email?>" class="btn btn-primary-outline">Ver perfil</a>
                            <a href="#" class="btn btn-primary-outline">+ pagamento</a>
                        </div>
                        <div class="card-footer text-muted">
                        </div>
                    </div>
                </div>
                <?
            }
        }
        ?>
    </div>
<? } ?>
