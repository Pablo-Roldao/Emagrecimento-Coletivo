<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/whoarewe.css">
    <link rel="shortcut icon" href="imagens/logo-ifpe.png" type="image/x-icons">
    <title>Quem somos?</title>
</head>

<body>

    <nav class="navbar navbar-expand bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand h5" href="home.php">
                <img src="imagens/logo-emagrecimentocoletivo.png" alt="Emagrecimento Coletivo" class="rounded-circle" id="navbar-logo"> Emagrecimento Coletivo
            </a>

            <div class="collapse navbar-collapse">

                <ul class="navbar-nav h6">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="profile.php">
                            <?php
                            include "config.php";

                            $sql = "SELECT nome FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            echo $row[0];
                            ?>
                        </a>
                    </li>

                    <?php


                    if (/*!isset($_SESSION['matricula']) &&*/$_SESSION['matricula'] == "00000000000000") {
                        echo "<li class=\"nav-item\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"classes.php\">Turmas</a>
            </li>";
                    }

                    if (!isset($_SESSION['matricula'])) {
                        echo "<li class=\"nav-item\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"signup.php\">Cadastro</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" aria-current=\"page\" href=\"login.html\">Entrar</a>
            </li>";
                    } else {
                        echo "<li class=\"nav-item\">
                 <a class=\"nav-link\" aria-current=\"page\" href=\"logout.php\">Sair</a>
            </li>";
                    }
                    ?>

                </ul>

            </div>

        </div>

    </nav>

    <br>

    <div>

        <p class="text-success shadow bg-dark bg-opacity-60 p-5 text-justify">O respectivo projeto é um trabalho indicado pelo professor Humberto Beltrão a turma do 3° técnico em informática tarde na matéria Linguagem de Programação Web no IFPE Campus Garanhuns. O trabalho consiste na criação de algum projeto relacionado a uma matéria básica do ensino médio, onde o tema foi sorteado em paralelo à alguma outra disciplina paga pelos alunos (geografia, matemática,...). <br> <br>Realizada em trios, o respectivo projeto a seguir foi realizado pelos alunos Maria Pontes, Pablo Santos e Paulo Cardoso cuja matéria a ser o tema foi Educação física com o professor Fernando César. <br> <br>Em conversa foi decidido criar o projeto emagrecimento coletivo que consiste em solicitar o email, nome, sexo, matrícula, altura e peso para calcular o IMC, a partir disso fazer uma média e uma senha para poder ter acesso a plataforma onde será possível postar resultados e acompanhar colegas.</p>

        <table name="humberto" class="text-success shadow bg-dark bg-opacity-60 text-justify">
            <tr>
                <td><img width="158" height="196" src='imagens/humberto.jpg' /></td>
                <td><strong>Me.Humberto Beltrão da Cunha Júnior</strong> <br>Engenheiro da computação pela Escola Politécnica da Universidade de Pernambuco (2013) e mestre em Engenharia de Sistemas pela mesma instituição (2016). Foi, durante quatro anos (2012 - 2016), membro do grupo de pesquisa em Enxames de Robôs, tendo também participado, durante o ano de 2012, de dois acampamentos de robótica promovidos pela Escola Politécnica de Pernambuco em parceria com a empresa estadunidense Special Project Initiative Team. Atualmente é professor do Ensino Básico, Técnico e Tecnológico do Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco - campus Afogados da Ingazeira. Trabalhou como analista de desenvolvimento de software na Serttel, atuando no desenvolvimento de novas funcionalidades, manutenção e criação de campanhas de testes para aplicativos móveis relacionadas à mobilidade urbana. Foi residente do programa de análise de testes de software do convênio entre a Motorola Inc. e o Centro de Informática da UFPE durante o ano de 2016, exercendo as atividades relacionadas a testes e desenvolvimento de software. Estagiou, no setor de engenharia elétrica e desenvolvimento, na Aeroespacial Tecnologias em Energias e Sistemas Renováveis Ltda., empresa que atua desde o setor de climatologia e meteorologia, até a prospecção e avaliação de potencial eólico e solar. Suas principais áreas de pesquisa estão concentradas em Inteligência Computacional, Simulação de Sistemas Robóticos, Redes de Sensores Sem Fio, Desenvolvimento mobile.
                </td>
            </tr>
        </table>

        <br>

        <table name="fernando" class="text-success shadow bg-dark bg-opacity-60 text-justify">
            <tr>
                <td><img width="158" height="196" src='imagens/fernado.png' /></td>
                <td> <strong class="text-center">Me.Fernando César Pereira da Silva.</strong>
                    <br>Mestre em Saúde Mental do Programa de Saúde Mental da Universidade de Pernambuco, atualmente é docente do IFPE. Possui Graduação em Educação Física (Licenciatura e Bacharelado) pela Universidade Estadual da Paraíba, Graduação em História pela FAFICA, Caruaru e Especialização Latu Sensu em Informática na Educação pela UFPE. MBA Microsoft System Enginner. Atuou na Rede Pública Estadual de Pernambuco como Professor de Educação Física e Coordenador de Núcleo de Tecnologia Educacional ligado ao PROINFO. Atuou no Ensino Superior na UFRPE Serra Talhada, AESET Serra Talhada, FIS Serra Talhada e AESET Arcoverde.
                </td>
            </tr>
        </table>

        <br>

        <table name="gabriela" class="text-success shadow bg-dark bg-opacity-60 text-justify">
            <tr>
                <td><img width="158" height="196" src='imagens/gabi-qs.png' /></td>
                <td> <strong>Maria Gabriela Ferreira Pontes</strong><br>Discente atualmente matriculada no curso técnico integrado de informática, no Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco (IFPE).  Pesquisadora e .................</td>
            </tr>
        </table>

        <br>

        <table name="pablo" class="text-success shadow bg-dark bg-opacity-60 text-justify">
            <tr>
                <td><img width="158" height="196" src='imagens/pablo-qs.png' /></td>
                <td> <strong>Pablo Santos Roldão</strong><br>Discente atualmente matriculado no curso técnico integrado de informática, no Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco (IFPE). .................................................</td>
            </tr>
        </table>

        <br>

        <table name="paulo"class="text-success shadow bg-dark bg-opacity-60 text-justify">
            <tr>
                <td><img width="158" height="196" src='imagens/paulo-qs.png' /></td>
                <td> <strong>Paulo Vinícius da Silva Cardoso</strong><br>Discente atualmente matriculado no curso técnico integrado de informática, no Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco (IFPE). ...........................................</td>
            </tr>
        </table>

    </div>



</body>

</html>