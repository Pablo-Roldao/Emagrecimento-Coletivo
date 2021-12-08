<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="shortcut icon" href="imagens/logo-ifpe.png" type="image/x-icons">
    <title>Cadastrar em Emagrecimento Coletivo</title>
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

            </div>




        </div>

    </nav>

    <form class="text-success text-center bg-dark shadow-lg rounded p-5" action="signupProcess.php" method="post">

        <h1 class="text-center text-uppercase">Cadastro</h1>
        <br>

        <label for="nome" class="form-label"><b>Nome</b></label>
        <input type="text" class="form-control" placeholder="Insira o nome" name="nome" required>

        <label for="matricula" class="form-label"><b>Matrícula</b></label>
        <input type="text" class="form-control" placeholder="Insira a matrícula" name="matricula" required>

        <label for="email" class="form-label"><b>Endereço de email</b></label>
        <input type="email" class="form-control" placeholder="Insira o email" name="email" required>

        <label for="peso" class="form-label"><b>Peso</b></label>
        <input type="number" class="form-control" placeholder="Insira o peso" name="peso" required>

        <label for="altura" class="form-label"><b>Altura</b></label>
        <input type="number" class="form-control" placeholder="Insira a altura" name="altura" required>

        <label for="sexo" class="form-label"><b>Sexo</b></label>
        <select name="sexo" class="form-control">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>

        <label for="data_nascimento" class="form-label"><b>Data de nascimento</b></label>
        <input name="data_nascimento" type="date" class="form-control">

        <!--<label for="turma" class="form-label"><b>Turma</b></label>
        <select name="turma" class="form-control">
            <?php
                /*include "config.php";

                $sql = "SELECT nome FROM turmas";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);

                for ($c = 0; $c < count($row); $c++) {
                    echo "<option value=\"" . $row[$c] . "\">" . $row[$c] . "</option>";
                }*/
            ?>
        </select>--><!--Pra o futuro-->

        <label for="codigo-turma" class="form-label"><b>Código da turma</b></label>
        <input type="text" class="form-control" placeholder="Insira o código da turma" name="codigo_turma" required>

        <label for="senha" class="form-label"><b>Senha</b></label>
        <input type="password" class="form-control" placeholder="Insira a senha" name="senha" required>

        <!--<label for="repeticaosenha" class="form-label"><b>Repita a senha</b></label>
        <input type="password" class="form-control" placeholder="Repita a senha" name="repeticaosenha" required>-->
        <!--Para um futuro...-->

        <br>
        <p>Já possui um cadastro? <a href="login.html">Entre.</a></p>

        <br>
        <button type="submit" class="btn btn-success btn-lg">CADASTRAR</button>

    </form>

    </div>
</body>

</html>