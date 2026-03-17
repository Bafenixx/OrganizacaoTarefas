<?php
    namespace Projeto\view;
    require_once("../model/tarefas.php");
    use Projeto\model\Tarefas;
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Tarefas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastrar Tarefa</h1>
    <form method="POST">
        <label>Tarefa: </label>
        <br> 
        <input type="text" name="tarefa" id="tarefa"/>
        <br> 
        <label>Semana: </label>
        <br> 
        <input type="week" name="semana" id="semana"/>
        <br> 
        <label>ID: </label>
        <br> 
        <input type="number" name="id" id="id"/>
        <br> 
        <label>Status: </label>
        <br> 
        <input type="text" name="status" id="status"/>           
        <br> 
        <label>Data: </label>
        <br> 
        <input type="date" name="data" id="data"/>
        <br><br>

        <button type="submit">Cadastrar
            <?php
                try{
                    $tarefa     = $_POST['tarefa'];
                    $semana     = $_POST['semana'];
                    $id         = $_POST['id'];
                    $status     = $_POST['status'];           
                    $data       = $_POST['data'];
                

                    $t1 = new tarefas ($tarefa, $semana, $id, $status,
                                            $data);

                    $t1 -> adicionarTarefas();
                                    
                
                }catch(Excpet $erro){
                    echo "Algo deu errado!!!<Br><br> $erro";
                }  
            ?>
        </button><br><br>
    
        <?php
           echo $t1 ->listarTarefas();
        ?>
    </form>
    <button><a href="caminho.php">Voltar</a></button>
    </body>
    
    
    
    
    
    <body>   