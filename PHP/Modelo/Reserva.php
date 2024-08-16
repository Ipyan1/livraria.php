<?php
    namespace PHP\Modelo;

    class Reserva{
        private int $codigo;
        private string $titulo;
        private string $qtdLivro;
        private string $email;
        private string $nome;
        
               

        //imprimir
        public function __construct(int $codigo,
                                    string $titulo,
                                    int    $qtdLivro,
                                    string $email,
                                    string $nome)
        {
            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->qtdLivro = $qtdLivro;
            $this->email = $email;
            $this->nome = $nome;
           
        }

        //get
        public function __get(string $campo)
        {
            return $this->campo;
        }//fim do get genérico

        //set
        public function __set(string $campo, string $valor):void{
            $this->nome = $valor;
        }//fim do set genérico

        public function imprimir():string{
            return "<br>Código: "  .$this->codigo.
                   "<br>Titulo: " .$this->titulo.
                   "<br>Quantidade de Livro  " .$this->qtdLivro.
                   "<br>E-mail: " .$this->email.
                   "<br>Nome:    " .$this->nome;
                   
        }//fim de imprimir
    }
?> 