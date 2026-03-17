<?php
    namespace Projeto\model;//determinando o local do arquivo pessoa

    class Tarefas{

        public $tarefas = [];

        private string $tarefa; //tipo de variavel comeca com 0
        private string $tarefasSemana;
        private int $id; //variavel com virgula
        private bool $pendente; //comeca com ""
        private string $data; 
       
        public function __construct(string $tarefa,
                                    string $tarefasSemana, 
                                    int $id,
                                    bool $pendente,
                                    string $data)
                                    
        
        {
        $this->tarefa     = $tarefa;
        $this->tarefasSemana     = $tarefasSemana;
        $this->id         = $id;
        $this->pendente   = $pendente;
        $this->data       = $data;
        
        }//fim do construtor 
    
         //metodo get e set
         public function __get($dado){
         
 
             return $this->dado;
         }//fim do get
 
         public function __set(string $variavel, string $novoDado):void
         {
 
             $this->$variavel =$novoDado;
         }//fim do set
    
        public function adicionarTarefas(){
            $this->tarefas[] = [
                "tarefa" => $this -> tarefa,
                "semana" =>$this -> tarefasSemana,
                "pendente" =>$this -> pendente,
                "id" =>$this ->id,
                "data" => $this -> data
            ];

        }

        public function listarTarefas(){
            foreach($this->tarefas as $t){
                echo "Tarefa: ".$t['tarefa']."<br>";
                echo "Semana: ".$t['semana']."<br>";
                echo "ID: ".$t['id']."<br>";
                echo "Situação: ".($t['pendente']? "pendente":
                "concluida"). "<br>";
                echo "Data: ".$t["data"]."<br><br>";

            }
        }
    }
?>