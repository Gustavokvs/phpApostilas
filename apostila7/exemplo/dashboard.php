<?php
session_start();


if (!isset($_SESSION["usuario"])) {
    header("location: index.php");

    exit;
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
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

<body>

    <div class="dashboard-container">
        <h1>Bem vindo,
            <?= // QUANDO SE COLOCA SÓ O <? TAMBÉM ESTÁ ABRINDO UM PHP, PORÉM GERALMENTE UTILIZADO EM SÓ UMA LINHA.
                htmlspecialchars($_SESSION["usuario"]);
            ?>!
        </h1>

        <?php

        if (isset($_COOKIE["usuario_salvo"])): ?>
            <p>Você marcou "Lembrar-me": <strong> <?= htmlspecialchars($_COOKIE["usuario_salvo"]) ?></strong></p>
            <?php
        endif; ?>

        <a href="sair.php" class="logout-button">Sair</a>
    </div>

</body>

</html>