<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentando sozinho</title>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($_SESSION['erro'])) {
            echo '<div class ="msg erro">' . $_SESSION['erro'] . '</div>';
            unset($_SESSION['erro']);
        } ?>

        <form action="validarLogin.php" method="post">
            <label>Usuario:</label>
            <input type="text" name="usuarioLogin" value="<?php $_COOKIE["usuario"] ?? "" ?>" required>
            <label>Senha:</label>
            <input type="password" name="senha" required>

            <label>Lembrar:<input type="checkbox" name="lembrar" <?php isset($_COOKIE["usuario"]) ? 'checked' : "" ?>></label>
            <br>
            <input type="submit" value="Entrar">
        </form>
    </div>

</body>

</html>