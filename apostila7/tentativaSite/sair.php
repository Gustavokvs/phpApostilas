<?php
session_start();
session_abort();
session_destroy();

setcookie("usuarioLogin", $usuario, time() - 3600);

header("location: index.php");
?>