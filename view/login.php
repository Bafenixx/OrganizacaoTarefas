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
    <link rel="stylesheet" href="../view/estilo.css">
</head>
<body class="login">
    <h1>Login: </h1>
    <form method="POST">
        <label>Usuário: </label>
        <input type="text" name="usuarioLogin" id="usuarioLogin"/><br><br>
        <label>Senha: </label>
        <input type="password" name="senhaLogin" id="senhaLogin"/><br><br>
        <button type="submit">Entrar
            <?php
                try{
                    $usuarioLogin    = $_POST['usuarioLogin']; 
                    $senhaLogin      = $_POST['senhaLogin']; 
                    $usuarioCadastro = $_POST['usuarioCadastro'];
                    $senhaCadastro   = $_POST['senhaCadastro'];

                    session_start();

                    $cadastro = new Cadastro($usuarioLogin, $senhaLogin, $_SESSION['usuarioCadastro'], $_SESSION['senhaCadastro']);

                    if($_SESSION['senhaCadastro'] == $senhaLogin && $_SESSION['usuarioCadastro'] == $usuarioLogin){
                        header('location: tarefas.php');
                    }else{
                        echo "Usuário ou senha incorreto!";
                    }
                }catch(Except $erro){
                    echo "Algo deu errado!!! <br<br> $erro";
                }
            ?>
        </button><br>
        <p>Não se cadastrou ainda? <a href="cadastro.php">Clique aqui</a>!</p>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>