<?php
include('conexao.php');
session_start();

$codproduto = $_POST["codproduto"];
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$btn = $_POST["consulta"];
$id = $_SESSION['id'];



$sql = "SELECT codproduto, descricao, marca, quantidade, valor FROM produtos WHERE codproduto=$codproduto";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

while($exibe = mysqli_fetch_row($sql)){

    echo  "<tr><td>Código do Produto</td>";
    echo "<td>".$exibe[1]."</td></tr>";
    echo  "<tr><td>Descrição</td>";
    echo "<td>".$exibe[2]."</td></tr>";
    echo  "<tr><td>Marca</td>";
    echo "<td>".$exibe[3]."</td></tr>";
    echo  "<tr><td>Quantidade</td>";
    echo "<td>".$exibe[4]."</td></tr>";
    echo  "<tr><td>Valor</td>";
    echo "<td>".$exibe[5]."</td></tr>";
 
 }
 
 echo "</table>";

// header("Location: painel.php");

?>