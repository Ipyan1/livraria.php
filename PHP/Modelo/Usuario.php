<?php

namespace PHP\Modelo;

class Usuario{
        private string $cpf;
        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $dtNascimento;
        private string $login;
        private string $senha;

        //Construtor
        public function __construct(
            string $cpf,
            string $nome,
            string $endereco,
            string $telefone,
            string $dtNascimento,
            string $login,
            string $senha)
        {
            $this->cpf         = $cpf;
            $this->nome         = $nome;
            $this->endereco     = $endereco;
            $this->telefone     = $telefone;
            $this->dtNascimento = $dtNascimento;
            $this->login        = $login;
            $this->senha        = $senha;
        }

         //get
         public function __get(string $nome){
            return $nome;
        }//fim de get genérico

        //set
        public function __set(string $nome, string $valor):void{
            $this->nome = $valor;
        }//fim de set genérico

        //fim de imprimir
        public function imprimir():string{
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Endereço:     ".$this->endereco.
                   "<br>Telefone:     ".$this->telefone.
                   "<br>Nascimento:     ".$this->dtNascimento.
                   "<br>Login:     ".$this->login.
                   "<br>Senha    :     ".$this->senha;
        }//fim de método

        public function validarUsuario(string $login, string $senha)
        {
            return $login . " " . $senha;
        }

        public function validacaoLogin(string $login, string $senha){
            if($this->login == 'Fabio' &&  $this->senha == "loveti"){
               return "Login válido";
            }else{
               return "Login inválido";
            }    
         }//fim de metodo validação  
    }







?>