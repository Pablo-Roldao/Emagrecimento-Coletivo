<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="shortcut icon" href="imagens/logo-ifpe.png" type="image/x-icons">
    <title>Perfil</title>
</head>

<body>
    <nav class="navbar navbar-expand bg-dark text-uppercase">

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
                        <a class="nav-link" aria-current="page" href="logout.php">Sair</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

    <div id="profile-information" class="text-success shadow bg-dark bg-opacity-80 p-5 rounded fw-bold">
        <p>
            Nome:
            <?php
            include "config.php";

            $sql = "SELECT nome FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
            ?>
        </p>

        <p>
            Matrícula:
            <?php
            echo $_SESSION['matricula'];
            ?>

        </p>

        <p>
            Peso:
            <?php
            include "config.php";

            $sql = "SELECT peso FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
            ?>
        </p>
        <p>
            Altura:
            <?php
            include "config.php";

            $sql = "SELECT altura FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
            ?>cm
        </p>

        <p>
            IMC:
            <?php
            include "config.php";

            $sql = "SELECT altura FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $altura = $row[0] / 100;

            $sql2 = "SELECT peso FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
            $result = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_array($result);
            $peso = $row[0];

            echo round(($peso / ($altura * $altura)), 3);
            ?>
        </p>

        <p>
            Data de nascimento:
            <?php
            include "config.php";

            $sql = "SELECT data_nascimento FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
            ?>
        </p>

        <p>
            Turma:
            <?php
            include "config.php";

            $sql = "SELECT codigo_turma FROM usuarios WHERE matricula='" . $_SESSION['matricula'] . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $codigo_turma = $row[0];

            $sql2 = "SELECT nome FROM turmas WHERE codigo='" . $codigo_turma . "'";
            $result = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_array($result);
            $nome_turma = $row[0];

            echo $nome_turma;
            ?>
        </p>
    </div>

</body>

</html>