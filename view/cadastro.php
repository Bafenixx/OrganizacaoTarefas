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
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="cadastro">
    <h1>Cadastro: </h1>
    <form method="POST">
        <label>Nome Completo: </label>
        <input type="text" name="nome" id="nome"/><br><br>
        <label>Usuário: </label>
        <input type="text" name="usuarioCadastro" id="usuarioCadastro" placeholder="gamertag"/><br><br>
        <label>E-mail: </label>
        <input type="email" name="email" id="email" placeholder="nome@exemplo.com"/><br><br>
        <label>Senha: </label>
        <input type="password" name="senhaCadastro" id="senhaCadastro" placeholder="Mínimo 8 caracteres" minlength="8"/><br><br>
        <button type="submit">Cadastrar
            <?php 
                try{
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
                }catch(Except $erro){
                    echo "Algo deu errado!!! <br><br> $erro";
                }
            ?>
        </button>
        
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>