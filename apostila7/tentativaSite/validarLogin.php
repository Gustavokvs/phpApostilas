<?php session_start();

/* Criando 2 variaveis que estão recebendo os valores 
que foram escritos no formulário do index.php. */
$usuario = $_POST["usuarioLogin"];
$senha = $_POST["senhaLogin"];


/* Se usuario e senha forem diferentes de nulo, a sessão recebe o 
nome do usuario.*/
if ($usuario != " " && $senha != " ") {
    $_SESSION["usuarioLogin"] = $usuario;

    /* se a caixa lembrar está setada(marcada), cria um cookie
    pra salvar a sessão por 1 hora*/
    if (isset($_POST["lembrar"])) {
        setcookie("usuarioLogin", $usuario, time() + 3600);
        header("location: telaLogado.php");

        /* caso usuario e senha estejam vazios, diz q o login é inválido*/
    } else {
        echo "login inválido";
    }

}


?>