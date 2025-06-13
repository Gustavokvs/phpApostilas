<?php session_start();

$tema = "claro"; // padrão


if (isset($_COOKIE["tema"])) {
    $tema = $_COOKIE["tema"];
}




/* caso a sessão não esteja setada como usuarioLogin, manda o 
usuario de volta pra tela inicial e sai*/
if (!isset($_SESSION["usuarioLogin"])) {
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela logado</title>
    <style>
        body.claro {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        body.escuro {
            background: #000;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .dashboard-container.claro {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .dashboard-container.escuro {
            background: #000;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            color: white;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            margin-top: 10px;
        }

        .logout-button {
            margin-top: 20px;
            display: inline-block;
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-button:hover {
            background-color: #c82333;
        }
    </style>

</head>


<body class="<?= $tema; ?>">
    <!-- O body recebe uma classe por padrão, (TEMA), que quando o tema é mudado, ele muda a classe perante a variavel do tema 
mudada no setTema.php  -->
    <div class="dashboard-container">
        <h1>Bem vindo <?php echo htmlspecialchars($_SESSION["usuarioLogin"]) ?></h1>

        <?php
        if (isset($_COOKIE["usuarioLogin"])) {
            echo "<p>Você marcou a caixinha lembrar: " . htmlspecialchars($_COOKIE["usuarioLogin"]) . "</p>";
        } ?>

        <h1>Tema atual: <?= $tema; ?></h1>


        <p>Escolha seu tema preferido:</p>
        <a href="setTema.php?tema=claro">🌞 Tema Claro</a> |
        <a href="setTema.php?tema=escuro">🌙 Tema Escuro</a>

        <a href="sair.php" class="logout-button">Sair</a>
    </div>
</body>

</html>