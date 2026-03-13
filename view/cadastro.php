<?php 
    namespace Projeto\view;
    require_once("../model/cadastroPessoa.php");
    use Projeto\model\Cadastro;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro: </h1>
    <form method="POST">
        <label>Nome completo: </label>
        <input type="text" name="nome" id="nome"/><br>
        <label>Usuário: </label>
        <input type="text" name="usuarioCadastro" id="usuarioCadastro"/><br>
        <label>E-mail: </label>
        <input type="text" name="email" id="email"/><br>
        <label>Senha: </label>
        <input type="text" name="senhaCadastro" id="senhaCadastro"/><br>
        <button type="submit">Cadastrar
            <?php 
                session_start();
                $nome            = $_POST['nome'];
                $usuarioCadastro = $_POST['usuarioCadastro'];
                $email           = $_POST['email'];
                $senhaCadastro   = $_POST['senhaCadastro'];

                $cadastro = new Cadastro($nome, $usuarioCadastro, $email, $senhaCadastro);
                
                $_SESSION["usuarioCadastro"] = $usuarioCadastro;
                $_SESSION["senhaCadastro"] = $senhaCadastro;
                //Mudar para a tela 
                header('location: login.php');
            ?>
        </button>
        
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>