<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="imagens/logo-ifpe.png" type="image/x-icons">
    <title>Emagrecimento coletivo</title>
</head>

<body class="text-uppercase">

    <nav class="navbar navbar-expand bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand h5" href="home.php">
                <img src="imagens/logo-emagrecimentocoletivo.png" alt="Emagrecimento Coletivo" class="rounded-circle" id="navbar-logo"> Emagrecimento Coletivo
            </a>

            <div class="collapse navbar-collapse">

                <ul class="navbar-nav h6">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="whoarewe.php">Quem somos?</a>
                    </li>

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

    <div id="conteudo" class="text-sucess text-center bg-dark bg-opacity-75 p-5 rounded shadow-lg">

        <h3>Bem vindo ao Emagrecimento Coletivo!</h3>

    </div>

    <div id="carouselExampleControls" class="carousel slide text-center bg-dark bg-opacity-75 rounded shadow-lg " data-ride="carousel">
    <p id="apresentacao-carrosel" class="text-center fw-bold">Vídeos para aprender sobre o emagrecimento coletivo:</p>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe width="660" height="394" src="https://www.youtube.com/embed/wwRY3o7eoLM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
                <iframe width="660" height="394" src="https://www.youtube.com/embed/sQeolmlMFlg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
                <iframe width="660" height="394" src="https://www.youtube.com/embed/F2d6nNjxjbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>