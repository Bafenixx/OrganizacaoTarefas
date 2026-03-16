<?php
    namespace Projeto\view;
    require_once("../model/tarefas.php");
    use Projeto\model\Tarefas;
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Tarefa</title>
</head>
<body>
    <h1>Cadastrar Tarefa</h1>
    <form method="POST">
        <label> nome: </label>
        <br> 
        <input type="text" name="tarefa" id="tarefa"/>
        <br> 
        <label> semana: </label>
        <br> 
        <input type="number" name="semana" id="semana"/>
        <br> 
        <label> id: </label>
        <br> 
        <input type="number" name="id" id="id"/>
        <br> 
        <label> status: </label>
        <br> 
        <input type="text" name="status" id="status"/>           
        <br> 
        <label> data: </label>
        <br> 
        <input type="number" name="data" id="data"/>
        <br>

        <button type="submit">cadastrar</button>
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
                   echo "algo deu errado!!!<Br><br> $erro";
            }  
        ?>
    
        <?php
           echo $t1 ->listarTarefas();
        ?>
    </form>
    <button><a href="index.php">voltar</a></button>
    </body>
    
    
    
    
    
    <body>   