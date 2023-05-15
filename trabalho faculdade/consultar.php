<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$btn = $_POST["consulta"];
$id = $_SESSION['id'];

$sql = "SELECT codproduto, descricao, marca, quantidade, preco FROM produtos WHERE codproduto=$codproduto";
$result = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

//print_r($sql);

echo "<table>";
while($exibe = $result->fetch_assoc()){
   echo "<tr><td>Código do Produto:</td>";
   echo "<td>".$exibe["codproduto"]."</td></tr>";
   echo "<tr><td>Descrição do Produto:</td>";
   echo "<td>".$exibe["descricao"]."</td></tr>";
   echo "<tr><td>Marca:</td>";
   echo "<td>".$exibe["marca"]."</td></tr>";
   echo "<tr><td>Quantidade:</td>";
   echo "<td>".$exibe["quantidade"]."</td></tr>";
   echo "<tr><td>Preço:</td>";
   echo "<td>".$exibe["preco"]."</td></tr>";
}
echo "</table>";

// header("Location: painel.php");

?>