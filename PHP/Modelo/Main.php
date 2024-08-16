<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Usuario.php');
    require_once('Livros.php');
    require_once('Reserva.php');
    require_once('Compra.php');
    require_once('Pessoa.php');

    $usuario1 = new Usuario("777", "Fabi", "SBC", "40028922", "2000", "Fabio", "loveti");

    $livros1 = new Livros(1, "A Guerra dos Tronos", "George R.R Martin", 29,90, 1);

    $reserva1 = new Reserva(02, "A Pedra Filosofal", " ", "davi@davi.com.br","Davi");

    $compra1 = new Compra("01", "4455.4455.4555", "Davi ", "01/01/2025", "123", "123.456.789-00");

    $pessoa1 = new Pessoa("555.555.555-00", "Fabio", "Rua Nestor, 41 - SBC", "4002-8922", "15/01/2000", "Fabi", "lovetec");
    
    $conexao = new Conexao();

    $conexao->conectar();

    
    echo $usuario1->validacaoLogin() . "<br>";
    if($usuario1->validarUsuario() == "Login Valido!")
        echo $livros1->consulta() . "<br>";
        echo $livros1->realizarCompra() . "<br>";
        echo $livros1->decisaoReserva("sim") . "<br>";
 

    echo $usuario1->imprimir() ."<br>";
    echo $usuario1->validarUsuario(" ", " ");
    echo $livros1->imprimir();
    echo $reserva1->imprimir();
    echo $compra1->imprimir();
    echo "<br>".$pessoa1->imprimir();
    echo
    

    


?>