<?php 
        $servername="localhost";
        $username= "root";
        $password="";
        $dbname="Prova";

   // Cria conexão
    $conexao = new mysqli ($servername, $username,$password,$dbname);
   //Verifica conexão
   if($conexao-> connect_error){
                              die("Falha na Conexão com o BD"+$conexao->connect_error);
                            }
    $produto= $_POST['produto'];
    $preco= $_POST['preco'];
    $fornecedor= $_POST['fornecedor'];
    
    $inserir= mysqli_query($conexao, "INSERT INTO Produto(Nome_produto,Preco,Cod_fornecedor)
                                                  VALUES('$produto','$preco','$fornecedor')")
  or die("Erro a cadastrar o Produto") ;
  echo "Produto cadastrado no Sistema!"                                               
?>