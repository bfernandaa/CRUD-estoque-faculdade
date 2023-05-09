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



$sql = "SELECT descricao, marca, quantidade, valor FROM produtos WHERE codproduto=$codproduto";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);

if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      printf ("%s (%s)\n", $row[0], $row[1], $row[2], $row[3], $row[4]);
    }
    $result -> free_result();
  }

// header("Location: painel.php");

?>