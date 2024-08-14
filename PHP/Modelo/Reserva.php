<?php
    namespace PHP\Modelo;

    class Reserva{
        private int $codigo;
        private string $email;
        private string $nome;
        private string $titulo;
        private string $qtdLivro;
        

        //imprimir
        public function __construct(int $codigo,
                                    string $email,
                                    string $nome,
                                    string $titulo,
                                    string $qtdLivro)
        {
            $this->codigo = $codigo;
            $this->email = $email;
            $this->nome = $nome;
            $this->titulo = $titulo;
            $this->qtdLivro = $qtdLivro;
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
                    "<br>E-mail: " .$this->email.
                   "<br>Nome:    " .$this->nome.
                   "<br>Titulo: " .$this->titulo.
                   "<br>Quantidade de Livro  " .$this->qtdLivro;
    }//fim de imprimir
    }
?> 