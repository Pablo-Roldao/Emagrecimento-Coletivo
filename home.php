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

    <p id="apresentacao-carrosel" class="text-center bg-dark bg-opacity-75 rounded shadow-lg fw-bold" >Vídeos para aprender sobre o emagrecimento coletivo:</p>
    <div id="carouselVideo" class="carousel slide rounded shadow-lg" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselVideo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselVideo" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselVideo" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/walking-g459c72270_1920.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Vídeo 01</h5>
                    <p>Legenda 01...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imagens/gabin-vallet-J154nEkpzlQ-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Vídeo 02...</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</body>

</html>