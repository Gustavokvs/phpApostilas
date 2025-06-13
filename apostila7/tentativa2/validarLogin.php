<?php

session_start();


$usuario = $_POST["usuarioLogin"];
$senha = $_POST["senha"];


if ($usuario != "" && $senha != "") {
   
    $_SESSION["usuarioLogin"] = $usuario;

    if (isset($_POST["lembrar"])) {
        setcookie("usuarioLogin", $usuario, time() + 3600);
    }
    header("location: dashboard.php");

} else {


    echo "Login inválido";

}



?>