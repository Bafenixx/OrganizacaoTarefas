<?php 
    namespace Projeto\model;

    class Login{
        private string $usuarioLogin;
        private string $senhaLogin;

        public function __construct(string $usuarioLogin, string $senhaLogin){
            $this->usuariologin = $usuarioLogin;
            $this->senhaLogin =$senhaLogin;
        }

        public function __get(string $dado): mixed {
            return $this->dado;
        }

        public function __set(string $variavel, string $novoDado): void {
            $this->variavel = $novoDado;
        }

        public function imprimir(): string{
            return "<br>Usuário: ".$this->usuarioLogin.
                   "Senha: ".$this->senhaLogin;
        }
    }
?>