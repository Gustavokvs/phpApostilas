<?php 
session_start();
if (!isset($_SESSION["usuarioLogin"])) {
    header("location: index.php");
    exit();

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>

<body>

    <div class="container">

        <label>Bem vindo <?php echo htmlspecialchars($_SESSION["$"]) ?></label>


    </div>


</body>

</html>