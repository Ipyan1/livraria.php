<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Usuario.php');
    require_once('Livros.php');
    require_once('Reserva.php');
    require_once('Compra.php');
    require_once('Pessoa.php');

    $usuario1 = new Usuario("777", "Fabi", "SBC", "40028922", "2000", "Fabio", "loveti");

    $livros1 = new Livros(777, "Harry Potter", "J.K Rowling", 30.00, 1);

    $reserva1 = new Reserva(1, "Harry", "19:30", "07/08");

    $compra1 = new Compra("777", "Harry Potter", "J.K Rowling", 30.00, 1);

    $pessoa1 = new Pessoa("777", "Fabio", "SBC", "40028922", "2000", "Fabi", "lovetec");
    
    $conexao = new Conexao();

    $conexao->conectar();

    
    echo $usuario1->validacaoLogin() . "<br>";
    if($usuario1->validarLogin() == "Login Valido!")
        echo $livros1->consulta() . "<br>";
        echo $livros1->realizarCompra() . "<br>";
        echo $livros1->decisaoReserva("sim") . "<br>";
 

    echo $usuario1->imprimir() ."<br>";
    echo $usuario1->validarUsuario(" ", " ");
    echo $livros1->imprimir();
    echo $reserva1->imprimir();
    echo $compra1->realizarCompra();
    echo "<br>".$pessoa1->imprimir();
    echo
    

    


?>