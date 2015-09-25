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
    #body_1{
        background-color: #262626; color: white;
    }
</style>
<main>
    <section class="module parallax parallax-1">
        <div class="container" id="logo_inicial">
            <h1></h1>
        </div>
    </section>
    <section class="module content" id="Apresentação">
        <div class="container">
            <h2>Notícias / Informações</h2>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"">
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
            <h1>Razão</h1>
        </div>
    </section>
    <section class="module content">
        <div class="container">
            Aulas de Muaythai e Taekwondo WTF, venda de materiais a Pronta Entrega de Muaythai e Taekwondo, produtos
            excelentes e preços acessíveis é no SM Team Fight/KeepFit, ambiente climatizado e sala específica para Artes
            Marciais,
            com profissionais especializados e todos os materiais necessários para um treino com a máxima segurança,
            nosso endereço é no 4º Andar do Shopping Santa Maria Calçadão no centrão de Santa Maria,
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
            if(isset($_GET['senhas']) AND $_GET['senhas']==true){
                ?>
                <div class="alert alert-danger">
                    <strong>As senha não são iguais</strong>
                </div>
            <?php
             }
            ?>

            <form action="controller/Controller.php" method="post">
                <div class="col-md-12">
                    <div style="color: red;">
                        <strong>*</strong> Campos marcados são obrigatórios!<hr>
                    </div>
                </div>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput">Nome *</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">E-mail *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail para contato">
                </fieldset>
                <fieldset class="form-group col-md-6">
                    <label for="formGroupExampleInput">Senha *</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha para acesso">
                </fieldset>
                <fieldset class="form-group col-md-6">
                    <label for="formGroupExampleInput">Confirme a senha *</label>
                    <input type="password" class="form-control" id="senha2" name="senha2"
                           placeholder="Confirmação de senha">
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">Endereço *</label>
                    <input type="text" class="form-control" id="endereco" name="endereco"
                           placeholder="Endereço para contato">
                </fieldset>
                <fieldset class="form-group col-md-4">
                    <label for="formGroupExampleInput">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone fixo">
                </fieldset>
                <fieldset class="form-group col-md-4">
                    <label for="formGroupExampleInput2">Celular</label>
                    <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular">
                </fieldset>
                <fieldset class="form-group col-md-4">
                    <label for="formGroupExampleInput2">Data de nascimento *</label>
                    <input type="date" class="form-control" id="data" name="data" placeholder="Data de nascimento">
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">Profissão</label>
                    <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissão">
                </fieldset>
                <fieldset class="form-group col-md-12">
                    <label for="formGroupExampleInput2">Horários de trabalho</label>
                    <input type="text" class="form-control" id="horarios" name="horarios"
                           placeholder="Horários de trabalho">
                    <hr>

                    <button class="btn btn-success-outline" name="operacao" value="cadastrar_usuario">
                        Cadastrar
                    </button>
                </fieldset>
            </form>
        </div>
        <hr>
    </section>

    <div class="col-md-12" id="Informacoes" style="border: 1px solid green; border-radius: 5px; margin-bottom: 50px">
        <div class="container">
            <br><h1>Informações</h1>
        </div>
        <div class="container col-md-offset-1" style="margin-bottom: 50px">
            <h4>Funcionamento</h4>
            De segunda a sexta das 14h ás 22 h.
            Sábados das 15 h as 20 h.
            <hr>
            <h4>Endereço</h4>
            Dr Bozzano, 1263 - 4° Andar Calçadão Shopping Santa Maria - Centro, 97015-004 Santa Maria.
            <hr>
            <h4>Contato</h4>
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
            Desenvolvido por <a href="https://www.facebook.com/willianw94">Willian RLM</a> e
            <a href="https://www.facebook.com/guilhermefloresstein?fref=ts">Guilherme Stein</a>.
        </div>
    </div>
</main><!-- /main -->
