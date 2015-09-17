<?php
include 'cabecalho.php';
?>
<main>
    <section class="module parallax parallax-1">
        <div class="container">
            <h1>SM Team Fight</h1>
        </div>
    </section>
    <section class="module content" id="Apresenta��o">
        <div class="container">
            <h2>Not�cias / Informa��es</h2>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox" style="height: 400px">
                    <div class="carousel-item active">
                        <img src="img/demo/_small/1.jpg" alt="..." height="300px">

                        <div class="carousel-caption">
                            <h3>SM Team Fight</h3>

                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/demo/_small/2.jpg" alt="..." height="300px">

                        <div class="carousel-caption">
                            <h3>Logomarca</h3>

                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/prop1.jpg" alt="..." height="300px">

                        <div class="carousel-caption">
                            <h3>Outra foto</h3>

                            <p>...</p>
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

    <section class="module parallax parallax-2" id="Sobre">
        <div class="container">
            <h1>Sobre</h1>
        </div>
    </section>
    <section class="module content">
        <div class="container">
            Em lingu�stica, a no��o de texto � ampla e ainda aberta a uma defini��o mais precisa. Grosso modo, pode ser
            entendido como manifesta��o lingu�stica das ideias de um autor, que ser�o interpretadas pelo leitor de
            acordo com
            seus conhecimentos lingu�sticos e culturais. Seu tamanho � vari�vel.

            �Conjunto de palavras e frases articuladas, escritas sobre qualquer suporte�[1] .

            �Obra escrita considerada na sua reda��o original e aut�ntica (por oposi��o a sum�rio, tradu��o, notas,
            coment�rios,
            etc.)�[2] .

            "Um texto � uma ocorr�ncia lingu�stica, escrita ou falada de qualquer extens�o, dotada de unidade
            sociocomunicativa,
            sem�ntica e formal. � uma unidade de linguagem em uso."[3]

            O interesse pelo texto como objeto de estudo gerou v�rios trabalhos importantes de te�ricos da Lingu�stica
            Textual,
            que percorreram fases diversas cujas caracter�sticas principais eram transpor os limites da frase
            descontextualizada
            da gram�tica tradicional e ainda incluir os relevantes pap�is do autor e do leitor na constru��o de textos.

            Um texto pode ser escrito ou oral e, em sentido lato, pode ser tamb�m n�o verbal.

            Texto cr�tico � uma produ��o textual que parte de um processo reflexivo e anal�tico gerando um conte�do com
            cr�tica
            construtiva e bem fundamentada.
        </div>
    </section>
    <section class="module parallax parallax-3" id="Cadastro">
        <div class="container">
            <h1>Cadastro</h1>
        </div>
    </section>
    <section class="module content">
        <div class="container">
            <form action="controller/Controller.php" method="post">
                <fieldset class="form-group">
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput2">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail para contato">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha para acesso">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput2">Endere�o</label>
                    <input type="text" class="form-control" id="endereco" name="endereco"
                           placeholder="Endere�o para contato">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone fixo">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput2">Celular</label>
                    <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput2">Profiss�o</label>
                    <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profiss�o">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput2">Hor�rios de trabalho</label>
                    <input type="text" class="form-control" id="horarios" name="horarios"
                           placeholder="Hor�rios de trabalho">
                </fieldset>
                <fieldset class="form-group">
                    <label for="formGroupExampleInput2">Data de nascimento</label>
                    <input type="date" class="form-control" id="data" name="data" placeholder="Data de nascimento">
                </fieldset>
                <button class="btn btn-success-outline" name="operacao" value="cadastrar_usuario">
                    Cadastrar
                </button>
            </form>
        </div>
    </section>

    <div class="col-md-12">
        <div class="container">
            <h1>Contato</h1>
        </div>
        <div class="container col-md-offset-3" style="margin-bottom: 50px">
            (xx) xxxx-xxxx / (xx) xxxx-xxxx / xxx@mail.com.br
        </div>
    </div>
</main><!-- /main -->
