<?php

namespace PHP\Modelo;

class Livros{
        private    int $codigo;
        private string $titulo;
        private string $autor;
        private float $preco;
        private int $qtdLivros;

        //Construtor
        public function __construct(
            int    $codigo,
            string $titulo,
            string $autor,
            string $preco,
            string $qtdLivros)
        {
            $this->codigo  = $codigo;
            $this->titulo = $titulo;
            $this->autor  = $autor;
            $this->preco = $preco;
            $this->qtdLivros = $qtdLivros;

        }//fim de construtor

         //get
         public function __get(string $campo){
            return $nome;
        }//fim do get genérico

        //set
        public function __set(string $campo, string $valor):void{
            $this->nome = $valor;
        }//fim do set genérico

        //imprimir
        public function imprimir():string{
        
            return "<br>Código: ".$this->codigo.
                   "<br>Título:     ".$this->titulo.
                   "<br>Autor:     ".$this->autor.
                   "<br>Preço:     ".$this->preco.
                   "<br>Quantidade de Livros:     ".$this->qtdLivros;

    }//fim de imprimir

    //consulta
    public function consulta():string{
        switch($this->codigo){
            case 1:
                return  "<br>Código: " .$this->codigo. 
                        "<br>Título: " ."A Guerra dos Tronos". 
                        "<br>Autor: " . "George R.R Martin".
                        "<br>Preço: ". "R$ 29,90". 
                        "<br>Quantidade de Livros: " . 1;
                break;
                case 2:
                    return  "<br>Código: " . $this->codigo. 
                            "<br>Título: " . "A Pedra Filosofal". 
                            "<br>Autor: " . "  J.K. Rowling".
                            "<br>Preço: " . "   R$ 34,90". 
                            "<br>Quantidade de Livros: " . 2;
                    break;
                case 3:
                    return  "<br>Código: " .$this->codigo. 
                            "<br>Título: " . " A Câmara Secreta". 
                            "<br>Autor: " . "    J.K. Rowling".
                            "<br>Preço: " . "   R$ 24,90". 
                            "<br>Quantidade de Livros: " . 3;
                    break;
            default:
                return "Código inexistente! ";
                break;
        }
    }//fim de consulta


    public function realizarCompra()
        {
            switch($this->codigo){
                case 1:
                    $this->quantidade = 5;
                    $this->quantidade -= 1;
                    return "<br>Aprovado! Compra realizada!, " . $this->quantidade . " Quantidade restante";
                    break;
                case 2;
                    return "<br>Indisponível no momento, deseja realizar a reserva?";
                    break;
                }

        }//Fim do realizarCompra

        public function decisaoReserva(string $decisao) //decidir caso deseje reservar caso deseje reservar
        {
            if($this->codigo == 2){
                switch($decisao){
                    case "sim":
                        return "Reservado com sucesso!";
                        break;
                    case "não":
                        return "Obrigada por comprar conosco, Ótimo dia!";
                        break;
                    default:
                        return "Informe sim ou não";
                        break;
                }
            }
        }//Fim da decisao

    }//Fim da Classe Livro

?>

