<?php
    namespace PHP\Modelo;

    class Compra{
        private int $codigo;
        private string $cartaoCredito;
        private string $nome;
        private string $dataDeValidade;
        private string $cvv;
        private string $cpf;
        
        //Construtor
        public function __construct(int $codigo,
                                    string $cartaoCredito,
                                    string $nome,
                                    string $dataDeValidade,  
                                    string $cvv,
                                    string $cpf)
        {
            $this->codigo = $codigo;
            $this->cartaoCredito = $cartaoCredito;
            $this->nome = $nome;
            $this->dataDeValidade = $dataDeValidade;
            $this->cvv = $cvv;
            $this->cpf = $cpf;
           
        }//Fim do construtor
   
   public function __get(string $campo)
    {
      return $this->campo;
    }//Fim do get genérico

    public function __set(string $campo, string $valor):void
    {
      $this->campo = $valor;
    }//Fim do set genérico

    public function imprimir(){
       return "<br>Código: " . $this->codigo . 
              "<br>Cartão de Crédito: " . $this->cartaoCredito . 
              "<br>Nome: " . $this->nome . 
              "<br>Data de Validade: " .$this->dataDeValidade .
              "<br>CVV: " . $this->cvv . 
              "<br>CPF: " . $this->cpf . 
        }//Fim do imprimir
    }//Fim da classe Compra
?>