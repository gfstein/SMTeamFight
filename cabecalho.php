<!DOCTYPE html>
<html>
<head>
    <!-- Não descomente essa maldição pf!!!!!!
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
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
<nav class="navbar navbar-dark bg-inverse" id="menu_principal" style="border-radius: 0%; background-color: #000000; border-bottom: 1px solid green">
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
                    <a class="nav-link" href="#Apresentação">Apresentação <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Razao">Razão <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Cadastro">Cadastro <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Informacoes">Informações <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <? if (isset($_GET['usuario'])): ?>
                        <a class="nav-link" style="color: red;"><strong>Dados invalidos!</strong></a>
                    <? endif; ?>
                </li>
            </ul>
            <form class="form-inline navbar-form pull-right" action="controller/ControllerLogin.php" method="post">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
                <input type="password" name="senha" class="form-control" placeholder="Senha">

                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Lembrar-me
                    </label>
                </div>
                <button name="operacao" value="login" class="btn btn-success-outline">
                    Logar
                </button>
            </form>
        <? } else { ?>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Alunos em dia<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php?atraso=true">Alunos com atraso<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Apresentação">Novos usuários<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Apresentação">Classificações<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pull-right">
                    <a class="nav-link" href="controller/Controller.php">
                        <button class="btn btn-danger-outline">
                            Sair
                        </button>
                    </a>
                </li>
            </ul>
        <? } ?>
    </div>
</nav>
<div class="tela">