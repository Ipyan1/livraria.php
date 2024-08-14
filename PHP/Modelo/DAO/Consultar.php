<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        
        function consultarIndividual(
            Conexao $conexao,
            string $nomeTabela,
            string $nomeCampo, 
            string $codigo)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "select * from $nomeTabela where $nomeCampo = '$codigo'";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["nome"] == $codigo){
                        echo "\nNome: ".$dados["nome"].
                             "\nEndereço: ".$dados["endereco"].
                             "\nTelefone: ".$dados["telefone"].
                             "\nData de Nascimento".$dados["dtNascimento"].
                             "\nLogin: ".$dados["login"].
                             "\nSenha: ".$dados["senha"];
                        return;//Encerrando um processo
                    }
                    echo "CPF digitado não é válido!";
                }//fim do enquanto
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim de método

        function consultarTudo(Conexao $conexao,
                            string $nomeTabela
        ){
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>CPF: ".$dados["cpf"].
                         "<br>Nome: ".$dados["nome"].
                         "<br>Telefone: ".$dados["telefone"].
                         "<br>Data de Nascimento: ".$dados["dtNascimento"].
                         "<br>Login: ".$dados["login"].
                         "<br>Senha: ".$dados["senha"];
                }//fim do while
            }catch(Except $erro){
                echo $erro;
            }

        }//fim do método




    }//fim da classe
?>