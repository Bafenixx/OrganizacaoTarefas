<?php 
    namespace Projeto\model;

    class Cadastro{
        private string $nome;
        private string $usuarioCadastro;
        private string $email;
        private string $senhaCadastro;

        public function __construct(string $nome, string $usuarioCadastro, string $email, string $senhaCadastro){
            $this->nome = $nome;
            $this->usuarioCadastro = $usuarioCadastro;
            $this->email = $email;
            $this->senhaCadastro = $senhaCadastro;
        }

        public function __get(string $dado): mixed {
            return $this->dado;
        }

        public function __set(string $variavel, string $novoDado): void {
            $this->variavel = $novoDado;
        }

        public function imprimir(): string {
            return "<br>Nome: ".$this->nome.
                   "<br>Usuário: ".$this->usuarioCadastro.
                   "<br>Email: ".$this->email.
                   "<br>Senha: ".$this->senhaCadastro;
        }

    }
?>