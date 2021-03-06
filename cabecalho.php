<!DOCTYPE html>
<html>
<head>
    <!-- N�o descomente essa maldi��o pf!!!!!!
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta charset="utf-8">
    -->

    <!-- FAVICON-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/faviconapple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--Fonta awersone-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap --><!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>-->
    <!--Bootstrap 4 alpha-->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

    <!-- Css SM TEAN FIGHT -->
    <link href="css/style.css" rel="stylesheet">

    <title>SM Team Fight</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Academia de muay thay e taekwondo">
    <meta name="keywords" content="sm team fight, muay thai, muay, muay boran, taekwondo">
    <meta name="author" content="SM Team Fight">
</head>
<body id="body_1">
<nav class="navbar navbar-dark bg-inverse" id="menu_principal"
     style="border-radius: 0%; background-color: #000000; border-bottom: 1px solid green">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
        &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2" style="margin-top: 10px">
        <a class="navbar-brand" href="#">
            <img src="img/parallax/logo.png" width="50px" style="margin-top: -10px">
        </a>
        <? if (!isset($_SESSION['chave_sm_team'])) { ?>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#Apresenta��o">
                        <i class="fa fa-home fa-1x"></i>
                        Apresenta��o <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Razao">
                        <i class="fa fa-heart fa-1x"></i>
                        Raz�o <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Cadastro">
                        <i class="fa fa-edit fa-1x"></i>
                        Cadastro <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Informacoes">
                        <i class="fa fa-info fa-1x"></i>
                        Informa��es <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <? if (isset($_GET['credenciais'])): ?>
                        <a class="nav-link" style="color: red;"><strong>Dados invalidos!</strong></a>
                    <? endif; ?>
                </li>
            </ul>
            <form class="form-inline navbar-form pull-right" action="controller/ControllerPublic.php" method="post">
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                    <input type="text" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="input-group margin-bottom-sm">
                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Lembrar-me
                    </label>
                </div>
                <button name="operacao" value="login" class="btn btn-success-outline">
                    <i class="fa fa-sign-in fa-1x"></i>
                    Logar
                </button>
            </form>
        <? } else {
            if ($_SESSION['papel'] == 2) { ?>
                <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">
                        <i class="fa fa-plus-square fa-1x"></i>
                        Alunos em dia
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php?atraso=true">
                        <i class="fa fa-minus-square fa-1x"></i>
                        Alunos com atraso<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="novos.php">
                        <i class="fa fa-newspaper-o fa-1x"></i>
                        Novos usu�rios<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Apresenta��o">
                        <i class="fa fa-tags fa-1x"></i>
                        Classifica��es<span class="sr-only">(current)</span></a>
                </li>
            <? } ?>
            <li class="nav-item pull-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog fa-1x"></i>
                        <?= $_SESSION['email'] ?>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="perfil.php?usuario=<?= $_SESSION['email'] ?>">
                            <i class="fa fa-user fa-2x"></i>
                            Perfil
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="controller/Controller.php">
                            <button class="btn btn-danger-outline btn-block">
                                <i class="fa fa-power-off fa-1x"></i>
                                Sair
                            </button>
                        </a>
                    </div>
                </div>
            </li>
            </ul>
        <? } ?>
    </div>
</nav>
<div class="tela">