<?php 
    namespace Projeto\view;
    require_once("../model/loginPessoa.php");
    require_once("../model/cadastroPessoa.php");
    use Projeto\model\Login;
    use Projeto\model\Cadastro;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login: </h1>
    <form method="POST">
        <label>Usuário: </label>
        <input type="text" name="usuarioLogin" id="usuarioLogin"/><br>
        <label>Senha: </label>
        <input type="text" name="senhaLogin" id="senhaLogin"/><br>
        <button type="submit">Entrar
            <?php
                $usuarioLogin    = $_POST['usuarioLogin']; 
                $senhaLogin      = $_POST['senhaLogin']; 
                $usuarioCadastro = $_POST['usuarioCadastro'];
                $senhaCadastro   = $_POST['senhaCadastro'];

                session_start();

                $cadastro = new Cadastro($usuarioLogin, $senhaLogin, $_SESSION['usuarioCadastro'], $_SESSION['senhaCadastro']);

                if($senhaCadastro == $senhaLogin){
                    echo "ok";
                }else{
                    echo "senha incorreta!";
                }
            ?>
        </button>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>