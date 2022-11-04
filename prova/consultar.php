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
$fornecedor= $_POST['fornecedor'];

$consulta=mysqli_query($conexao, "SELECT Cod_produto,Nome_produto,preco,Cod_fornecedor
                                  FROM Produto
                                  WHERE cod_fornecedor= '$fornecedor'");
  echo"<table>";
  echo "<tr>";                                
  echo "<th>código</th>";
  echo "<th>Nome do Produto</th>";
  echo "<th>Preço</th>";
  echo "<th>Fornecedor</th>";
  while($linha=mysqli_fetch_array($consulta)){
                                                echo "<tr>";
                                                echo "<td>".$linha['Cod_produto']."</td>";
                                                echo "" 
  }
?>                          