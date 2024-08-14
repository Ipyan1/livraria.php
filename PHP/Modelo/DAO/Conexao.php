<?php
    namespace PHP\Modelo\DAO;

    class Conexao{

        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','livrariaTI18N');
                if($conn){
                    echo "<br>Conectado com Sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro){
                return $erro;
            }
        }//fim de conectar
    }//fim de classe
?>