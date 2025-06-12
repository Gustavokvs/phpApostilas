<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .checkbox {
            margin-top: 15px;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        .msg {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <h2>Login</h2>
        <?php if (isset($_SESSION['erro'])): ?>
            <div class="msg"><?= $_SESSION['erro'];
            unset($_SESSION['erro']); ?></div>
        <?php endif; ?>

        <form action="validarLogin.php" method="post">
            <label> Usuario:</label>
            <input type="text" name="usuarioLogin" value="<?= $_COOKIE["usuario"] ?? '' ?>" required>

            <label>Senha:</label>
            <input type="password" , name="senhaLogin" required>

            <div class="checkbox">
                <label><input type="checkbox" name="lembrar" <?= isset($_COOKIE['usuario']) ? 'checked' : '' ?>>
                    Lembrar-me</label>
            </div>

            <input type="submit" value="Entrar">

        </form>


        
    </div>

</body>

</html>