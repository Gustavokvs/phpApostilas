<?php 
session_start();

if (isset($_GET["tema"])) {
    $tema = $_GET["tema"];


    // Define cookie por 30 dias
    setcookie("tema", $tema, time() + (30 * 24 * 60 * 60));
}


header("Location: telaLogado.php");

?>