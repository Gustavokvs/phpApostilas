<?php
session_start();


$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


if ($usuario == "admin" && $senha == "1234") {
    $_SESSION["usuario"] = $usuario;


    if (isset($_POST["lembrar"])) {
        setcookie("usuario_salvo", $usuario, time() + 3600); // 1 hora
    }


    header("Location: dashboard.php");
} else {
    echo "Login inválido.";
}
