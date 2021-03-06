<?
include 'service/Conexao.php';
include 'cabecalho.php';
?>
<style>
    #menu_principal {
        position: fixed;
        width: 100%;
        z-index: 999
    }

    #body_1 {
        background-color: #262626;
        color: white;
    }
</style>
<main>
    <section class="module parallax parallax-1">
        <div class="container" id="logo_inicial">
            <h1></h1>
        </div>
    </section>
    <section class="module content" id="Apresenta��o">
        <div class="container">
            <h2><i class="fa fa-newspaper-o fa-fw"></i> Not�cias</h2>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"
            ">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox" style="max-height: 500px;">
                <div class="carousel-item active">
                    <img src="img/slides/prop1.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slides/taekwondo.jpg" alt="...">

                    <div class="carousel-caption">
                        <h2>Taekwondo WTF</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slides/muay5.jpg" alt="...">

                    <div class="carousel-caption">
                        <h2>Muay Thai / Muay Boran</h2>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </section>

    <section class="module parallax parallax-2" id="Razao">
        <div class="container">
            <h1>Raz�o</h1>
        </div>
    </section>
    <section class="module content">
        <div class="container">
            Aulas de Muaythai e Taekwondo WTF, venda de materiais a Pronta Entrega de Muaythai e Taekwondo, produtos
            excelentes e pre�os acess�veis � no SM Team Fight/KeepFit, ambiente climatizado e sala espec�fica para Artes
            Marciais,
            com profissionais especializados e todos os materiais necess�rios para um treino com a m�xima seguran�a,
            nosso endere�o � no 4� Andar do Shopping Santa Maria Cal�ad�o no centr�o de Santa Maria,
            venha fazer uma aula experimental gratuita!!!<br>
        </div>
    </section>
    <section class="module parallax parallax-3" id="Cadastro">
        <div class="container">
            <h1>Cadastro</h1>
        </div>
    </section>
    <section class="module content">
        <div class="container">
            <?php
            if (isset($_GET['senhas']) AND $_GET['senhas'] == true) {
                ?>
                <div id="erroFormCadastro" class="text-danger">
                    <strong>As senhas n�o s�o iguais</strong>
                </div>
                <?php
            }
            if (isset($_GET['required']) AND $_GET['required'] == true) {
                ?>
                <div id="erroFormCadastro" class="text-danger">
                    <strong>Preencha os campos obrigat�rios</strong>
                </div>
                <?php
            }
            $usuario = array('nome' => "", 'email' => "", 'telefone' => "", 'celular' => "", 'endereco' => "", 'horaProfissao' => "", 'dataNasc' => "", 'profissao' => "");
            if (isset($_REQUEST["usuario"])) {
                $usuario = json_decode($_REQUEST["usuario"], true);
            }
            ?>

            <form action="controller/ControllerPublic.php" method="post">
                <div class="col-md-12">
                    <hr>
                    <div class="text-warning">Campos marcados com * s�o obrigat�rios!
                    </div>
                </div>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput">Nome *</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo"
                               value="<?= $usuario['nome'] ?>">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">E-mail *</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="E-mail para contato" value="<?= $usuario['email'] ?>">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-6">
                    <label for="formGroupExampleInput">Senha *</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input type="password" class="form-control" id="senha" name="senha"
                               placeholder="Senha para acesso">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-6">
                    <label for="formGroupExampleInput">Confirme a senha *</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input type="password" class="form-control" id="senha2" name="senha2"
                               placeholder="Confirma��o de senha">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">Endere�o *</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-map-o fa-fw"></i></span>
                        <input type="text" class="form-control" id="endereco" name="endereco"
                               placeholder="Endere�o para contato" value="<?= $usuario['endereco'] ?>">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-4">
                    <label for="formGroupExampleInput">Telefone</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-fax fa-fw"></i></span>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone fixo"
                               value="<?= $usuario['telefone'] ?>">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-4">
                    <label for="formGroupExampleInput2">Celular</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
                        <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular"
                               value="<?= $usuario['celular'] ?>">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-4">
                    <label for="formGroupExampleInput2">Data de nascimento *</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        <input type="date" class="form-control" id="data" name="data" placeholder="Data de nascimento"
                               value="<?= $usuario['dataNasc'] ?>">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">Profiss�o</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-gavel fa-fw"></i></span>
                        <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profiss�o"
                               value="<?= $usuario['profissao'] ?>">
                    </div>
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">Hor�rios de trabalho</label>

                    <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>
                        <input type="text" class="form-control" id="horarios" name="horarios"
                               placeholder="Hor�rios de trabalho" value="<?= $usuario['horaProfissao'] ?>">
                    </div>
                    <hr>

                    <button class="btn btn-success-outline" name="operacao" value="cadastrar_usuario">
                        <i class="fa fa-save fa-fw"></i>
                        Cadastrar
                    </button>
                </fieldset>
            </form>
        </div>
        <hr>
    </section>

    <div class="col-md-12" id="Informacoes" style="border: 1px solid green; border-radius: 5px; margin-bottom: 50px">
        <div class="container">
            <br>

            <h1>Informa��es</h1>
        </div>
        <div class="container col-md-offset-1" style="margin-bottom: 50px">
            <h4><i class="fa fa-cogs fa-fw"></i> Funcionamento</h4>
            De segunda a sexta das 14h �s 22 h.
            S�bados das 15 h as 20 h.
            <hr>
            <h4><i class="fa fa-map-marker fa-fw"></i> Endere�o</h4>
            Dr Bozzano, 1263 - 4� Andar Cal�ad�o Shopping Santa Maria - Centro, 97015-004 Santa Maria.
            <hr>
            <h4><i class="fa fa-mobile fa-fw"></i> Contato</h4>
            55 3347-3387 / 55 9906-0410 <img src="img/logos/whatsapp.png" width="25px" style="margin-bottom: 5px"
                                             title="Whatsapp" alt="Whatsapp"><br>
            E-mail: crismoraes_boton@hotmail.com
            <hr>
        </div>
        <div class="container col-md-offset-1" style="margin-bottom: 50px">
            <div class="fb-like"></div>
            <div id="fb-root"></div>
            <script>
                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        </div>
        <div id="rodape">
            <i class="fa fa-registered fa-fw"></i> Desenvolvido por <a href="https://www.facebook.com/willianw94">Willian RLM</a> e
            <a href="https://www.facebook.com/guilhermefloresstein?fref=ts">Guilherme Stein</a>.
        </div>
    </div>
</main><!-- /main -->
