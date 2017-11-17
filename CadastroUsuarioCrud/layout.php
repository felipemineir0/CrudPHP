<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?php echo $titulo; ?></title>

    <!-- CSS  -->
    <link href="/CadastroUsuarioCrud/content/css/fonts.css" rel="stylesheet">
    <link href="/CadastroUsuarioCrud/content/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/CadastroUsuarioCrud/content/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!--  Scripts-->
    <script src="/CadastroUsuarioCrud/content/js/jquery-3.2.1.min.js"></script>
    <script src="/CadastroUsuarioCrud/content/js/materialize.js"></script>
    <script src="/CadastroUsuarioCrud/content/js/init.js"></script>

</head>
<body>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">
                <img class="imagem" src="/CadastroUsuarioCrud/img/logo.jpg" alt="Atividade APS">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/CadastroUsuarioCrud/index.php">Home</a></li>
                <li><a href="/CadastroUsuarioCrud/endereco/index.php">Cadastro de Endereços</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="/CadastroUsuarioCrud/index.php">Home</a></li>
                <li><a href="/CadastroUsuarioCrud/endereco/index.php">Cadastro de Endereços</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">

        <?php echo $conteudo; ?>

    </div>
</div>

    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
            <div class="col l2 s12"></div>
                <div class="col l6 s12">
                    <h5 class="white-text">Apresentação</h5>
                    <p class="grey-text text-lighten-4">Aluno: Felipe Borges Ferreira <br>
                    Curso: Sistemas de Informações 4º periodo Noturno <br>
                    Centro Universitário de Patos de Minas<br>
                    Professor: Eduardo Henrique Silva<br>
                    Esta atividade é um CRUD.</p>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Menu</h5>
                    <ul>
                        <li><a class="menu" href="index.php">Home</a></li>
                        <li><a class="menu" href="/CadastroUsuarioCrud/usuario/index.php">CADASTRO DE ENDEREÇOS</a></li>
                        <!--<li><a class="menu" href="area.php">Área do triângulo</a></li>
                        <li><a class="menu" href="calcula_imc.php">IMC</a></li>
                        <li><a class="menu" href="funcao.php">Função do 2º Grau</a></li>
                        <li><a class="menu" href="tabuada.php">Tabuada</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                ©2017 Atividade APS - Quase todos os direitos reservados
            </div>
        </div>
    </footer>
    </body>
</html>