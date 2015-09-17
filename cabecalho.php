<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta charset="utf-8"/>

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
    <!-- Bootstrap --><!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>-->
</head>
<body style="background-color: #262626; color: white">
<nav class="navbar navbar-dark bg-inverse" style="border-radius: 0%; background-color: #000000;">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
        &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" width="50px">
        </a>
        <? if (!isset($_SESSION['chave_sm_team'])) { ?>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#Apresentação">Apresentação <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Sobre">Sobre <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Cadastro">Cadastro <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contato">Contato <span class="sr-only">(current)</span></a>
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
    <div class="panel panel-smteam">
        <div class="panel-body">