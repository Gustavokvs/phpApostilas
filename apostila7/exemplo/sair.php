<?php
session_start();
session_unset();
session_destroy();

setcookie("usuario_salvo", "", time() -3600); //remove o cookie que foi salvo no validar.php

header("location: index.php");


?>