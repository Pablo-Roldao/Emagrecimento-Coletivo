<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/classes.css">
    <link rel="shortcut icon" href="imagens/logo-ifpe.png" type="image/x-icons">
    <title>Turmas</title>
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
                </ul>

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

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Sair</a>
                </li>

            </div>




        </div>

    </nav>

    <br>

    <div id="class-information"name="3ºTI - Tarde" class="text-success shadow bg-dark bg-opacity-80 p-5 rounded fw-bold">
        <p>
            3ºTI - Tarde
            <br>
            Alunos:
            <?php
            include "config.php";

            $sql = "SELECT altura FROM usuarios WHERE codigo_turma='123456'";
            $result = mysqli_query($conn, $sql);
            $rowAltura = mysqli_fetch_array($result);

            $sql = "SELECT peso FROM usuarios WHERE codigo_turma='123456'";
            $result = mysqli_query($conn, $sql);
            $rowPeso = mysqli_fetch_array($result);

            $sql = "SELECT nome FROM usuarios WHERE codigo_turma='123456'";
            $result = mysqli_query($conn, $sql);
            $rowNome = mysqli_fetch_array($result);

            for ($c = 0; $c < count($rowNome) - 1; $c++) {
                echo "<p>" . $rowNome[$c] . ", IMC: " . round(($rowPeso[$c] / ($rowAltura[$c]/100 * $rowAltura[$c]/100)), 3) . "</p>";
            }
            ?>
        </p>
    </div>

    <br>

    <div id="class-information" name="3ºTMA - Tarde" class="text-success shadow bg-dark bg-opacity-80 p-5 rounded fw-bold">
        <p>
            3ºTI - Tarde
            <br>
            Alunos:
            <?php
            include "config.php";

            $sql = "SELECT altura FROM usuarios WHERE codigo_turma='654321'";
            $result = mysqli_query($conn, $sql);
            $rowAltura = mysqli_fetch_array($result);

            $sql = "SELECT peso FROM usuarios WHERE codigo_turma='654321'";
            $result = mysqli_query($conn, $sql);
            $rowPeso = mysqli_fetch_array($result);

            $sql = "SELECT nome FROM usuarios WHERE codigo_turma='654321'";
            $result = mysqli_query($conn, $sql);
            $rowNome = mysqli_fetch_array($result);

            for ($c = 0; $c < count($rowNome) - 1; $c++) {
                echo "<p>" . $rowNome[$c] . ", IMC: " . round(($rowPeso[$c] / ($rowAltura[$c]/100 * $rowAltura[$c]/100)), 3) . "</p>";
            }
            ?>
        </p>
    </div>

</body>

</html>