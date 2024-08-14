<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');

    class Pessoa{
        //Declarando variáveis 
        private string $cpf;
        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $dtNascimento;
        private string $login;
        private string $senha;


        //Método construtor
        public function __construct(string $cpf, string $nome, string $endereco, string $telefone, string $dtNascimento, string $login, string $senha){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dtNascimento = $dtNascimento;
            $this->login = $login;
            $this->senha = $senha;
        }//fim do construtor

        //Métodos de acesso e modificação
        
        public function __get(string $nome){
            return $this->nome;    
        }//fim do get genérico

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Endereco: ".$this->endereco.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Data de Nascimento: ".$this->dtNascimento.
                   "<br>Login: ".$this->login.
                   "<br>Senha: ".$this->senha;
        }//fim do imprimir
    }//fim da classe
?>

<!doctype html>
    <html lang="pt-BR">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      </head>
      <body>
        <h2 class="mb-4 mt-4 text-center">Cadastro</h2>
        <a href="./Pessoa.php"></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <button type="submit" class="btn btn-primary mb-3 mt-4">Cadastrar</button>
      </body>
    </html>